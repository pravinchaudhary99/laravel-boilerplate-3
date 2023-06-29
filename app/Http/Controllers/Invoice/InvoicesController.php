<?php

namespace App\Http\Controllers\Invoice;

use App\Models\Invoice;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;

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
        viewInvoicePageDataGenerate($invoices);
        return view('invoices.view');
    }

}
