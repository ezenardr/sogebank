<x-app-layout>
    @section('title', 'Add Card - Sogebanking')
    @section('pageTitle', 'Add Card')

    <div class="container bg-white lg:rounded-[25px] w-full px-10 pt-4 pb-2 mb-28">
        <form method="POST" action="/transactions/add-new-card" class=" flex flex-col">
            @csrf
            <div class="flex justify-around md:gap-4 md:flex-nowrap flex-wrap w-full mt-6">
                <div class="lg:w-[40%] w-[100%] h-min flex flex-col gap-5 md:me-4">
                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="card_type">
                            Type de carte
                        </label><br>
                        <select name="type" id="type" class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]">
                            <option value="">Type de Carte</option>
                            <option value="mastercard">Mastercard</option>
                            <option value="visa">Visa</option>
                        </select>
                    </div>
                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="account_id">
                            Compte
                        </label><br>
                        <select name="account_id" id="account_id" class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#b2b2b6] font-medium focus:outline-primary-3">
                            <option value="">Choisissez un Compte</option>
                            @foreach($accounts as $account)
                                <option value="{{$account->id}}">{{$account -> account_number}} 
                                    @if ($account->account_type == 'checking')
                                        Chèque
                                    @elseif ($account->account_type == 'savings')
                                        Épargne
                                    @else
                                        Business
                                    @endif 
                                        {{ $account->currency == 'HTG' ? 'Gourdes' : 'Dollars' }} {{$account -> currency}} {{$account -> available_balance}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-end ">
                <button
                    class="md:m-5 my-5 px-5 py-2 md:w-[130px] w-full bg-[#1814F3] font-semibold text-white rounded-[10px]"
                    type="submit">
                    + Add
                </button>
            </div>
        </form>
    </div>
</x-app-layout>