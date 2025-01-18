<x-app-layout>
    <div class="flex flex-col lg:grid grid-cols-3 gap-8">
        <div class="col-span-2 flex flex-col gap-4 bg-gradient-to-r from-[#2754C8] to-[#110F72]  p-4 lg:p-10 rounded-[32px]">
            <div>
                <p class="text-[14px] tracking-wider text-white">Welcome <span
                        class="text-white text-[24px] tracking-wide font-bold">Patricia</span>
                </p>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-3">
                <div class="hidden lg:block">
                    <span
                        class="text-[14px] tracking-wider text-white flex flex-col justify-between">Compte Gourdes</span>
                    <span class="text-white text-[24px] tracking-wide font-bold">0000000</span>
                </div>
                <div class="flex flex-col justify-self-center">
                    <span class="text-[14px] tracking-wider text-white text-right">Balance Courante</span>
                    <span class="text-white text-[24px] tracking-wide font-bold"><span class="text-[16px]">HTG </span>28,085.00</span>
                </div>
                <div class="flex flex-col justify-self-end">
                    <span class="text-[14px] tracking-wider text-white text-right">Balance Disponible</span>
                    <span class="text-white text-[24px] tracking-wide font-bold"><span class="text-[16px]">HTG </span>28,085.00</span>
                </div>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-3">
                <div class="hidden lg:block">
                    <span
                        class="text-[14px] tracking-wider text-white flex flex-col justify-between">Compte Dollars</span>
                    <span class="text-white text-[24px] tracking-wide font-bold">0000000</span>
                </div>
                <div class="flex flex-col justify-self-center">
                    <span class="text-[14px] tracking-wider text-white text-right">Balance Courante</span>
                    <span class="text-white text-[24px] tracking-wide font-bold"><span class="text-[16px]">USD </span>8,076.00</span>
                </div>
                <div class="flex flex-col justify-self-end">
                    <span class="text-[14px] tracking-wider text-white text-right">Balance Disponible</span>
                    <span class="text-white text-[24px] tracking-wide font-bold"><span class="text-[16px]">USD </span>8,076.00</span>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-3">
            <span class="font-semibold text-[22px] text-[#343C6A]">Transactions Récentes</span>
            <div class=" flex flex-col gap-4 bg-white px-8 py-4 max-w-[450px] rounded-[25px]">
                <div class="flex justify-between items-center ">
                    <div class="w-[55px] h-[55px] flex items-center justify-center rounded-full bg-[#FFF5D9]">
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
                    <div class="w-[55px] h-[55px] flex items-center justify-center rounded-full bg-[#E7EDFF]">
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
                    <div class="w-[55px] h-[55px] flex items-center justify-center rounded-full bg-[#DCFAF8]">
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
</x-app-layout>
