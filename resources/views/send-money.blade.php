<x-app-layout>

    @section('title', 'Transfert - Sogebanking')
    @section('pageTitle', 'Transfert')
    <div class="flex flex-col lg:flex-row gap-16 lg:gap-28">
        <a href="/send-money/my-account" class="flex flex-col gap-3 justify-center items-center">
            <img width="150" src="{{'/assets/images/Transfer_Between_Myaccounts-icons-01.png'}}"
                 alt="Transfer_Between_Myaccounts-icons-01">
            <p class="font-semibold text-[22px] text-primary-2">Entre mes comptes</p>
        </a>
        <a href="/send-money/third-party-sogebank" class="flex flex-col gap-3 justify-center items-center">
            <img width="150" src="{{'/assets/images/Transfer_ThirdpartySogebank-icons-01-01.png'}}"
                 alt="Transfer_Between_Myaccounts-icons-01">
            <p class="font-semibold text-[22px] text-primary-2">Autres client Sogebank</p>
        </a>
        <div class="flex flex-col gap-3 justify-center items-center">
            <img width="150" src="{{'/assets/images/Transfer_ThirdpartyLocalbank-01.png'}}"
                 alt="Transfer_Between_Myaccounts-icons-01">
            <p class="font-semibold text-[22px] text-primary-2">Autres banque locale</p>
        </div>
    </div>

</x-app-layout>
