<?php

namespace App\Http\Controllers\Invoice;

use App\Models\Invoice;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class InvoicesController extends Controller
{
    public function invoice(Request $request){
        $perPage = $request->get('perPage') ?? 10;
        $invoices = Invoice::leftJoin('products', 'products.invoice_id', '=', 'invoices.id')
        ->select('invoices.id','invoices.invoice_number','invoices.start_date','invoices.due_date','invoices.status', DB::raw('SUM(products.total) as total'))
        ->groupBy('invoices.id')
        ->paginate($perPage);

        return view('invoices.index',compact('invoices'));
    }

    public function index(Request $request){
        return view('invoices.create');
    }

    public function create(Request $request) {
        $invoicesData = $request->only([
            'start_date',
            'invoice_number',
            'due_date',
            'from_address',
            'from_state',
            'from_pincode',
            'to_address',
            'to_state',
            'to_pincode',
        ]);
        $invoicesData['status'] = 'unpaid';

        $productData =  $request->only(['tax','discount']);
        $invoicesItemsData = $request->only(['name']);
        $item_qty = $request->only(['quantity']);
        $item_price = $request->only(['price']);
        $description = $request->only(['description']);
        $invoicesListData = [];
        $invoice = Invoice::updateOrCreate($invoicesData);
        for ($i=0; $i < count($invoicesItemsData['name'])-1; $i++) {
            $price = $item_price['price'][$i];
            $qty =  $item_qty['quantity'][$i];
            $item_total = (floatval($price) * (int) $qty);
            $item_tax = ($item_total * $productData['tax'])/100;
            $item_discount = ($item_total * $productData['discount'])/100;
            $final_total = ($item_total + $item_tax) - $item_discount;
            $invoicesListData[] = [
                'item_name' => $invoicesItemsData['name'][$i],
                'item_qty' => $qty,
                'item_price' => $item_total,
                'item_tax' => $item_tax,
                'discount' => $item_discount,
                'invoice_id' => $invoice->id,
                'total' => $final_total,
                'description' => $description['description'][$i]
            ];
        }

        $invoice->product()->insert($invoicesListData);
        return redirect()->route('invoice.index');
    }

    public function view(Request $request, $id) {
        $invoice_id = decrypt($id);
        $invoices = Invoice::with(['product','payment'])->findOrFail($invoice_id);
        $invoiceData = viewInvoicePageDataGenerate($invoices);
        return view('invoices.view',compact('invoiceData'));
    }

    public function paymentCreate($id) {
        $invoice_id = decrypt($id);
        $invoices =Invoice::with(['product','payment'])->findOrFail($invoice_id);
        $invoiceData = viewInvoicePageDataGenerate($invoices);
        $line_items = [];
        foreach ($invoiceData['products'] as $product) {
            $line_items[] = [
                'price_data' => [
                    'currency' => $invoiceData['currency'] ?? 'INR',
                    'product_data' => [
                        'name' => $product['product_name'],
                    ],
                    'unit_amount' =>(($product['product_total_price'] ?? 0) * 100) / $product['produte_qty'],
                ],
                'quantity' => $product['produte_qty'],
            ];
        }
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => $line_items,
            'mode' => 'payment',
            'invoice_creation' => ['enabled' => true],
            'success_url' => route('payment.success',$id),
            'cancel_url' => route('payment.cancel'),
        ]);
        return redirect($checkout_session->url);
    }

    public function paymentSuccess($id) {
        return response()->json('payment successfully');
    }

    public function paymentCancel()  {
        return response()->json('payment cancel');
    }


    public function invoicePdf($id) {
        $invoice_id = decrypt($id);
        $invoices = Invoice::with(['product','payment'])->findOrFail($invoice_id);
        $invoiceData = viewInvoicePageDataGenerate($invoices);
        $invoicePDF = PDF::loadView('invoices.pdf', ['invoiceData'=> $invoiceData]);
        $invoiceName = $invoiceData['invoice_no'];
        return $invoicePDF->download($invoiceName.'.pdf');
    }
}
