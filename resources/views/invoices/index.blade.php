@extends('layouts.header')

@section('title', 'INVOICE VIEW')

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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Customer
                        List</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Customers</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Primary button-->
                    <a href="{{ route('invoice.create') }}" class="btn btn-sm fw-bold btn-primary">Create</a>
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
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-customer-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_customers_table .form-check-input"
                                                value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-125px">Invoice No</th>
                                    <th class="min-w-125px">Start Date</th>
                                    <th class="min-w-125px">Due Date</th>
                                    <th class="min-w-125px">Amount</th>
                                    <th class="min-w-125px">Status</th>
                                    <th class="text-end min-w-70px">Actions</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-semibold text-gray-600">
                                @isset($invoices)
                                    @foreach ($invoices as $invoice)
                                        <tr>
                                            <!--begin::Checkbox-->
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <!--end::Checkbox-->
                                            <!--begin::Name=-->
                                            <td>
                                                <a href=""
                                                    class="text-gray-800 text-hover-primary mb-1">{{ $invoice->invoice_number }}</a>
                                            </td>
                                            <!--end::Name=-->
                                            <!--begin::Date=-->
                                            <td>{{ $invoice->start_date }}</td>
                                            <!--end::Date=-->
                                            <!--begin::Date=-->
                                            <td>{{ $invoice->due_date }}</td>
                                            <!--end::Date=-->
                                            <!--begin::amount=-->
                                            <td>{{ $invoice->total }}</td>
                                            <!--end::Date=-->
                                            <!--begin::amount=-->
                                            <td>
                                                <a href="#"
                                                    class="text-gray-600 text-hover-primary mb-1">{{ $invoice->status }}</a>
                                            </td>
                                            <!--end::Email=-->

                                            <!--begin::Action=-->
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-5 m-0">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('invoice.view', encrypt($invoice->id)) }}" class="menu-link px-3">VIEW</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('pdf.download', encrypt($invoice->id)) }}"
                                                            class="menu-link px-3">PDF</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3"
                                                            data-kt-customer-table-filter="delete_row">DELETE</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                            <!--end::Action=-->
                                        </tr>
                                    @endforeach

                                @endisset

                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                        <div class="row">
                            <div
                                class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                <div class="dataTables_length" id="kt_customers_table_length">
                                    <label>
                                        <select name="kt_customers_table_length" aria-controls="kt_customers_table"
                                            class="form-select form-select-sm form-select-solid kt_customers_table_length" onchange="(window.location = this.options[this.selectedIndex].value);">
                                            {{ $invoices->perPage() }}
                                            <option value="invoice-index?page={{ $invoices->currentPage() }}&perPage=10" @if ($invoices->perPage() == " 10 ") @selected(true) @endif>10</option>
                                            <option value="invoice-index?page={{ $invoices->currentPage() }}&perPage=25" @if ($invoices->perPage() == " 25 ") @selected(true) @endif>25</option>
                                            <option value="invoice-index?page={{ $invoices->currentPage() }}&perPage=50" @if ($invoices->perPage() == " 50 ") @selected(true) @endif>50</option>
                                            <option value="invoice-index?page={{ $invoices->currentPage() }}&perPage=100" @if ($invoices->perPage() == " 100 ") @selected(true) @endif>100</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div
                                class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                <div class="dataTables_paginate paging_simple_numbers" id="kt_customers_table_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous @if ($invoices->currentPage() == 1) disabled @endif"
                                            id="kt_customers_table_previous"><a
                                                href="{{ route('invoice.index', ['page' => $invoices->currentPage() - 1]) }}"
                                                aria-controls="kt_customers_table" data-dt-idx="0"
                                                tabindex="{{ $invoices->currentPage() }}" class="page-link"><i
                                                    class="previous"></i></a></li>
                                        @for ($i = 1; $i <= $invoices->lastPage(); $i++)
                                            <li
                                                class="paginate_button page-item @if ($invoices->currentPage() == $i) active @endif">
                                                <a href="{{ route('invoice.index', ['page' => $i]) }}"
                                                    aria-controls="kt_customers_table" data-dt-idx="1"
                                                    tabindex="{{ $i }}" class="page-link">{{ $i }}
                                                </a>
                                            </li>
                                        @endfor
                                        <li class="paginate_button page-item next @if ($invoices->currentPage() == $invoices->lastPage()) disabled @endif"
                                            id="kt_customers_table_next">
                                            <a href="{{ route('invoice.index', ['page' => $invoices->currentPage() + 1]) }}"
                                                aria-controls="kt_customers_table" data-dt-idx="5"
                                                tabindex="{{ $invoices->currentPage() }}" class="page-link"><i
                                                    class="next"></i></a>
                                        </li>
                                    </ul>
                                </div>



                                {{-- <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination" style="margin-bottom: 0px;">
                                        <li class="paginate_button page-item previous  @if ($invoices->currentPage() == 1) disabled @endif"
                                            id="DataTables_Table_0_previous"><a
                                                href="{{ route('invoice.index', ['page' => $invoices->currentPage() - 1]) }}"
                                                aria-controls="DataTables_Table_0" data-dt-idx="previous"
                                                tabindex="{{ $invoices->currentPage() }}" class="page-link">Previous</a>
                                        </li>
                                        @for ($i = 1; $i <= $invoices->lastPage(); $i++)
                                            <li
                                                class="paginate_button page-item @if ($invoices->currentPage() == $i) active @endif">
                                                <a href="{{ route('invoice.index', ['page' => $i]) }}"
                                                    aria-controls="DataTables_Table_0" data-dt-idx="{{ $i }}"
                                                    tabindex="{{ $i }}"
                                                    class="page-link">{{ $i }}</a></li>
                                        @endfor
                                        <li class="paginate_button page-item next @if ($invoices->currentPage() == $invoices->lastPage()) disabled @endif"
                                            id="DataTables_Table_0_next"><a
                                                href="{{ route('invoice.index', ['page' => $invoices->currentPage() + 1]) }}"
                                                aria-controls="DataTables_Table_0" data-dt-idx="next"
                                                tabindex="{{ $invoices->currentPage() }}" class="page-link">Next</a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>

                    </div>
                    <!--end::Card body-->

                </div>
                <!--end::Card-->

            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection