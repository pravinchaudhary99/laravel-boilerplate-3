<?php

function viewInvoicePageDataGenerate($invoices) : array {
    $productData = [];
    $paymentData = [];
    $total_tax = 0;
    $total_discount = 0;
    $sub_total = 0;
    $total_amont = 0;

    $products = $invoices['product']->toArray();
    foreach ($products as $product) {
        $productData[]=[
            'product_name' => $product['item_name'],
            'produte_qty' => $product['item_qty'],
            'product_tax' => $product['item_tax'],
            'product_discount' => $product['discount'],
            'product_price' => $product['item_price'],
            'product_total_price' => $product['total'],
            'product_description' => $product['description']
        ];
        $total_discount += $product['discount'];
        $total_tax += $product['item_tax'];
        $sub_total += $product['item_price'];
        $total_amont += $product['total'];
    }

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
        'invoice_id' => $invoices->id,
        'total_tax' => $total_tax,
        'total_disount' => $total_discount,
        'sub_total' => $sub_total,
        'total_amont' => $total_amont
    ];
    $data['products'] = $productData;
    $payment = array_reduce($invoices['payment']->toArray(), 'array_merge', array());
    if(! empty($payment)){
        $paymentData = [
            'total_amount' => $payment['total_amount'],
            'due_date' => $payment['due_date'],
            'status' => $payment['status'],
        ];
    };
    $data['payment'] = $paymentData;
    return $data ?? [];
}