@extends('layouts.header')

@section('title', 'INVOICE')

@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Invoice 1
                    </h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Invoice Manager</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">View Invoices</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Primary button-->
                    <a href="{{ route('invoice.index') }}" class="btn btn-sm fw-bold btn-primary">Create</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Invoice 2 main-->
                <div class="card">
                    <!--begin::Body-->
                    <div class="card-body p-lg-20">
                        <!--begin::Layout-->
                        <div class="d-flex flex-column flex-xl-row">
                            <!--begin::Content-->
                            <div class="flex-lg-row-fluid me-xl-0 mb-10 mb-xl-0">
                                <!--begin::Invoice 2 content-->
                                <div class="mt-n1">
                                    <!--begin::Top-->
                                    <div class="d-flex flex-stack pb-10">
                                        <!--begin::Logo-->
                                        <a href="#">
                                            <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/code-lab.svg') }}" />
                                        </a>
                                        <!--end::Logo-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-sm btn-success">Pay Now</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Wrapper-->
                                    <div class="m-0">
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-3 text-gray-800 mb-8">Invoice {{ $invoiceData['invoice_no'] }}</div>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-11">
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Issue Date:</div>
                                                <!--end::Label-->
                                                <!--end::Col-->
                                                <div class="fw-bold fs-6 text-gray-800">{{ $invoiceData['issue_date'] }}</div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Due Date:</div>
                                                <!--end::Label-->
                                                <!--end::Info-->
                                                <div
                                                    class="fw-bold fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                                    <span class="pe-2">{{ $invoiceData['due_date'] }}</span>
                                                    <span class="fs-7 text-danger d-flex align-items-center">
                                                        <span class="bullet bullet-dot bg-danger me-2"></span>Due in 7
                                                        days</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row g-5 mb-12">
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Issue For:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800">{{ $invoiceData['from_address'] }}</div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-semibold fs-7 text-gray-600">{{ $invoiceData['from_state'] }}
                                                    <br />{{ $invoiceData['from_pincode'] }}
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                            <div class="col-sm-6">
                                                <!--end::Label-->
                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Issued By:</div>
                                                <!--end::Label-->
                                                <!--end::Text-->
                                                <div class="fw-bold fs-6 text-gray-800">{{ $invoiceData['to_address'] }}</div>
                                                <!--end::Text-->
                                                <!--end::Description-->
                                                <div class="fw-semibold fs-7 text-gray-600">{{ $invoiceData['to_state'] }}
                                                    <br />{{ $invoiceData['to_pincode'] }}
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Content-->
                                        <div class="flex-grow-1">
                                            <!--begin::Table-->
                                            <div class="table-responsive border-bottom mb-9">
                                                <table class="table mb-3">
                                                    <thead>
                                                        <tr class="border-bottom fs-6 fw-bold text-muted">
                                                            <th class="min-w-175px pb-2">Products</th>
                                                            <th class="min-w-175px pb-2">Description</th>
                                                            <th class="min-w-70px text-end pb-2">Quantity</th>
                                                            <th class="min-w-70px text-end pb-2">Tax</th>
                                                            <th class="min-w-70px text-end pb-2">Descount</th>
                                                            <th class="min-w-80px text-end pb-2">Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @isset($invoiceData)
                                                            @foreach ($invoiceData['products'] as $product)
                                                                <tr class="fw-bold text-gray-700 fs-5 text-end">
                                                                    <td class="d-flex pt-6">
                                                                        <i class="fa fa-genderless text-success fs-2 me-2"></i>{{ $product['product_name'] }}
                                                                    </td>
                                                                    <td class="pt-6 text-start">{{ $product['product_description'] }}</td>
                                                                    <td class="pt-6">{{ $product['produte_qty'] }}</td>
                                                                    <td class="pt-6">${{ $product['product_tax'] }}</td>
                                                                    <td class="pt-6">${{ $product['product_discount'] }}</td>
                                                                    <td class="pt-6 text-dark fw-bolder">${{ $product['product_discount'] }}</td>
                                                                </tr>
                                                            @endforeach
                                                        @endisset
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                            <!--begin::Container-->
                                            <div class="d-flex justify-content-end">
                                                <!--begin::Section-->
                                                <div class="mw-300px">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Accountname-->
                                                        <div class="fw-semibold pe-10 text-gray-600 fs-7">Subtotal:</div>
                                                        <!--end::Accountname-->
                                                        <!--begin::Label-->
                                                        <div class="text-end fw-bold fs-6 text-gray-800">$ {{ $invoiceData['sub_total'] }}</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Accountname-->
                                                        <div class="fw-semibold pe-10 text-gray-600 fs-7">TOtal TAX :</div>
                                                        <!--end::Accountname-->
                                                        <!--begin::Label-->
                                                        <div class="text-end fw-bold fs-6 text-gray-800">$ {{ $invoiceData['total_tax'] }}</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Accountnumber-->
                                                        <div class="fw-semibold pe-10 text-gray-600 fs-7">Total Discount :
                                                        </div>
                                                        <!--end::Accountnumber-->
                                                        <!--begin::Number-->
                                                        <div class="text-end fw-bold fs-6 text-gray-800">$ {{ $invoiceData['total_disount'] }}</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Code-->
                                                        <div class="fw-semibold pe-10 text-gray-600 fs-7">Total</div>
                                                        <!--end::Code-->
                                                        <!--begin::Label-->
                                                        <div class="text-end fw-bold fs-6 text-gray-800">$ {{ $invoiceData['total_amont'] }}</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Container-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Invoice 2 content-->
                            </div>
                            <!--end::Content-->

                        </div>
                        <!--end::Layout-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Invoice 2 main-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection
