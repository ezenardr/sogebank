<x-app-layout>
    @section('title', 'Compte - Sogebanking')
    @section('pageTitle', 'Compte')
    <div class="container mx-auto mb-40 pb-11 lg:p-4 flex flex-col gap-6 overflow-y-scroll h-dvh items-center w-full">

        @foreach($accounts as $account)
            <a href="/account/account-details/{{$account->id}}"
               class="col-span-2 flex flex-col gap-4 bg-gradient-to-r from-[#2754C8] to-[#110F72]  p-4 lg:p-10 rounded-[32px] w-full">
                <div class="grid grid-cols-2 lg:grid-cols-3">
                    <div class="hidden lg:block">
                    <span class="text-[14px] tracking-wider text-white flex flex-col justify-between">
                        @if ($account->account_type == 'checking')
                            Chèque
                        @elseif ($account->account_type == 'savings')
                            Épargne`
                        @else
                            Business
                        @endif

                        {{ $account->currency == 'HTG' ? 'Gourdes' : 'Dollars' }}
                    </span>
                        <span class="text-white text-[24px] tracking-wide font-bold">{{$account-> account_number}}</span>
                    </div>
                    <div class="flex flex-col justify-self-center">
                        <span class="text-[14px] tracking-wider text-white text-right">Balance Courante</span>
                        <span class="text-white text-[24px] tracking-wide font-bold"><span
                                class="text-[16px]">{{$account -> currency}} </span>{{$account -> running_balance}}</span>
                    </div>
                    <div class="flex flex-col justify-self-end">
                        <span class="text-[14px] tracking-wider text-white text-right">Balance Disponible</span>
                        <span class="text-white text-[24px] tracking-wide font-bold"><span
                                class="text-[16px]">{{$account -> currency}} </span>{{$account -> available_balance}}</span>
                    </div>
                </div>
            </a>
        @endforeach
        <a href="/account/new-account"
           class="w-[60px] h-[60px] rounded-full bg-white flex items-center justify-center font-semibold text-[#718EBF] text-4xl">
            <svg width="30" height="30" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.75 9.75H4.25V8.25H8.75V3.75H10.25V8.25H14.75V9.75H10.25V14.25H8.75V9.75Z" fill="#718EBF"/>
            </svg>
        </a>
    </div>
</x-app-layout>
