<x-app-layout>
    @section('title', 'Compte - Sogebanking')
    @section('pageTitle', 'Compte')
    <div class="container mx-auto lg:p-4 flex flex-col gap-6 overflow-scroll h-dvh items-center w-full">

        <a href="/account-details/00000000" class="col-span-2 flex flex-col gap-4 bg-gradient-to-r from-[#2754C8] to-[#110F72]  p-4 lg:p-10 rounded-[32px] w-full">
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
        </a>
        <a href="/account-details/00000000"
            class="col-span-2 flex flex-col gap-4 bg-gradient-to-r from-[#2754C8] to-[#110F72]  p-4 lg:p-10 rounded-[32px] w-full">
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
        </a>
        <a href="/account/new-account" class="w-[60px] h-[60px] rounded-full bg-white flex items-center justify-center font-semibold text-[#718EBF] text-4xl">+</a>
    </div>
</x-app-layout>
