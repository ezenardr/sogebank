@if ($paginator->hasPages())
    {{-- Custom pagination view --}}
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between sm:hidden">
            @if ($paginator->onFirstPage())
                <i
                    class=" text-[15px] py-[14px] px-[11px] font-medium text-primary-3 hover:-translate-x-1 transition-all duration-300 flex items-center {{ Request::is('account') ? 'text-primary-3  border-primary-3' : 'text-[#b1b1b1]' }}">
                    <div class="flex space-x-2">
                        <img src="{{ 'assets/icons/Vector.svg' }}" alt="" class="rotate-180">
                        <span class="">Previous</span>
                    </div>
                </i>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class=" text-[15px] py-[14px] px-[11px] font-medium text-primary-3 hover:-translate-x-1 transition-all duration-300 flex items-center {{ Request::is('account') ? 'text-primary-3  border-primary-3' : 'text-[#b1b1b1]' }}">
                    <div class="flex space-x-2">
                        <img src="{{ 'assets/icons/Vector.svg' }}" alt="" class="rotate-180">
                        <span class="">Previous</span>
                    </div>
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class=" text-[15px] py-[14px] px-[11px] font-medium text-primary-3 hover:translate-x-1 transition-all duration-300 flex items-center {{ Request::is('account') ? 'text-primary-3  border-primary-3' : 'text-[#b1b1b1]' }}">
                    <div class="flex space-x-2">
                        <span class="">Next</span>
                        <img src="{{ 'assets/icons/Vector.svg' }}" alt="">
                    </div>
                </a>
            @else
                <i
                    class=" text-[15px] py-[14px] px-[11px] font-medium text-primary-3 hover:translate-x-1 transition-all duration-300 flex items-center {{ Request::is('account') ? 'text-primary-3  border-primary-3' : 'text-[#b1b1b1]' }}">
                    <div class="flex space-x-2">
                        <span class="">Next</span>
                        <img src="{{ 'assets/icons/Vector.svg' }}" alt="">
                    </div>
                </i>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <span class="w-full flex items-center justify-between lg:justify-normal">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <i
                                class=" text-[15px] py-[14px] px-[11px] font-medium text-primary-3 hover:-translate-x-1 transition-all duration-300 flex items-center {{ Request::is('account') ? 'text-primary-3  border-primary-3' : 'text-[#b1b1b1]' }}">
                                <div class="flex space-x-2">
                                    <img src="{{ 'assets/icons/Vector.svg' }}" alt="" class="rotate-180">
                                    <span class="">Previous</span>
                                </div>
                            </i>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                            class=" text-[15px] py-[14px] px-[11px] font-medium text-primary-3 hover:-translate-x-1 transition-all duration-300 flex items-center {{ Request::is('account') ? 'text-primary-3  border-primary-3' : 'text-[#b1b1b1]' }}">
                            <div class="flex space-x-2">
                                <img src="{{ 'assets/icons/Vector.svg' }}" alt="" class="rotate-180">
                                <span class="">Previous</span>
                            </div>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true"
                                class=" text-[15px] justify-center font-medium w-[40px] h-[40px] rounded-[10px] bg-transparent text-primary-3 hover:bg-primary-3 hover:text-white transition-all duration-100 flex items-center {{ Request::is('Transactions') ? 'text-white  bg-primary-3' : 'text-primary-3 bg-transparent' }}">
                                <div>
                                    <span class="">{{ $element }}</span>
                                </div>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page"
                                        class=" text-[15px] justify-center font-medium w-[40px] h-[40px] rounded-[10px] bg-transparent text-primary-3 hover:bg-primary-3 hover:text-white transition-all duration-100 flex items-center {{ Request::is('Transactions') ? 'text-white  bg-primary-3' : 'text-primary-3 bg-transparent' }}">
                                        <div>
                                            <span class="">{{ $page }}</span>
                                        </div>
                                    </span>
                                @else
                                    <a href="{{ $url }}"
                                        class=" text-[15px] justify-center font-medium w-[40px] h-[40px] rounded-[10px] bg-transparent text-primary-3 hover:bg-primary-3 hover:text-white transition-all duration-100 flex items-center {{ Request::is('Transactions') ? 'text-white  bg-primary-3' : 'text-primary-3 bg-transparent' }}">
                                        <div>
                                            <span class="">{{ $page }}</span>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                            class=" text-[15px] py-[14px] px-[11px] font-medium text-primary-3 hover:translate-x-1 transition-all duration-300 flex items-center {{ Request::is('account') ? 'text-primary-3  border-primary-3' : 'text-[#b1b1b1]' }}">
                            <div class="flex space-x-2">
                                <span class="">Next</span>
                                <img src="{{ 'assets/icons/Vector.svg' }}" alt="">
                            </div>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <i
                                class=" text-[15px] py-[14px] px-[11px] font-medium text-primary-3 hover:translate-x-1 transition-all duration-300 flex items-center {{ Request::is('account') ? 'text-primary-3  border-primary-3' : 'text-[#b1b1b1]' }}">
                                <div class="flex space-x-2">
                                    <span class="">Next</span>
                                    <img src="{{ 'assets/icons/Vector.svg' }}" alt="">
                                </div>
                            </i>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
