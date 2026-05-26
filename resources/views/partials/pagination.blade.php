@php
    $current = $items->currentPage();
    $last = $items->lastPage();

    $start = max($current - 2, 1);
    $end = min($current + 2, $last);

    $baseClass = 'flex items-center justify-center shrink-0 border text-base font-medium px-[13px] h-9 rounded-md';

    $inactiveClass = 'border-gray-200 hover:border-red-600 text-gray-900';

    $activeClass = 'bg-red-800 text-white border-red-800 pointer-events-none';
@endphp

@if ($last > 1)
    <ul class="flex items-center justify-center gap-2 mt-6">

        <li>
            <a href="{{ $items->previousPageUrl() ?? '#' }}"
                class="flex items-center justify-center shrink-0 border border-gray-200 hover:border-red-600 w-9 h-9 rounded-md {{ $items->onFirstPage() ? 'opacity-50 pointer-events-none' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400" viewBox="0 0 55.753 55.753">
                    <path
                        d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z" />
                </svg>
            </a>
        </li>
        {{-- First Page --}}
        @if ($start > 1)

            <li>
                <a href="{{ $items->url(1) }}" class="{{ $baseClass }} {{ $inactiveClass }}">
                    1
                </a>
            </li>

            @if ($start > 2)
                <li>
                    <span class="flex items-center justify-center w-9 h-9 text-gray-500">
                        ...
                    </span>
                </li>
            @endif

        @endif

        {{-- Page Numbers --}}
        @for ($i = $start; $i <= $end; $i++)

            <li>

                @if ($current == $i)

                    <span class="{{ $baseClass }} {{ $activeClass }}">
                        {{ $i }}
                    </span>

                @else

                    <a href="{{ $items->url($i) }}" class="{{ $baseClass }} {{ $inactiveClass }}">
                        {{ $i }}
                    </a>

                @endif

            </li>

        @endfor

        {{-- Last Page --}}
        @if ($end < $last)

            @if ($end < $last - 1)

                <li>
                    <span class="flex items-center justify-center w-9 h-9 text-gray-500">
                        ...
                    </span>
                </li>

            @endif

            <li>
                <a href="{{ $items->url($last) }}" class="{{ $baseClass }} {{ $inactiveClass }}">
                    {{ $last }}
                </a>
            </li>

        @endif

        <li>
            <a href="{{ $items->nextPageUrl() ?? '#' }}"
                class="flex items-center justify-center shrink-0 border border-gray-200 hover:border-red-600 w-9 h-9 rounded-md {{ !$items->hasMorePages() ? 'opacity-50 pointer-events-none' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-gray-400 rotate-180" viewBox="0 0 55.753 55.753">
                    <path
                        d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z" />
                </svg>
            </a>
        </li>

    </ul>
@endif
