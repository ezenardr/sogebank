<x-app-layout>
    @section('title', 'Transfert, Client Sogebank - Sogebanking')
    @section('pageTitle', 'Transfert')

    <div class="container mx-auto lg:p-4 flex flex-col gap-6 overflow-y-auto h-auto items-center w-full">
        <a href="/beneficiary/new-beneficiary"
           class="w-[60px] h-[60px] rounded-full bg-white flex items-center justify-center font-semibold text-[#718EBF] text-4xl z-10">
            <svg width="30" height="30" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.75 9.75H4.25V8.25H8.75V3.75H10.25V8.25H14.75V9.75H10.25V14.25H8.75V9.75Z" fill="#718EBF"/>
            </svg>
        </a>
        <p class="font-semibold text-[22px] text-primary-2">Ajouter un bénéficiaire pour continuer</p>
    </div>


</x-app-layout>
