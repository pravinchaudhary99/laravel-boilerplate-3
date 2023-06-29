<div class="card-header flex-column flex-md-row">
    <div class="d-flex justify-content-center justify-content-md-end">
        <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
            aria-live="polite">{{'Showing '. $invoices->currentPage() .' to '. $invoices->perPage(). ' of '. $invoices->total() }} entries</div>
    </div>
    <div class="d-flex justify-content-center justify-content-md-end">
        <div class="dataTables_paginate paging_simple_numbers"
            id="DataTables_Table_0_paginate">
            <ul class="pagination" style="margin-bottom: 0px;">
                <li class="paginate_button page-item previous  @if($invoices->currentPage() == 1)disabled @endif"
                    id="DataTables_Table_0_previous"><a
                        href="{{ route('user-index', ['page' => $invoices->currentPage()-1]) }}"
                        aria-controls="DataTables_Table_0" data-dt-idx="previous"
                        tabindex="{{ $invoices->currentPage() }}" class="page-link">Previous</a></li>
                @for ( $i = 1 ;  $i <=$invoices->lastPage() ; $i++)
                    <li class="paginate_button page-item @if($invoices->currentPage() == $i)active @endif"><a
                            href="{{ route('user-index', ['page' => $i]) }}"
                            aria-controls="DataTables_Table_0" data-dt-idx="{{ $i }}" tabindex="{{ $i }}"
                            class="page-link">{{ $i }}</a></li>
                @endfor
                <li class="paginate_button page-item next @if($invoices->currentPage() == $invoices->lastPage())disabled @endif"
                    id="DataTables_Table_0_next" ><a
                        href="{{ route('user-index', ['page' => $invoices->currentPage()+1]) }}"
                        aria-controls="DataTables_Table_0" data-dt-idx="next" tabindex="{{ $invoices->currentPage() }}"
                        class="page-link">Next</a></li>
            </ul>
        </div>
    </div>
  </div>