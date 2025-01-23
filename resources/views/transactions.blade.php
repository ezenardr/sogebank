<x-app-layout>
    {{-- partie superieure (cartes,graph depenses) --}}
    <div class="flex flex-col lg:grid grid-cols-3 gap-10">
        <div class="col-span-2">
            <div class="flex flex-col gap-3">
                {{-- Hero cartes --}}
                <div class="flex items-center justify-between">
                    <span class="font-semibold text-[18px] text-primary-2">My Cards</span>
                    <span class=" font-semibold text-[15px] text-primary-2">+ Add Card</span>
                </div>
                {{-- Cartes container --}}
                <div class="flex overflow-x-auto lg:grid grid-cols-2 gap-10">
                    {{-- card 1 --}}
                    <div
                        class=" min-w-full flex flex-col  bg-gradient-to-r from-[#4C49ED] to-[#0A06F4] rounded-[20px] justify-between">
                        <div class="flex flex-col gap-3 p-4 lg:p-[25px]">
                            <div class="flex justify-between">
                                <div class="flex flex-col">
                                    <span
                                        class=" text-[11px] tracking-wider text-white justify-between font-normal">Balance</span>
                                    <span class="text-white text-[16px] tracking-wide font-semibold">$5,756</span>
                                </div>
                                <div class="justify-center items-center">
                                    <svg width="32" height="32" viewBox="0 0 29 29" fill="none"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="29" height="29" fill="url(#pattern0_150_259)"/>
                                        <defs>
                                            <pattern id="pattern0_150_259" patternContentUnits="objectBoundingBox"
                                                     width="1" height="1">
                                                <use xlink:href="#image0_150_259" transform="scale(0.01)"/>
                                            </pattern>
                                            <image id="image0_150_259" width="100" height="100"
                                                   xlink:href="data:image/png;base64,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"/>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex space-x-14">
                                <div>
                                    <span
                                        class="text-white text-[10px] tracking-wider font-normal flex flex-col justify-between">CARD HOLDER</span>
                                    <span class="text-white text-[13px] tracking-wide font-semibold">Eddy Cusuma</span>
                                </div>
                                <div>
                                    <span
                                        class="text-[10px] tracking-wider text-white flex flex-col font-normal justify-between">VALID THRU</span>
                                    <span class="text-white text-[13px] tracking-wide font-semibold">12/22</span>
                                </div>

                            </div>
                        </div>

                        <div class=" w-full h-1/3 rounded-b-[20px] border-t border-transparent"
                             style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 100%)">
                            <div class="flex justify-between px-4 lg:px-[25px] py-[20px]">
                                <span class="text-white text-[18px] tracking-wide font-normal">3778********1234</span>
                                <div class="justify-center items-center">
                                    <svg width="40.5" height="28.5" viewBox="0 0 27 19" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="9.20455" cy="9.20455" r="9.20455" fill="#ffffff"
                                                fill-opacity="0.5"/>
                                        <circle cx="17.7955" cy="9.20455" r="9.20455" fill="#ffffff"
                                                fill-opacity="0.5"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- card 2 --}}
                    <div
                        class="min-w-full flex flex-col  bg-white border border-[#DFEAF2] rounded-[20px] justify-between">
                        <div class="flex flex-col gap-3 p-4 lg:p-[25px]">
                            <div class="flex justify-between">
                                <div class="flex flex-col">
                                    <span
                                        class="text-[11px] tracking-wider text-[#718EBF] justify-between font-normal">Balance</span>
                                    <span class="text-primary-2 text-[16px] tracking-wide font-semibold">$5,756</span>
                                </div>
                                <div class="justify-center items-center">
                                    <svg width="32" height="32" viewBox="0 0 29 29" fill="none"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="29" height="29" fill="url(#pattern0_150_259)"/>
                                        <defs>
                                            <pattern id="pattern0_150_259" patternContentUnits="objectBoundingBox"
                                                     width="1" height="1">
                                                <use xlink:href="#image0_150_259" transform="scale(0.01)"/>
                                            </pattern>
                                            <image id="image0_150_259" width="100" height="100"
                                                   xlink:href="data:image/png;base64,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"/>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex space-x-14">
                                <div>
                                    <span
                                        class="text-[10px] tracking-wider text-[#718EBF] flex flex-col justify-between">CARD HOLDER</span>
                                    <span
                                        class="text-primary-2 text-[13px] tracking-wide font-semibold">Eddy Cusuma</span>
                                </div>
                                <div>
                                    <span
                                        class="text-[10px] tracking-wider text-[#718EBF] flex flex-col justify-between">VALID THRU</span>
                                    <span class="text-primary-2 text-[13px] tracking-wide font-normal">12/22</span>
                                </div>
                            </div>
                        </div>

                        <div class=" w-full h-1/3 border-t border-[#DFEAF2] rounded-b-[20px]">
                            <div class="flex justify-between px-4 lg:px-[25px] py-[20px]">
                                <span
                                    class="text-primary-2 text-[15px] tracking-wide font-normal">3778********1234</span>
                                <div class="justify-center items-center">
                                    <svg width="40.5" height="28.5" viewBox="0 0 27 19" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="9.20455" cy="9.20455" r="9.20455" fill="#9199AF"
                                                fill-opacity="0.5"/>
                                        <circle cx="17.7955" cy="9.20455" r="9.20455" fill="#9199AF"
                                                fill-opacity="0.5"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- Graph depenses --}}
        <div class="flex flex-col gap-3">
            <span class="font-semibold text-[18px] text-primary-2">My Expense</span>
            <div class=" bg-white lg:p-[25px] p-4 rounded-[20px]">
                <div class="flex h-[163px] justify-between">
                    {{-- Barre 1  --}}
                    <div class="flex flex-col gap-2 items-center justify-end">
                        <div class="bg-[#EDF0F7] w-[22px] h-[60%] rounded-lg "></div>
                        <span class="text-[15px]  text-primary-2 font-normal">Aug</span>
                    </div>
                    {{-- Barre 2 --}}
                    <div class="flex flex-col gap-2 items-center justify-end">
                        <div class="bg-[#EDF0F7]  w-[22px] h-[90%] rounded-lg"></div>
                        <span class="text-[15px]  text-primary-2 font-normal">Sep</span>
                    </div>
                    {{-- Barre 3 --}}
                    <div class="flex flex-col gap-2 items-center justify-end">
                        <div class="bg-[#EDF0F7]  w-[22px] h-[62%] rounded-lg"></div>
                        <span class="text-[15px]  text-primary-2 font-normal">Oct</span>
                    </div>
                    {{-- Barre 4 --}}
                    <div class="flex flex-col gap-2 items-center justify-end">
                        <div class="bg-[#EDF0F7]  w-[22px] h-[25%] rounded-lg"></div>
                        <span class="text-[15px]  text-primary-2 font-normal">Nov</span>
                    </div>
                    {{-- Barre 5 --}}
                    <div class="flex flex-col gap-2 items-center justify-end">
                        <span class="font-semibold text-[12px] text-primary-2">$12,500</span>
                        <div class="bg-[#16DBCC] w-[22px] h-[85%] shadow-[0_0_35px_0_rgba(0,0,0,0.2)] rounded-lg"></div>
                        <span class="text-[15px]  text-primary-2 font-normal">Dec</span>
                    </div>
                    {{-- Barre 6 --}}
                    <div class="flex flex-col gap-2 items-center justify-end">
                        <div class="bg-[#EDF0F7]  w-[22px] h-[55%] rounded-lg"></div>
                        <span class="text-[15px]  text-primary-2 font-normal">Jan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- partie inferieur --}}
    <div class="pt-6">
        <span class="font-semibold  text-[22px] text-primary-2">Recent Transactions</span>
        <div class="">
            <div class="w-full border-b border-[#EBEEF2]">
                <nav class="w-full bg-transparent flex  h-full lg:w-[415px]   ">
                    <ul class="w-full flex justify-between">
                        <li class="relative group">
                            <a href="/account"
                               class=" text-[16px] py-[14px] px-[11px] font-medium hover:text-primary-3 transition-all duration-100 flex items-center {{Request::is('account') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                                All Transactions
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-1 bg-primary-3 rounded-t-xl transform scale-x-0 group-hover:scale-x-100 transition-all duration-300">
                                </div>
                            </a>
                        </li>
                        <li class="relative group">
                            <a href="/account"
                               class=" text-[16px] py-[14px] px-[11px] font-medium hover:text-primary-3 transition-all duration-100 flex items-center {{Request::is('account') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                                Income
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-1 bg-primary-3 rounded-t-xl transform scale-x-0 group-hover:scale-x-100 transition-all duration-300">
                                </div>
                            </a>
                        </li>
                        <li class="relative group">
                            <a href="/account"
                               class=" text-[16px] py-[14px] px-[11px] font-medium hover:text-primary-3 transition-all duration-300 flex items-center {{Request::is('account') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                                Expense
                                <div
                                    class="absolute bottom-0 left-0 right-0 h-1 bg-primary-3 rounded-t-xl transform scale-x-0 group-hover:scale-x-100 transition-all duration-300">
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            {{-- partie tab recent --}}
            <div class="rounded-[25px] py-2 bg-white mt-4">
                <table class="min-w-full border-collapse">
                    <thead class="">
                    <tr class="text-primary-3 text-[16px] font-medium">

                        <th class=" p-5 text-left ">Description</th>
                        <th class=" p-5 text-left hidden lg:block">Transaction ID</th>
                        <th class=" p-5 text-left">Type</th>
                        <th class=" p-5 text-left hidden lg:inline-block">Card</th>
                        <th class=" p-5 text-left hidden lg:inline-block ">Date</th>
                        <th class=" p-5 text-left">Amount</th>
                        <th class=" p-5 text-left hidden lg:block">Receipt</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr class="h-[65px]">
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div class="flex space-x-4">
                                <img src="{{'assets/icons/transfer-icon.svg'}}" alt="icon transfert"
                                     class="hidden lg:inline-block">
                                <span>Spotify Subscription</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>#12548796</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>Shopping</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>1234****</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-flex text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>28 Jan, 10.30 AM</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-medium border-t border-[#F2F4F7]">
                            <div>
                                <span class="text-[#FE5C73]">-$2,500</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-center text-[15px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <a href="#">
                                <div class="border-2 border-primary-2 px-3 py-1 rounded-full">
                                    <span>Download</span>
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr class="h-[65px]">
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div class="flex space-x-4">
                                <img class="rotate-180 hidden lg:inline-block" src="{{'assets/icons/transfer-icon.svg'}}"
                                     alt="icon transfert">
                                <span>Freepik Sales</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>#12548796</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>Transfer</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5  hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>1234****</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>25 Jan, 10.30 PM</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-medium border-t border-[#F2F4F7]">
                            <div>
                                <span class="text-[#16DBAA]">+$750</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-center text-[15px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <a href="#">
                                <div class="border-2 border-primary-2 px-3 py-1 rounded-full">
                                    <span>Download</span>
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr class="h-[65px]">
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div class="flex space-x-4">
                                <img src="{{'assets/icons/transfer-icon.svg'}}" alt="icon transfert"
                                     class="hidden lg:inline-block">
                                <span>Spotify Subscription</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>#12548796</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>Shopping</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>1234****</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>28 Jan, 10.30 AM</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-medium border-t border-[#F2F4F7]">
                            <div>
                                <span class="text-[#FE5C73]">-$2,500</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-center text-[15px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <a href="#">
                                <div class="border-2 border-primary-2 px-3 py-1 rounded-full">
                                    <span>Download</span>
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr class="h-[65px]">
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div class="flex space-x-4">
                                <img class="rotate-180 hidden lg:inline-block" src="{{'assets/icons/transfer-icon.svg'}}"
                                     alt="icon transfert">
                                <span>Freepik Sales</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>#12548796</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>Transfer</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5  hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>1234****</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>25 Jan, 10.30 PM</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-medium border-t border-[#F2F4F7]">
                            <div>
                                <span class="text-[#16DBAA]">+$750</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-center text-[15px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <a href="#">
                                <div class="border-2 border-primary-2 px-3 py-1 rounded-full">
                                    <span>Download</span>
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr class="h-[65px]">
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div class="flex space-x-4">
                                <img class="rotate-180 hidden lg:inline-block" src="{{'assets/icons/transfer-icon.svg'}}"
                                     alt="icon transfert">
                                <span>Freepik Sales</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>#12548796</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>Transfer</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5  hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>1234****</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-[16px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <div>
                                <span>25 Jan, 10.30 PM</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 text-[16px] text-primary-2 font-medium border-t border-[#F2F4F7]">
                            <div>
                                <span class="text-[#16DBAA]">+$750</span>
                            </div>
                        </td>
                        <td class=" py-2 px-5 hidden lg:inline-block text-center text-[15px] text-primary-2 font-normal border-t border-[#F2F4F7]">
                            <a href="#">
                                <div class="border-2 border-primary-2 px-3 py-1 rounded-full">
                                    <span>Download</span>
                                </div>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- partie previously/next --}}
    <div class="mt-4 h-32 w-full flex">
        <nav class="mx-auto lg:mr-0">
            <ul class="w-full flex items-center justify-between lg:justify-normal">
                <li class="">
                    <a href="/account"
                       class=" text-[15px] py-[14px] px-[11px] font-medium text-primary-3 hover:-translate-x-1 transition-all duration-300 flex items-center {{Request::is('account') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                        <div class="flex space-x-2">
                            <img src="{{'assets/icons/Vector.svg'}}" alt="" class="rotate-180">
                            <span class="">Previous</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a href="/transactions"
                       class=" text-[15px] justify-center font-medium w-[40px] h-[40px] rounded-[10px] bg-transparent text-primary-3 hover:bg-primary-3 hover:text-white transition-all duration-100 flex items-center {{Request::is('Transactions') ? "text-white  bg-primary-3" : "text-primary-3 bg-transparent"}}">
                        <div>
                            <span class="">1</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a href="/transactions"
                       class=" text-[15px] justify-center font-medium w-[40px] h-[40px] rounded-[10px] bg-transparent text-primary-3 hover:bg-primary-3 hover:text-white transition-all duration-100 flex items-center {{Request::is('Transactions') ? "text-white  bg-primary-3" : "text-primary-3 bg-transparent"}}">
                        <div>
                            <span class="">2</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a href="/transactions"
                       class=" text-[15px] justify-center font-medium w-[40px] h-[40px] rounded-[10px] bg-transparent text-primary-3 hover:bg-primary-3 hover:text-white transition-all duration-100 flex items-center {{Request::is('Transactions') ? "text-white  bg-primary-3" : "text-primary-3 bg-transparent"}}">
                        <div>
                            <span class="">3</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a href="/transactions"
                       class=" text-[15px] justify-center font-medium w-[40px] h-[40px] rounded-[10px] bg-transparent text-primary-3 hover:bg-primary-3 hover:text-white transition-all duration-100 flex items-center {{Request::is('Transactions') ? "text-white  bg-primary-3" : "text-primary-3 bg-transparent"}}">
                        <div>
                            <span class="">4</span>
                        </div>
                    </a>
                </li>
                <li class="">
                    <a href="/account"
                       class=" text-[15px] py-[14px] px-[11px] font-medium text-primary-3 hover:translate-x-1 transition-all duration-300 flex items-center {{Request::is('account') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                        <div class="flex space-x-2">
                            <span class="">Next</span>
                            <img src="{{'assets/icons/Vector.svg'}}" alt="">
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</x-app-layout>
