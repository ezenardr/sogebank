<x-app-layout>
    @section('title', 'Dashboard')
    @section('pageTitle', 'Dashboard')
    <div class="flex flex-col lg:grid grid-cols-3 gap-8">
        <div class="col-span-2">
            <div class="flex flex-col gap-3">
                {{-- Hero cartes --}}
                <div class="flex items-center justify-between">
                    <span class="font-semibold text-[22px] text-primary-2">My Cards</span>
                    <span class=" font-semibold text-[17px] text-primary-2">See All</span>
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

        <div class="flex flex-col gap-3">
            <span class="font-semibold text-[22px] text-primary-2">Transactions Récentes</span>
            <div class=" flex flex-col gap-4 bg-white px-8 py-4 max-w-[450px] rounded-[25px]">
                <div class="flex justify-between items-center ">
                    <div class="w-[50px] h-[50px] flex items-center justify-center rounded-full bg-[#FFF5D9]">
                        <img src="{{'assets/icons/withdraw.svg'}}" alt="icon with">
                    </div>
                    <div class="flex-col flex">
                        <span class="font-medium text-[16px] text-[#232323]">Retrait surccusale </span>
                        <span class="text-[15px] text-[#718EBF]">28 Janvier 2024</span>
                    </div>
                    <div>
                        <span class="text-[16px] font-medium text-[#FF4B4A]">-HTG 850</span>
                    </div>
                </div>
                <div class="flex justify-between items-center ">
                    <div class="w-[50px] h-[50px] flex items-center justify-center rounded-full bg-[#E7EDFF]">
                        <img src="{{'assets/icons/transfer.svg'}}" alt="icon transfert">
                    </div>
                    <div class="flex-col flex">
                        <span class="font-medium text-[16px] text-[#232323]">Depot </span>
                        <span class="text-[15px] text-[#718EBF]">27 Janvier 2024</span>
                    </div>
                    <div>
                        <span class="text-[16px] font-medium text-[#41D4A8]">+HTG 2,500</span>
                    </div>
                </div>
                <div class="flex justify-between items-center ">
                    <div class="w-[50px] h-[50px] flex items-center justify-center rounded-full bg-[#DCFAF8]">
                        <img src="{{'assets/icons/transfer.svg'}}" alt="icon transfert">
                    </div>
                    <div class="flex-col flex">
                        <span class="font-medium text-[16px] text-[#232323]">Jemi Wilson </span>
                        <span class="text-[15px] text-[#718EBF]">21 Janvier 2024</span>
                    </div>
                    <div>
                        <span class="text-[16px] font-medium text-[#41D4A8]">+HTG 5,400</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- part-2  --}}
    <div class="mt-4 flex flex-col lg:grid grid-cols-3 gap-8">
        <div class="col-span-2">
            <div class="flex flex-col gap-3">
                {{-- hero--}}
                <div class="flex items-center">
                    <span class="font-semibold text-[22px] text-primary-2">Weekly Activity</span>
                    
                </div>
                <div class="bg-white flex flex-col rounded-[25px] h-[322px] p-4">

                    <!-- En tete -->
                    <div class="flex justify-end py-4">
                        
                        <div class="flex">
                            <div class="mx-2 flex">
                                <div class="xl:w-[15px] xl:h-[15px] w-[12px] h-[12px] rounded-full bg-[#4C78FF]"></div>
                                <div class="mx-3 relative xl:bottom-[5px] bottom-[3px] font-normal xl:text-[16px] text-[12px] text-[#718EBF]">Diposit</div>
                            </div>
                            <div class="mx-2 flex">
                                <div class="xl:w-[15px] xl:h-[15px] w-[12px] h-[12px] rounded-full bg-[#FF82AC]"></div>
                                <div class="ms-2 relative xl:bottom-[5px] bottom-[3px] font-normal xl:text-[16px] text-[12px] text-[#718EBF]">Withdraw</div>
                            </div>
                        </div>
                    </div>

                    <div class="h-full mb-6 relative">
                        {{--Graduation et lignes / histogramme --}}
                        <div class="h-full w-full flex flex-col justify-between px-2 text-[#718EBF] text-[13px] font-normal">
                            <div class="flex space-x-1 items-center">
                                <span class="">500</span>
                                <div class="h-[1px] w-full bg-[#F3F3F5] self-center"></div>
                            </div>
                            <div class="flex space-x-1 items-center">
                                <span class="">400</span>
                                <div class="h-[1px] w-full bg-[#F3F3F5] self-center"></div>
                            </div>
                            <div class="flex space-x-1 items-center">
                                <span class="">300</span>
                                <div class="h-[1px] w-full bg-[#F3F3F5] self-center"></div>
                            </div>
                            <div class="flex space-x-1 items-center">
                                <span class="">200</span>
                                <div class="h-[1px] w-full bg-[#F3F3F5] self-center"></div>
                            </div>
                            <div class="flex space-x-1 items-center ">
                                <span class=""">100</span>
                                <div class="h-[1px] w-full bg-[#F3F3F5] self-center"></div>
                            </div>
                            <div class="flex space-x-1 items-center">
                                <span class="ml-3" >0</span>
                                <div class="h-[1px] w-full bg-[#F3F3F5] self-center"></div>
                            </div>
                        </div>    
                        
                        <!-- Histogramme -->
                        <div class=" -bottom-7 left-[10%] z-1 absolute w-[90%] h-full flex gap-[1%]">

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-primary-3 w-[25%] h-[90%] relative top-[10%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-secondary-2 w-[25%] h-[100%] relative top-[0%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Sat
                                </div>
                            </div>

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-primary-3 w-[25%] h-[20%] relative top-[80%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-secondary-2 w-[25%] h-[30%] relative top-[70%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Sun
                                </div>
                            </div>

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-primary-3 w-[25%] h-[100%] relative top-[0%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-secondary-2 w-[25%] h-[40%] relative top-[60%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Mon
                                </div>
                            </div>

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-primary-3 w-[25%] h-[20%] relative top-[80%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-secondary-2 w-[25%] h-[100%] relative top-[0%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Tue
                                </div>
                            </div>

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-primary-3 w-[25%] h-[70%] relative top-[30%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-secondary-2 w-[25%] h-[60%] relative top-[40%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Wed
                                </div>
                            </div>

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-primary-3 w-[25%] h-[90%] relative top-[10%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-secondary-2 w-[25%] h-[50%] relative top-[50%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Thu
                                </div>
                            </div>

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-primary-3 w-[25%] h-[80%] relative top-[20%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-secondary-2 w-[25%] h-[100%] relative top-[0%]"></div>
                                </div>
                                <!-- day -->
                                <div class="py-2 font-normal xl:text-[14px] text-[12px] text-[#718EBF] ">
                                    Fri
                                </div>
                            </div>
                        </div>
                        <!-- Fin histogramme -->                       
                    </div>    
                </div>

            </div>    

        </div>
       
        <div class="flex flex-col gap-3">
            <span class="font-semibold text-[22px] text-primary-2">Expense Statistics</span>
            <div class=" bg-white max-w-[450px] rounded-[25px] h-[322px] p-4">
                <div class="flex justify-between items-center ">
                </div>
            </div>
        </div>                
    </div>
    {{-- part-3 --}}
    <div class="mt-4 flex flex-col lg:grid grid-cols-10 gap-8 mb-24">
        <div class="col-span-4 flex flex-col gap-3">
            <span class="font-semibold text-[22px] text-primary-2">Quick Transfer</span>
            <div class=" flex flex-col gap-8 bg-white p-4 rounded-[25px] lg:p-8">
                <div class="flex justify-between items-center">

                    {{-- Div des profils --}}
                    <div class="w-[80%] flex space-x-4 justify-center items-center lg:space-x-6">
                        {{-- Profils  --}}
                        <div class="w-[33%] flex flex-col items-center">
                            {{-- Image de profil  --}}
                            <div class="w-[70px] rounded-full overflow-hidden">
                                <img src="{{'/assets/images/profile-mage.png'}}" alt="Livia Bator" class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <span class="font-normal text-[16px] text-[#232323] whitespace-nowrap">Livia Bator</span>
                                <span class="font-normal text-[15px] text-[#718EBF] whitespace-nowrap">CEO</span>
                            </div>
                        </div>
                
                        <div class="w-[33%] flex flex-col items-center">
                            {{-- Image de profil  --}}
                            <div class="w-[70px] rounded-full overflow-hidden">
                                <img src="{{'/assets/images/profile-mage.png'}}" alt="Randy Press" class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <span class="font-normal text-[16px] text-[#232323] whitespace-nowrap">Randy Press</span>
                                <span class="font-normal text-[15px] text-[#718EBF] whitespace-nowrap">Director</span>
                            </div>
                        </div>
                
                        <div class="w-[33%] flex flex-col items-center">
                            {{-- Image de profil  --}}
                            <div class="w-[70px] rounded-full overflow-hidden">
                                <img src="{{'/assets/images/profile-mage.png'}}" alt="Workman" class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <span class="font-normal text-[16px] text-[#232323] whitespace-nowrap">Workman</span>
                                <span class="font-normal text-[15px] text-[#718EBF] whitespace-nowrap">Designer</span>
                            </div>
                        </div>
                    </div>
                
                    {{-- Bouton suivant --}}
                    <div class="w-[20%] flex justify-end">
                        <div class="rounded-full w-[50px] h-[50px] shadow-md flex items-center justify-center bg-white">
                            <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 13L7 7L1 1" stroke="#2D60FF" stroke-width="2"/>
                            </svg>
                        </div>
                    </div>
                
                </div>
                
                
                <div class="flex space-x-4">

                    <div class="flex items-center">
                        <span class="font-normal text-center text-[16px] text-[#718EBF] whitespace-nowrap">Write Among</span>
                    </div>
                
                    <div class="w-[250px]">
                        <div class="w-[100%]">
                            <form class="w-[100%] flex h-[20%] bg-[#EDF1F7] rounded-[50px]">
                                <input type="text" class="w-[50%] rounded-[50px] p-4 bg-[#EDF1F7] font-medium text-[15px] text-[#718EBF] focus:outline-none lg:" placeholder="$4456" />
                                <div class="w-[50%] h-full bg-primary-3 rounded-[50px] p-4 flex justify-around">
                                    <input type="submit" class="h-full self-center text-white text-[16px] font-medium" value="Send" /> 
                                    <svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25.9824 0.923369C26.1091 0.333347 25.5307 -0.164153 24.9664 0.0511577L0.490037 9.39483C0.195457 9.50731 0.000610804 9.78965 1.43342e-06 10.105C-0.000607937 10.4203 0.193121 10.7034 0.487294 10.817L7.36317 13.4726V21.8369C7.36317 22.1897 7.60545 22.4963 7.94873 22.5779C8.28972 22.659 8.64529 22.4967 8.80515 22.1796L11.6489 16.5364L18.5888 21.6868C19.011 22.0001 19.6178 21.8008 19.7714 21.2974C26.251 0.0528342 25.9708 0.97674 25.9824 0.923369ZM19.9404 3.60043L8.01692 12.092L2.88664 10.1106L19.9404 3.60043ZM8.8866 13.3428L19.2798 5.94118C10.3366 15.3758 10.8037 14.8792 10.7647 14.9317C10.7067 15.0096 10.8655 14.7058 8.8866 18.6327V13.3428ZM18.6293 19.8197L12.5206 15.2862L23.566 3.63395L18.6293 19.8197Z" fill="white"/>
                                    </svg>
                                </div>
                            </form>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>    
        <div class="col-span-6">
            <div class="flex flex-col gap-3">
                {{-- hero--}}
                <div class="flex items-center">
                    <span class="font-semibold text-[22px] text-primary-2">Balance History</span>
                </div>
                <div class=" bg-white rounded-[25px] p-4 h-[276px]" ></div>

            </div>    

        </div>
       
                   
    </div>

</x-app-layout>
