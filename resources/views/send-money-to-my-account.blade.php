<x-app-layout>

    @section('title', 'Transfert entre mes comptes - Sogebanking')
    @section('pageTitle', 'Mes Comptes')

    <div class="container bg-white lg:rounded-[25px] w-full px-10 pt-4 pb-2 mb-28">
        <form method="POST" action="/send-money/my-account" class=" flex flex-col">
            @csrf
            <div class="flex justify-around md:gap-4 md:flex-nowrap flex-wrap w-full mt-6">
                <div class="lg:w-[40%] w-[100%] h-min flex flex-col gap-5 md:me-4">
                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="account_id">
                            De
                        </label><br>
                        <select name="account_id" id="account_id"
                                class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]">
                            <option value="">--Séléctionner un compte--</option>
                            @foreach($accounts as $account)
                                <option
                                    value="{{$account->id}}">{{$account -> account_number}} @if ($account->account_type == 'checking')
                                        Chèque
                                    @elseif ($account->account_type == 'savings')
                                        Épargne
                                    @else
                                        Business
                                    @endif {{ $account->currency == 'HTG' ? 'Gourdes' : 'Dollars' }} {{$account -> currency}} {{$account -> available_balance}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="recipient_account_id">
                            A
                        </label><br>
                        <select name="recipient_account_id" id="recipient_account_id"
                                class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]">
                            <option value="">--Séléctionner un compte--</option>
                            @foreach($accounts as $account)
                                <option
                                    value="{{$account->id}}">{{$account -> account_number}} @if ($account->account_type == 'checking')
                                        Chèque
                                    @elseif ($account->account_type == 'savings')
                                        Épargne
                                    @else
                                        Business
                                    @endif {{ $account->currency == 'HTG' ? 'Gourdes' : 'Dollars' }} {{$account -> currency}} {{$account -> available_balance}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="amount">
                            Montant
                        </label><br>
                        <input type="number" name="amount" id="amount"
                               class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]">
                    </div>
                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="description">
                            Description
                        </label><br>
                        <input maxlength="100" type="text" name="description" id="description"
                               class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]">
                    </div>
                    @error('transfer_error')
                    <p class="text-[12px] text-red-500">{{$message}}</p>
                    @enderror
                    @error('insufficient_funds')
                    <p class="text-[12px] text-red-500">{{$message}}</p>
                    @enderror
                    @error('same_account')
                    <p class="text-[12px] text-red-500">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end ">
                <button
                    class="md:m-5 my-5 px-5 py-2 md:w-[130px] w-full bg-[#1814F3] font-semibold text-white rounded-[10px]"
                    type="submit">
                    Envoyer
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
