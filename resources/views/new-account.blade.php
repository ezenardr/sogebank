<x-app-layout>
    @section('title', 'New Account - Sogebanking')
    @section('pageTitle', 'New Account')
    <div class="container bg-white lg:rounded-[25px] w-full px-10 pt-4 pb-2 mb-28">
        <form method="POST" action="/account/new-account" class=" flex flex-col">
            @csrf
            <div class="flex justify-around md:gap-4 md:flex-nowrap flex-wrap w-full mt-6">
                <div class="lg:w-[40%] w-[100%] h-min flex flex-col gap-5 md:me-4">
                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="currency">
                            Devise
                        </label><br>
                        <select name="currency" class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]">
                            <option>--Choisir une option--</option>
                            <option value="HTG">Gourdes</option>
                            <option value="USD">Dollard Américain</option>
                        </select>
                    </div>
                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="account_type">
                            Type de compte
                        </label><br>
                        <select name="account_type" class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]">
                            <option>--Choisir une option--</option>
                            <option value="savings">Epargne</option>
                            <option value="checking">Chèque</option>
                            <option value="business">Compte Business</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex justify-end ">
                <button
                    class="md:m-5 my-5 px-5 py-2 md:w-[130px] w-full bg-[#1814F3] font-semibold text-white rounded-[10px]"
                    type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
