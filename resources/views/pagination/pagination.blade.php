@if ($paginator->hasPages())
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <p class="disabled entry btn"> <span>{{ __('Prev') }}</span> </p>
    @else
        <a class="msg-btn prev btn btn-inline" style="width:10%" href="{{ $paginator->previousPageUrl() }}" rel="prev">{{ __('Prev') }}</a>
        
    @endif

    <span class="entries" style="text-align: center "> {{ "Page " . $paginator->currentPage() . " of  " . $paginator->lastPage() }}</span>

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a class="msg-btn next btn btn-inline" style="width:10%" href="{{ $paginator->nextPageUrl() }}" rel="next">{{ __('Next') }}</a>
    @else
        <p class="disabled entry btn"> <span>{{ __('Next') }}</span> </p>
    @endif
@endif