<?php

function viewInvoicePageDataGenerate($invoices) : array {
    $productData = [];
    $paymentData = [];
    $data = [
        'invoice_no' => $invoices->invoice_number,
        'issue_date' => $invoices->start_date,
        'due_date' => $invoices->due_date,
        'due_date_in' => 7,
        'from_address' => $invoices->from_address,
        'from_state' => $invoices->from_state,
        'from_pincode' => $invoices->from_pincode,
        'to_address' => $invoices->to_address,
        'to_state' => $invoices->to_state,
        'to_pincode' => $invoices->to_pincode,
        'invoice_id' => $invoices->id
    ];
    $products = $invoices['product']->toArray();

    foreach ($products as $product) {
        $productData[]=[
            'product_name' => $product['item_name'],
            'produte_qty' => $product['item_qty'],
            'product_price' => $product['total'],
            'product_description' => $product['description']
        ];
    }
    $data['products'] = $productData;
    $payment = $invoices['payment']->toArray();
    if(! empty($payment)){
        $paymentData = [
            'total_amount' => $payment->total_amount,
            'due_date' => $payment->due_date,
            'status' => $payment->status,
        ];
    };
    $data['payment'] = $paymentData;
    return $data ?? [];
}