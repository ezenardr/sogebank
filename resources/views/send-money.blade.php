<x-app-layout>

    @section('title', 'Transfert - Sogebanking')
    @section('pageTitle', 'Transfert')

    <form action="" method="post">
        <!-- Transfer - sogebank -->
        <div id="sogebankUserPage" class="container">
            <h2 class="md:indent-8 mt-4 font-semibold xl:text-[22px] md:text-[18px] text-[16px] text-[#333B69]">Send
                money</h2>
            <div class="mx-auto my-0 flex flex-col items-center">
                <div class="md:w-[380px] md:m-9 w-[80%] flex flex-col py-4">
                    <h3 class="py-3 font-semibold xl:text-[17px] lg:text-[15px] text-[15px] text-[#333B69]">Send to
                        Sogebank User</h3>
                    <div class="py-2">
                        <label for="">Amount to Send</label><br>
                        <input
                            style="width: 380px; height:46px;"
                            type="text" name="amount_send" id="" placeholder="00000000"
                            class="rounded px-4 border-b my-2 ">
                    </div>

                    <div class="py-2">
                        <label for="">Recipient Phone Number</label><br>
                        <input
                            style="width: 380px; height:46px;"
                            type="text" name="recipient_phone" id="" placeholder="00000000"
                            class="rounded px-4 border-b my-2 ">
                    </div>

                    <div class="py-2">
                        <label for="">Remark</label><br>
                        <input
                            style="width: 380px; height:46px;"
                            type="text" name="remark" id="" placeholder="Remark"
                            class="rounded px-4 border-b my-2 ">
                    </div>

                    <a
                        id="otherBanks"
                        class="text-center underline"
                        style="color: blue; font-style:italic; cursor:pointer;">Other Banks</a>

                    <button
                        class="my-3 w-full py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold rounded-lg hover:from-blue-600 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-400 cursor-pointer">
                        Continue
                    </button>
                </div>
            </div>
        </div>

        <!-- Transfer - other Banks -->
        <div id="otherBanksPage" class="hidden container">
            <h2 class="flex font-semibold xl:text-[22px] md:text-[18px] text-[16px] text-[#333B69]"><img
                    id="sogebankUser" class="me-4 cursor-pointer" src="{{'assets/icons/return.svg'}}" alt="return icon"><span
                    style="margin-right:12px; color: gray;"> send money . </span> other banks</h2>
            <div class="mx-auto my-0 flex flex-col items-center">
                <div style="width: 380px; margin:3rem 0;" class="flex flex-col py-4">
                    <h3 class="py-3 font-semibold xl:text-[17px] lg:text-[15px] text-[15px] text-[#333B69]">Send to
                        other bank</h3>
                    <div class="py-2">
                        <label for="">Amount to Send</label><br>
                        <input
                            style="width: 380px; height:46px;"
                            type="text" name="amount_send" id="" placeholder="00000000"
                            class="rounded px-4 border-b my-2 ">
                    </div>

                    <div class="py-2">
                        <label for="">Recipient Account Number</label><br>
                        <input
                            style="width: 380px; height:46px;"
                            type="text" name="recipient_phone" id="" placeholder="00000000"
                            class="rounded px-4 border-b my-2 ">
                    </div>

                    <div class="py-2">
                        <label for="">Remark</label><br>
                        <input
                            style="width: 380px; height:46px;"
                            type="text" name="remark" id="" placeholder="Remark"
                            class="rounded px-4 border-b my-2 ">
                    </div>

                    <button
                        id="transacConfirm"
                        type="button"
                        class="my-3 w-full py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold rounded-lg hover:from-blue-600 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-400 cursor-pointer">
                        Confirm
                    </button>
                </div>
            </div>
        </div>

        <!-- Confirm - Details -->
        <div id="transacConfirmPage" class="hidden container">
            <h2 class="flex font-semibold xl:text-[22px] md:text-[18px] text-[16px] text-[#333B69]"><img id=""
                                                                                                         class="me-4 cursor-pointer"
                                                                                                         src="{{'assets/icons/return.svg'}}"
                                                                                                         alt="return icon"><span
                    style="margin-right:12px; color: gray;"> send money . </span> other banks</h2>
            <div class="mx-auto my-0 flex flex-col items-center">

                <!-- Popup Background -->
                <div id="popup" class="hidden fixed inset-0 bg-black bg-opacity-50 items-center justify-center">
                    <!-- Popup Content -->
                    <div
                        class="bg-white rounded-2xl shadow-lg lg:w-[40%] md:w-[60%] w-[80%] md:h-[500px] p-6 flex flex-col justify-between ">
                        <!-- Header -->
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg font-semibold text-gray-800">Transaction Pin</h2>
                            <button type="reset" id="close-btn" class="text-gray-500 hover:text-gray-800">
                                &times;
                            </button>
                        </div>

                        <!-- PIN Input Fields -->
                        <div class="flex justify-center gap-4 mb-6">
                            <input type="password" maxlength="1"
                                   class="w-12 h-12 text-center text-lg border-2 border-blue-500 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <input type="password" maxlength="1"
                                   class="w-12 h-12 text-center text-lg border-2 border-blue-500 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <input type="password" maxlength="1"
                                   class="w-12 h-12 text-center text-lg border-2 border-blue-500 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <input type="password" maxlength="1"
                                   class="w-12 h-12 text-center text-lg border-2 border-blue-500 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>

                        <!-- Confirm Button -->
                        <button
                            class="my-3 w-full py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold rounded-lg hover:from-blue-600 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            Confirm
                        </button>
                    </div>
                </div>

                <div style="width: 380px; margin:3rem 0;">
                    <div class=" text-center flex flex-col mb-4">
                        <h3 class="font-semibold">Confirm Details</h3>
                        <p class="my-2 text-center ">Make sure the details below are correct when sending the money</p>
                        <div class="my-3 text-center text-[#333B69] text-[22px] font-semibold">$1.500</div>

                    </div>

                    <table class=" w-full ">

                        <tr class=" border-b-2">
                            <td class="px-2 py-2">Bank</td>
                            <td class="ps-2 py-2 text-end">GT Bank</td>
                        </tr>

                        <tr class=" border-b-2">
                            <td class="px-2 py-2">Account No.</td>
                            <td class="ps-2 py-2 text-end">1234778</td>
                        </tr>
                        <tr class=" border-b-2">
                            <td class="px-2 py-2">Account Name</td>
                            <td class="ps-2 py-2 text-end">Tohib Olawole Chibuka</td>
                        </tr>
                        <tr class=" border-b-2">
                            <td class="px-2 py-2">Remark</td>
                            <td class="ps-2 py-2 text-end">Medicines Fees</td>
                        </tr>
                    </table>

                    <button id="open-btn" type="button"
                            class="my-3 w-full py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold rounded-lg hover:from-blue-600 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-400 cursor-pointer">
                        Send Money
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
