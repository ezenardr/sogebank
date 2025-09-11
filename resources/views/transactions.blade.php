<x-app-layout>
    @section('title', 'Transactions - Sogebanking')
    @section('pageTitle', 'Transations')
    {{-- partie superieure (cartes,graph depenses) --}}
    <div class="flex flex-col lg:grid grid-cols-3 gap-10">
        <div class="col-span-2">
            <div class="flex flex-col gap-3">
                {{-- Hero cartes --}}
                <div class="flex items-center justify-between">
                    <span class="font-semibold text-[18px] text-primary-2">My Cards</span>
                    <a href="/transactions/add-card" class=" font-semibold text-[15px] text-primary-2">+ Add Card</a>
                </div>
                {{-- Cartes container --}}
                <div class="flex overflow-x-auto lg:grid @if (count($cards) > 0)
                    grid-cols-2
                @endif gap-10">
                @forelse ($cards as $card )
                    <div
                    class="min-w-full h-[213px] flex flex-col  @if ($card->type == 'visa')
                        bg-white border border-[#DFEAF2] text-[#718EBF]
                    @else
                        bg-gradient-to-r from-[#4C49ED] to-[#0A06F4]
                    @endif  rounded-[20px] justify-between">
                    <div class="flex flex-col gap-3 p-4 lg:p-[25px]">
                        <div class="flex justify-between">
                            {{-- <div class="flex flex-col">
                                <span
                                    class=" text-[11px] tracking-wider  justify-between font-normal">Balance</span>
                                <span class=" text-[16px] tracking-wide font-semibold">$5,756</span>
                            </div> --}}
                            <div class="justify-center items-center">
                                <svg width="32" height="32" viewBox="0 0 29 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="29" height="29" fill="url(#pattern0_150_259)" />
                                    <defs>
                                        <pattern id="pattern0_150_259" patternContentUnits="objectBoundingBox"
                                            width="1" height="1">
                                            <use xlink:href="#image0_150_259" transform="scale(0.01)" />
                                        </pattern>
                                        <image id="image0_150_259" width="100" height="100"
                                            xlink:href="data:image/png;base64,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" />
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="flex space-x-14">
                            <div>
                                <span
                                    class=" text-[10px] tracking-wider font-normal flex flex-col justify-between">CARD
                                    HOLDER</span>
                                <span class=" text-[13px] tracking-wide font-semibold">{{$card->cardholder_name}}</span>
                            </div>
                            <div>
                                <span
                                    class="text-[10px] tracking-wider  flex flex-col font-normal justify-between">VALID
                                    THRU</span>
                                <span class=" text-[13px] tracking-wide font-semibold">{{$card->expiry_month}}/{{$card->expiry_year}}</span>
                            </div>

                        </div>
                    </div>

                    <div class=" w-full h-1/3 rounded-b-[20px] border-t  @if ($card->type == 'visa')
                        border-[#DFEAF2]
                    @else
                        border-transparent
                    @endif"
                        style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%)">
                        <div class="flex justify-between px-4 lg:px-[25px] py-[20px]">
                            <span class=" text-[18px] tracking-wide font-normal">{{$card->card_number}}</span>
                            <div class="justify-center items-center">
                                <svg width="40.5" height="28.5" viewBox="0 0 27 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9.20455" cy="9.20455" r="9.20455" fill="#ffffff"
                                        fill-opacity="0.5" />
                                    <circle cx="17.7955" cy="9.20455" r="9.20455" fill="#ffffff"
                                        fill-opacity="0.5" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    </div>
                
                    @empty
                        <div class="flex flex-col gap-8 items-center">
                            <div class="w-[120px] rounded-full h-[120px] flex items-center justify-center bg-[#F1F2F3]">
                            <div class="w-[90px] rounded-full h-[90px] bg-[#E3E5E8] flex items-center justify-center">
                                <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.8999 15.03C16.6899 15.03 14.8999 16.82 14.8999 19.03C14.8999 21.24 16.6899 23.03 18.8999 23.03C21.1099 23.03 22.8999 21.24 22.8999 19.03C22.8999 16.82 21.1099 15.03 18.8999 15.03ZM20.4999 20.68C20.3499 20.83 20.1598 20.9 19.9698 20.9C19.7798 20.9 19.5899 20.83 19.4399 20.68L18.9099 20.15L18.3599 20.7C18.2099 20.85 18.0199 20.92 17.8299 20.92C17.6399 20.92 17.4499 20.85 17.2999 20.7C17.0099 20.41 17.0099 19.93 17.2999 19.64L17.8499 19.09L17.3199 18.56C17.0299 18.27 17.0299 17.79 17.3199 17.5C17.6099 17.21 18.0899 17.21 18.3799 17.5L18.9099 18.03L19.4099 17.53C19.6999 17.24 20.1798 17.24 20.4698 17.53C20.7598 17.82 20.7598 18.3 20.4698 18.59L19.9698 19.09L20.4999 19.62C20.7899 19.91 20.7899 20.39 20.4999 20.68Z" fill="#292D32"/>
                                    <path d="M22 7.5399V8.9999H2V7.5399C2 5.2499 3.86002 3.3999 6.15002 3.3999H17.85C20.14 3.3999 22 5.2499 22 7.5399Z" fill="#292D32"/>
                                    <path opacity="0.4" d="M2 9V16.46C2 18.75 3.85001 20.6 6.14001 20.6H12.4C12.98 20.6 13.48 20.11 13.43 19.53C13.29 18 13.78 16.34 15.14 15.02C15.7 14.47 16.39 14.05 17.14 13.81C18.39 13.41 19.6 13.46 20.67 13.82C21.32 14.04 22 13.57 22 12.88V9H2ZM8 17.25H6C5.59 17.25 5.25 16.91 5.25 16.5C5.25 16.09 5.59 15.75 6 15.75H8C8.41 15.75 8.75 16.09 8.75 16.5C8.75 16.91 8.41 17.25 8 17.25Z" fill="#292D32"/>
                                    <path d="M8.75 16.5C8.75 16.91 8.41 17.25 8 17.25H6C5.59 17.25 5.25 16.91 5.25 16.5C5.25 16.09 5.59 15.75 6 15.75H8C8.41 15.75 8.75 16.09 8.75 16.5Z" fill="#292D32"/>
                                    </svg>
                            </div>
                        </div>
                            
                                
                        <p class="text-[18px] text-[#8F96A1] text-center">Start by creating a new card for your account.</p>
                        </div>
                    @endforelse (cards as card )
                </div>                    
            </div>
        </div>

        {{-- Graph depenses --}}
        <div class="flex flex-col gap-3">
            <span class="font-semibold text-[18px] text-primary-2">My Expense</span>
            <div class=" bg-white lg:p-[20px] p-4 rounded-[20px]">
                <div class="flex h-[163px] gap-4 justify-between overflow-auto">
                    @php
                        if (request()->query('view') == 'income') {
                            $transacIncomeFind = false;
                        } elseif (request()->query('view') == 'expense') {
                            $transacExpenseFind = false;
                        }
                        $transacFind = false;
                        $mostFind = false;
                    @endphp
                    @foreach ($expensiveMonth as $mois => $value)
                        <div class="flex flex-col gap-1 items-center justify-end">
                            @if ($mostExpensiveMonth[1] > 0 && $mostExpensiveMonth[0] == $value)
                                <span
                                    class="font-semibold text-[12px] text-primary-2">${{ $mostExpensiveMonth[1] }}</span>
                                @php
                                    $transacFind = true;
                                    $mostFind = true;
                                @endphp
                            @endif
                            @if ($mostFind)
                                <div style="height:{{ $value }}%;"
                                    class="bg-[#16DBCC] w-[22px] {{ 'shadow-[0_0_35px_0_rgba(0,0,0,0.2)]' }} rounded-lg ">
                                </div>
                                @php $mostFind = FALSE @endphp
                            @else
                                <div style="height:{{ $value }}%;" class="bg-[#EDF0F7]  w-[22px] rounded-lg">
                                </div>
                            @endif
                            <span class="text-[15px]  text-primary-2 font-normal">{{ $mois }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- partie inferieur --}}
    <div class="pt-4">
        <span class="font-semibold  text-[22px] text-primary-2">Recent Transactions</span>
        <div class="">
            <div class="w-full border-b border-[#EBEEF2]">
                <nav class="w-full bg-transparent flex  h-full lg:w-[415px]   ">
                    <ul class="w-full flex justify-between">
                        <li class="relative group">
                            <a href="?view=transactions"
                                class=" text-[16px] py-[14px] px-[11px] font-medium hover:text-primary-3 transition-all duration-100 flex items-center {{ request()->query('view') == 'transactions' || !request()->query('view') ? 'text-primary-3' : 'text-[#718EBF]' }}">
                                All Transactions
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-1 bg-primary-3 rounded-t-xl transform scale-x-0 group-hover:scale-x-100 transition-all duration-300 {{ request()->query('view') == 'transactions' || !request()->query('view') ? 'scale-x-100' : 'scale-x-0' }}">
                                </div>
                            </a>
                        </li>
                        <li class="relative group">
                            <a href="?view=income"
                                class=" text-[16px] py-[14px] px-[11px] font-medium hover:text-primary-3 transition-all duration-100 flex items-center {{ request()->query('view') == 'income' ? 'text-primary-3' : 'text-[#718EBF]' }}">
                                Income
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-1 bg-primary-3 rounded-t-xl transform scale-x-0 group-hover:scale-x-100 transition-all duration-300 {{ request()->query('view') == 'income' ? 'scale-x-100' : 'scale-x-0' }}">
                                </div>
                            </a>
                        </li>
                        <li class="relative group">
                            <a href="?view=expense"
                                class=" text-[16px] py-[14px] px-[11px] font-medium hover:text-primary-3 transition-all duration-300 flex items-center {{ request()->query('view') == 'expense' ? 'text-primary-3' : 'text-[#718EBF]' }}">
                                Expense
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-1 bg-primary-3 rounded-t-xl transform scale-x-0 group-hover:scale-x-100 transition-all duration-300 {{ request()->query('view') == 'expense' ? 'scale-x-100' : 'scale-x-0' }}">
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            {{-- partie tab recent --}}
            @if (request()->query('view') == 'transactions' || !request()->query('view'))

                {{-- Si aucune transaction n'a ete trouve --}}
                @if (!$transacFind)
                    <div class="h-[65px] rounded-[25px] py-2 bg-white mt-8">
                        <p class="text-center py-2 px-5  text-primary-2 font-semibold">
                            Aucune Transaction de Revenue effectuee
                        </p>
                    </div>
                @else
                    <div class="hidden rounded-[25px] py-2 bg-white mt-8 lg:block">
                        <table class="min-w-full border-collapse">
                            <thead class="">
                                <tr class="text-primary-3 text-[16px] font-medium">

                                    <th class=" p-5 text-left ">Description</th>
                                    <th class=" p-5 text-left">Transaction ID</th>
                                    <th class=" p-5 text-left">Type</th>
                                    <th class=" p-5 text-left">Card</th>
                                    <th class=" p-5 text-left">Date</th>
                                    <th class=" p-5 text-left">Amount</th>
                                    <th class=" p-5 text-left">Receipt</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr class="h-[65px]">
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div class="flex space-x-4">
                                                <img src="{{ 'assets/icons/transfer-icon.svg' }}"
                                                    alt="icon transfert">
                                                <span>{{ $transaction->transac_description }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div>
                                                <span>{{ $transaction->transac_id }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div>
                                                <span>{{ $transaction->transac_type }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div>
                                                <span>Transaction Card</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div>
                                                <span>{{ $transaction->transac_date }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-medium border-t border-[#F2F4F7]">
                                            <div>
                                                <span class="text-primary">{{ $transaction->transac_currency }}
                                                    {{ $transaction->transac_amount }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-center text-[15px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <a href="transactions/{{$transaction->transac_id}}/pdf">
                                                <div class="border-2 border-primary-2 px-3 py-1 rounded-full hover:-translate-x-1 transition-all duration-300">
                                                    <span>Download</span>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- partie tab recent mobile --}}
                    <div class="rounded-[25px] py-2 bg-white mt-8 lg:hidden md:hiden">
                        <table class="min-w-full border-collapse">

                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr class="h-[65px]">
                                        <td class=" py-2 px-5  text-primary-2 font-normal ">
                                            <div class="flex space-x-4">
                                                <img src="{{ 'assets/icons/transfer-icon.svg' }}"
                                                    alt="icon transfert">
                                                <div class="flex flex-col gap-[10x]">
                                                    <span
                                                        class="text-[13px]">{{ $transaction->transac_description }}</span>
                                                    <span class="text-[13px]">{{ $transaction->transac_date }}</span>
                                                </div>

                                            </div>
                                        </td>

                                        <td
                                            class=" py-2 px-5 text-[16px] text-primary-2 font-medium border-t border-[#F2F4F7]">
                                            <div>
                                                <span class="text-[#FE5C73]">- {{ $transaction->transac_currency }}
                                                    {{ $transaction->transac_amount }}</span>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                                {{-- Si aucune transaction n'a ete trouve --}}
                                @if (!$transacFind)
                                    <tr class="h-[65px]">
                                        <td class=" py-2 px-5  text-primary-2 font-normal">
                                            <p>Aucune Transaction effectuee</p>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                @endif
            @elseif(request()->query('view') == 'income')
                @php
                    if (!empty($transactions[0])) {
                        $transacIncomeFind = true;
                    }
                @endphp
                {{-- Si aucune transaction n'a ete trouve --}}
                @if (!$transacIncomeFind)
                    <div class="h-[65px] rounded-[25px] py-2 bg-white mt-8">
                        <p class="text-center py-2 px-5  text-primary-2 font-semibold">
                            Aucune Transaction de Revenue effectuee
                        </p>
                    </div>
                @else
                    <div class="hidden rounded-[25px] py-2 bg-white mt-8 lg:block">

                        <table class="min-w-full border-collapse">
                            <thead class="">
                                <tr class="text-primary-3 text-[16px] font-medium">

                                    <th class=" p-5 text-left ">Description</th>
                                    <th class=" p-5 text-left">Transaction ID</th>
                                    <th class=" p-5 text-left">Type</th>
                                    <th class=" p-5 text-left">Card</th>
                                    <th class=" p-5 text-left">Date</th>
                                    <th class=" p-5 text-left">Amount</th>
                                    <th class=" p-5 text-left">Receipt</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr class="h-[65px]">
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div class="flex space-x-4">
                                                <img src="{{ 'assets/icons/transfer-icon.svg' }}"
                                                    alt="icon transfert">
                                                <span>{{ $transaction->transac_description }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div>
                                                <span>{{ $transaction->transac_id }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div>
                                                <span>{{ $transaction->transac_type }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div>
                                                <span>Transaction Card</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div>
                                                <span>{{ $transaction->transac_date }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-medium border-t border-[#F2F4F7]">
                                            <div>
                                                <span class="text-[#16DBAA]">+ {{ $transaction->transac_currency }}
                                                    {{ $transaction->transac_amount }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-center text-[15px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <a href="transactions/{{$transaction->transac_id}}/pdf">
                                                <div class="border-2 border-primary-2 px-3 py-1 rounded-full hover:-translate-x-1 transition-all duration-300">
                                                    <span>Download</span>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                    {{-- partie tab recent mobile --}}
                    <div class="rounded-[25px] py-2 bg-white mt-8 lg:hidden md:hiden">
                        <table class="min-w-full border-collapse">

                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr class="h-[65px]">
                                        <td class=" py-2 px-5  text-primary-2 font-normal ">
                                            <div class="flex space-x-4">
                                                <img src="{{ 'assets/icons/transfer-icon.svg' }}"
                                                    alt="icon transfert">
                                                <div class="flex flex-col gap-[10x]">
                                                    <span
                                                        class="text-[13px]">{{ $transaction->transac_description }}</span>
                                                    <span class="text-[13px]">{{ $transaction->transac_date }}</span>
                                                </div>

                                            </div>
                                        </td>

                                        <td
                                            class=" py-2 px-5 text-[16px] text-primary-2 font-medium border-t border-[#F2F4F7]">
                                            <div>
                                                <span class="text-[#16DBAA]">+ {{ $transaction->transac_currency }}
                                                    {{ $transaction->transac_amount }}</span>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                                {{-- Si aucune transaction n'a ete trouve --}}
                                @if (!$transacIncomeFind)
                                    <tr class="h-[65px]">
                                        <td class=" py-2 px-5  text-primary-2 font-normal">
                                            <p>Aucune Transaction effectuee</p>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                @endif
            @elseif(request()->query('view') == 'expense')
                @php
                    if (!empty($transactions[0])) {
                        $transacExpenseFind = true;
                    }
                @endphp
                {{-- Si aucune transaction n'a ete trouve --}}
                @if (!$transacExpenseFind)
                    <div class="h-[65px] rounded-[25px] py-2 bg-white mt-8">
                        <p class="text-center py-2 px-5  text-primary-2 font-semibold">
                            Aucune Transaction de Revenue effectuee
                        </p>
                    </div>
                @else
                    <div class="hidden rounded-[25px] py-2 bg-white mt-8 lg:block">
                        <table class="min-w-full border-collapse">
                            <thead class="">
                                <tr class="text-primary-3 text-[16px] font-medium">

                                    <th class=" p-5 text-left ">Description</th>
                                    <th class=" p-5 text-left">Transaction ID</th>
                                    <th class=" p-5 text-left">Type</th>
                                    <th class=" p-5 text-left">Card</th>
                                    <th class=" p-5 text-left">Date</th>
                                    <th class=" p-5 text-left">Amount</th>
                                    <th class=" p-5 text-left">Receipt</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr class="h-[65px]">
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div class="flex space-x-4">
                                                <img src="{{ 'assets/icons/transfer-icon.svg' }}"
                                                    alt="icon transfert">
                                                <span>{{ $transaction->transac_description }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div>
                                                <span>{{ $transaction->transac_id }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div>
                                                <span>{{ $transaction->transac_type }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div>
                                                <span>Transaction Card</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <div>
                                                <span>{{ $transaction->transac_date }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-[12px] text-primary-2 font-medium border-t border-[#F2F4F7]">
                                            <div>
                                                <span class="text-[#FE5C73]">- {{ $transaction->transac_currency }}
                                                    {{ $transaction->transac_amount }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class=" py-2 px-5 text-center text-[15px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                                            <a href="transactions/{{$transaction->transac_id}}/pdf">
                                                <div class="border-2 border-primary-2 px-3 py-1 rounded-full hover:-translate-x-1 transition-all duration-300">
                                                    <span>Download</span>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    {{-- partie tab recent mobile --}}
                    <div class="rounded-[25px] py-2 bg-white mt-8 lg:hidden md:hiden">
                        <table class="min-w-full border-collapse">

                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr class="h-[65px]">
                                        <td class=" py-2 px-5  text-primary-2 font-normal ">
                                            <div class="flex space-x-4">
                                                <img src="{{ 'assets/icons/transfer-icon.svg' }}"
                                                    alt="icon transfert">
                                                <div class="flex flex-col gap-[10x]">
                                                    <span
                                                        class="text-[13px]">{{ $transaction->transac_description }}</span>
                                                    <span class="text-[13px]">{{ $transaction->transac_date }}</span>
                                                </div>

                                            </div>
                                        </td>

                                        <td
                                            class=" py-2 px-5 text-[16px] text-primary-2 font-medium border-t border-[#F2F4F7]">
                                            <div>
                                                <span class="text-[#FE5C73]">- {{ $transaction->transac_currency }}
                                                    {{ $transaction->transac_amount }}</span>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif
        </div>
    </div>

    {{-- partie previously/next --}}
    <div class="mt-2 h-32 w-full flex">
        <nav class="mx-auto lg:mr-0">
            <ul class="w-full flex items-center justify-between lg:justify-normal">
                {{ $transactions->links() }}
            </ul>
        </nav>
    </div>
</x-app-layout>
