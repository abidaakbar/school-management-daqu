@if ($paginator->lastPage() > 1)
    <ul class="pagination justify-content-center">

        {{-- PREVIOUS --}}
        <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->previousPageUrl() ?? '#' }}">
                <i class="bi bi-chevron-left"></i>
            </a>
        </li>

        @php
            $current = $paginator->currentPage();
            $last = $paginator->lastPage();

            $start = max(1, $current - 1);
            $end = min($last, $current + 1);
        @endphp

        {{-- FIRST PAGE --}}
        @if ($start > 1)
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url(1) }}">1</a>
            </li>

            @if ($start > 2)
                <li class="page-item disabled">
                    <span class="page-link">...</span>
                </li>
            @endif
        @endif

        {{-- MIDDLE (MAX 3) --}}
        @for ($page = $start; $page <= $end; $page++)
            <li class="page-item {{ $page == $current ? 'active' : '' }}">
                <a class="page-link" href="{{ $paginator->url($page) }}">
                    {{ $page }}
                </a>
            </li>
        @endfor

        {{-- LAST PAGE --}}
        @if ($end < $last)
            @if ($end < $last - 1)
                <li class="page-item disabled">
                    <span class="page-link">...</span>
                </li>
            @endif

            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url($last) }}">
                    {{ $last }}
                </a>
            </li>
        @endif

        {{-- NEXT --}}
        <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $paginator->nextPageUrl() ?? '#' }}">
                <i class="bi bi-chevron-right"></i>
            </a>
        </li>

    </ul>
@endif
