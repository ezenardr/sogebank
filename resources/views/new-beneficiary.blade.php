<x-app-layout>
        @section('title', 'Nouveau Bénéficiaire - Sogebanking')
        @section('pageTitle', 'Bénéficiaire')

        <form action="/beneficiary/new-beneficiary" method="POST">
            @csrf
            <!-- Transfer - sogebank -->
            <div class=" container">
                <h2 class="md:indent-8 mt-4 font-semibold xl:text-[22px] md:text-[18px] text-[16px] text-[#333B69]">Nouveau Bénéficiaire</h2>
                <div class="mx-auto my-0 flex flex-col items-center">
                    <div class="md:w-[380px] md:m-9 w-[80%] flex flex-col py-4">
                            <label
                                class="text-[#232323] font-normal pb-3"
                                for="password">
                                Séléctionner un nouveau Bénéficiaire
                            </label>
                        <select class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]" name="email" required>
                            <option>--Séléctionner un nouveau Bénéficiaire--</option>
                            @foreach($users as $user)
                                <option value="{{$user->email}}">{{$user->email}}</option>
                            @endforeach
                        </select>
                        <button
                            class="my-3 w-full py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold rounded-lg hover:from-blue-600 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-400 cursor-pointer">
                            Continue
                        </button>
                    </div>
                </div>
            </div>
        </form>
</x-app-layout>
