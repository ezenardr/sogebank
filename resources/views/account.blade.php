<x-app-layout>
    @section('title', 'Compte - Sogebanking')
    @section('pageTitle', 'Compte')
    <div class="container mx-auto p-4 overflow-scroll h-dvh">
        <!-- first part -->
        <div class="flex gap-4 md:gap-0 justify-between flex-wrap">
            <div class="flex justify-between w-[100%] md:w-[49%]">
                <div class="pb-2 xl:pt-1 w-[48%] xl:h-[120px] h-[90px] rounded-2xl bg-white">
                    <div class="p-5 flex items-center justify-around">
                        <div class="  xl:w-[70px] xl:h-[70px]  md:w-[50px] md:h-[50px] w-[45px] h-[45px] flex items-center justify-center rounded-full bg-[#FFF5D9] ">
                            <img src="{{'assets/icons/money-tag.svg'}}" class="w-[20px] lg:w-[30px]" alt="money-tag icon">
                        </div>
                        <div>
                            <span class="text-[#718EBF] xl:text-[14px] text-[12px] font-normal">My Balance</span><br>
                            <span class="text-[#232323] xl:text-[25px] text-[16px] font-semibold"> $12,250</span>
                        </div>
                    </div>
                </div>

                <div class="pb-2 xl:pt-1 w-[48%] xl:h-[120px] h-[90px] rounded-2xl bg-white">
                    <div class="p-5 flex items-center justify-around">
                        <div class=" xl:w-[70px] xl:h-[70px] md:w-[50px] md:h-[50px] w-[45px] h-[45px] flex items-center justify-center rounded-full bg-[#E7EDFF] ">
                            <img src="{{'assets/icons/income.svg'}}" class="w-[20px] lg:w-[30px]" alt="income icon">
                        </div>
                        <div>
                            <span class="text-[#718EBF] xl:text-[14px] text-[12px] font-normal">Income</span><br>
                            <span class="text-[#232323] xl:text-[25px] text-[16px] font-semibold"> $5,600 </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex mt-2 md:mt-0 justify-between w-[100%] md:w-[49%]">
                <div class=" pb-2 w-[48%] xl:pt-1 xl:h-[120px] h-[90px] rounded-2xl bg-white">
                    <div class="p-5 flex items-center justify-around">
                        <div class=" xl:w-[70px] xl:h-[70px] md:w-[50px] md:h-[50px] w-[45px] h-[45px] flex items-center justify-center rounded-full bg-[#FFE0EB] ">
                            <img src="{{'assets/icons/expense.svg'}}" class="w-[20px] lg:w-[30px]" alt="expense icon">
                        </div>
                        <div>
                            <span class="text-[#718EBF] xl:text-[14px] text-[12px] font-normal">Expense</span><br>
                            <span class="text-[#232323] xl:text-[25px] text-[16px] font-semibold"> $3,460</span>
                        </div>
                    </div>
                </div>

                <div class=" pb-2 w-[48%] xl:pt-1 xl:h-[120px] h-[90px] rounded-2xl bg-white">
                    <div class="p-5 flex items-center justify-around">
                        <div class=" xl:w-[70px] xl:h-[70px] md:w-[50px] md:h-[50px] w-[45px] h-[45px] flex items-center justify-center rounded-full bg-[#DCFAF8] ">
                            <img src="{{'assets/icons/total-saving.svg'}}" class="w-[20px] lg:w-[30px]" alt="total saving icon">
                        </div>
                        <div>
                            <span class="text-[#718EBF] xl:text-[14px] text-[12px] font-normal">Total Saving</span><br>
                            <span class="text-[#232323] xl:text-[25px] text-[16px] font-semibold">$7,920</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Last Transaction  -->
        <div class="flex justify-between flex-wrap py-4 md:gap-[3%]">

            <div class="w-[100%] md:w-[62%]">
                <h2 class="font-semibold xl:text-[22px] md:text-[18px] text-[16px] text-[#333B69]">Last Transaction</h2>
                <div class=" bg-white rounded-[25px] py-2 mt-4 h-[250px] overflow-y-scroll">
                    <table class=" w-[100%]">
                        <tr>
                            <td class="px-2 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#DCFAF8] ">
                                    <img src="{{'assets/icons/renew-1.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-2 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-medium text-[#232323]">Spotify Subscription</span> <br>
                                <span class="text-[#718EBF] xl-text-[15px] text-[12px] font-normal">25 Jan 2021</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">Shopping</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">1234 ****</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">pending</span>
                            </td>
                            <td class="float-end md:float-none px-2 py-2">
                                <span class=" xl:text-[16px] text-[12px] font-medium text-[#FE5C73]">-$150</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-2 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#E7EDFF] ">
                                    <img src="{{'assets/icons/account-setting-icon.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-2 py-2">
                                <span class="xl-text-[16px] md:text-[12px] text-[14px] font-medium text-[#232323]">Mobile Service</span> <br>
                                <span class="text-[#718EBF] xl-text-[15px] text-[12px] font-normal">25 Jan 2021</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">Service</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">1234 ****</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">completed</span>
                            </td>
                            <td class="float-end md:float-none px-2 py-2">
                                <span class=" xl:text-[16px] text-[12px] font-medium text-[#FE5C73]">-$440</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-2 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#FFE0EB] ">
                                    <img src="{{'assets/icons/account-user-icon.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-2 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-medium text-[#232323]">Emilie Wilson</span> <br>
                                <span class="text-[#718EBF] xl-text-[15px] text-[12px] font-normal">25 Jan 2021</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">transfert</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">1234 ****</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">completed</span>
                            </td>
                            <td class="float-end md:float-none px-2 py-2">
                                <span class=" xl:text-[16px] text-[12px] font-medium text-[#16DBAA]">$780</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-2 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#E7EDFF] ">
                                    <img src="{{'assets/icons/account-setting-icon.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-2 py-2">
                                <span class="xl-text-[16px] md:text-[12px] text-[14px] font-medium text-[#232323]">Mobile Service</span> <br>
                                <span class="text-[#718EBF] xl-text-[15px] text-[12px] font-normal">25 Jan 2021</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">Service</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">1234 ****</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">completed</span>
                            </td>
                            <td class="float-end md:float-none px-2 py-2">
                                <span class=" xl:text-[16px] text-[12px] font-medium text-[#FE5C73]">-$440</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-2 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#FFE0EB] ">
                                    <img src="{{'assets/icons/account-user-icon.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-2 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-medium text-[#232323]">Emilie Wilson</span> <br>
                                <span class="text-[#718EBF] xl-text-[15px] text-[12px] font-normal">25 Jan 2021</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">transfert</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">1234 ****</span>
                            </td>
                            <td class="hidden md:table-cell px-2 py-2">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">completed</span>
                            </td>
                            <td class="float-end md:float-none px-2 py-2">
                                <span class=" xl:text-[16px] text-[12px] font-medium text-[#16DBAA]">$780</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="w-[100%] md:w-[35%]">
                <div class="mt-4 md:mt-0 flex justify-between">
                    <h2 class="font-semibold xl:text-[22px] lg:text-[18px] text-[16px] text-[#333B69]">My Card</h2>
                    <h2 class="font-semibold xl:text-[17px] lg:text-[15px] text-[15px] text-[#333B69] cursor-pointer ">See All</h2>
                </div>
                <!-- card - edshy -->
            </div>
        </div>

        <!-- Debit & Credit overview & Invoices Sent-->
        <div class="flex justify-between flex-wrap py-2 md:gap-[3%] mb-[100px]">

            <!-- Debit & Credit overview -->
            <div class="w-[100%] md:w-[62%]">
                <h2 class="font-semibold xl:text-[22px] md:text-[18px] text-[16px] text-[#333B69]">Debit & Credit Overview</h2>

                <!-- Entete & Histogramme -->
                <div class="mt-3">
                    <div class="bg-white rounded-[25px] h-[364px] p-5">
                        <!-- En tete -->
                        <div class="flex md:justify-between justify-end">
                            <div class="hidden md:block relative bottom-[5px] font-normal xl:text-[16px] md:text-[12px]">
                                <span>$7550 </span><span class="text-[#718EBF]">Debited & </span><span>$5,420 </span><span class="text-[#718EBF]">Credited in this week</span>
                            </div>
                            <div class="flex">
                                <div class="mx-2 flex">
                                    <div class="xl:w-[15px] xl:h-[15px] w-[12px] h-[12px] rounded-[30%] bg-[#4C78FF]"></div>
                                    <div class="mx-3 relative xl:bottom-[5px] bottom-[3px] font-normal xl:text-[16px] text-[12px] text-[#718EBF]">Debit</div>
                                </div>
                                <div class="mx-2 flex">
                                    <div class="xl:w-[15px] xl:h-[15px] w-[12px] h-[12px] rounded-[30%] bg-[#FF82AC]"></div>
                                    <div class="ms-2 relative xl:bottom-[5px] bottom-[3px] font-normal xl:text-[16px] text-[12px] text-[#718EBF]">Credit</div>
                                </div>
                            </div>
                        </div>

                        <!-- Histogramme -->
                        <div class="w-[100%] h-[95%] flex gap-[1%]">

                            <div class="w-[13%] h-[100%] flex flex-col text-center pt-4  mx-1">
                                <!-- two bars - container -->
                                <div class="flex justify-around h-[90%]">
                                    <!-- bars -->
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[90%] relative top-[10%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[100%] relative top-[0%]"></div>
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
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[20%] relative top-[80%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[30%] relative top-[70%]"></div>
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
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[100%] relative top-[0%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[40%] relative top-[60%]"></div>
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
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[20%] relative top-[80%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[100%] relative top-[0%]"></div>
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
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[70%] relative top-[30%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[60%] relative top-[40%]"></div>
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
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[90%] relative top-[10%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[50%] relative top-[50%]"></div>
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
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#1A16F3] w-[35%] h-[80%] relative top-[20%]"></div>
                                    <div class=" xl:rounded-[10px] md:rounded-[7px] rounded-[4px] bg-[#FCAA0B] w-[35%] h-[100%] relative top-[0%]"></div>
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

            <!-- Invoices Sent -->
            <div class="w-[100%] md:w-[35%] mt-3 md:mt-0">
                <h2 class="font-semibold xl:text-[22px] lg:text-[18px] text-[16px] text-[#333B69]">Invoices Sent</h2>

                <div class="mt-3 p-1 bg-white rounded-[25px] h-[360px] overflow-y-scroll">
                    <table class="w-[100%]">

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#DCFAF8] ">
                                    <img src="{{'assets/icons/apple.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">Apple store</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">5h ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$450</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#FFF5D9] ">
                                    <img src="{{'assets/icons/user-1.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">Michael</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">2 days ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$150</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#E7EDFF] ">
                                    <img src="{{'assets/icons/playstation.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">Playstation</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">5 days ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$1085</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#FFE0EB] ">
                                    <img src="{{'assets/icons/user-2.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">William</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">10 days ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$90</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#FFF5D9] ">
                                    <img src="{{'assets/icons/user-1.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">Michael</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">2 days ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$150</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#E7EDFF] ">
                                    <img src="{{'assets/icons/playstation.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">Playstation</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">5 days ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$1085</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2">
                                <div class="xl:w-[55px] xl:h-[55px] md:w-[40px] md:h-[40px] w-[45px] h-[45px] flex items-center justify-center rounded-[40%]  bg-[#FFE0EB] ">
                                    <img src="{{'assets/icons/user-2.svg'}}" alt="expense icon">
                                </div>
                            </td>
                            <td class=" px-4 py-2">
                                <span class="xl:text-[16px] md:text-[12px] text-[14px] font-semibold text-[#B1B1B1]">William</span> <br>
                                <span class="text-start text-[#718EBF] xl-text-[15px] text-[12px] font-normal">10 days ago</span>
                            </td>
                            <td class="px-4 py-2 text-end">
                                <span class="xl:text-[16px] text-[12px] font-normal text-[#718EBF]">$90</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- Fin Invoices Sent -->

        </div>
    </div>
</x-app-layout>
