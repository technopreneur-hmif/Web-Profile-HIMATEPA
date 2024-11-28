@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex justify-center items-center space-x-2 mt-4">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-4 text-[#A5A5A5] bg-transparent border border-transparent cursor-not-allowed">
                &lsaquo;
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-2 text-[#EDE5CE] hover:text-black bg-transparent border border-transparent hover:bg-[#FAC017] rounded transition">
                &lsaquo;
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="px-4 text-[#A5A5A5] bg-transparent border border-transparent cursor-not-allowed">
                    {{ $element }}
                </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-2 text-[#181818] bg-[#C9A840] border border-transparent rounded">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}" class="px-4 text-[#EDE5CE] hover:text-[#C9A840] bg-transparent border border-transparent rounded transition">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-2 text-[#EDE5CE] hover:text-black bg-transparent border border-transparent hover:bg-[#FAC017] rounded transition">
                &rsaquo;
            </a>
        @else
            <span class="px-2 text-[#A5A5A5] bg-transparent border border-transparent cursor-not-allowed">
                &rsaquo;
            </span>
        @endif
    </nav>
@endif
