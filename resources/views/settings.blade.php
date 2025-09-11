<x-app-layout>
    @section('title', 'Paramètres - Sogebanking')
    @section('pageTitle', 'Paramètres')

    <div class="container bg-white lg:rounded-[25px] w-full px-10 pt-4 pb-2 mb-28">

        {{-- Header  Nav --}}
        <div class="w-full border-b border-[#EBEEF2]">
            <nav class="w-full bg-transparent flex  h-full lg:w-[415px]   ">
                <ul class="w-full flex justify-between">
                    <li class="relative group">
                        <a href="?view=profile"
                           class="cursor-pointer not-italic text-[16px] py-[14px] px-[11px] font-medium hover:text-primary-3 {{(request()->query('view') == 'profile' || !request()->query('view') ) ? "text-primary-3" :"text-[#718EBF]" }} transition-all duration-100 flex items-center ">
                            Profile
                            <div
                                class="absolute bottom-0 left-0 right-0 h-1 bg-primary-3 rounded-t-xl transform {{(request()->query('view') == 'profile' || !request()->query('view')) ? "scale-x-100" :"scale-x-0" }}  group-hover:scale-x-100 transition-all duration-300">
                            </div>
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="?view=preferences"
                           class="cursor-pointer not-italic text-[16px] py-[14px] px-[11px] font-medium hover:text-primary-3 {{request()->query('view') == 'preferences'  ? "text-primary-3" :"text-[#718EBF]" }} transition-all duration-100 flex items-center ">
                            Préférences
                            <div
                                class="absolute bottom-0 left-0 right-0 h-1 bg-primary-3 rounded-t-xl transform {{request()->query('view') == 'preferences'  ? "scale-x-100" :"scale-x-0" }}  group-hover:scale-x-100 transition-all duration-300">
                            </div>
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="?view=security"
                           class="cursor-pointer not-italic text-[16px] py-[14px] px-[11px] font-medium hover:text-primary-3 {{request()->query('view') == 'security'  ? "text-primary-3" :"text-[#718EBF]" }} transition-all duration-100 flex items-center ">
                            Sécurité
                            <div
                                class="absolute bottom-0 left-0 right-0 h-1 bg-primary-3 rounded-t-xl transform {{request()->query('view') == 'security'  ? "scale-x-100" :"scale-x-0" }}  group-hover:scale-x-100 transition-all duration-300">
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        @if(request()->query('view') == 'security')
            <form method="POST" action="/settings/security" class=" flex-col h-min">
                @csrf
                <div class="flex justify-around md:gap-4 md:flex-nowrap flex-wrap w-full mt-6">
                    {{-- First --}}
                    <div class="w-[100%] h-min flex flex-col gap-5 md:me-4">
                        <div class="w-[50%]">
                            <div class="text-md font-semibold text-[#333B69] mb-4">Changer Votre Mot de Passe</div>
                            <label
                                class="text-[#232323] font-normal"
                                for="password">
                                Mot de passe actuel
                            </label><br>
                            <input
                                class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                                type="password"
                                name="password"
                                id="">
                            @error('password')
                            <p class="text-[12px] text-red-500">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="w-[50%]">
                            <label
                                class="text-[#232323] font-normal"
                                for="new_password">
                                Nouveau mot de passe
                            </label><br>
                            <input
                                class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                                type="password"
                                name="new_password"
                                id="">
                            @error('new_password')
                            <p class="text-[12px] text-red-500">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="w-[50%]">
                            <label
                                class="text-[#232323] font-normal"
                                for="new_password_confirmation">
                                Confirmer le Nouveau mot de passe
                            </label><br>
                            <input
                                class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                                type="password"
                                name="new_password_confirmation"
                                id="">
                            @error('new_password_confirmation')
                            <p class="text-[12px] text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Send Botton --}}
                <div class="flex justify-end ">
                    <button
                        class="md:m-5 my-5 px-5 py-2 md:w-[130px] w-full bg-[#1814F3] font-semibold text-white rounded-[10px]"
                        type="submit">
                        Save
                    </button>
                </div>
            </form>
        @elseif(request()->query('view') == 'preferences')
            <form method="POST" action="/settings/preferences" class=" flex-col h-min">
                @csrf
                <div class="flex justify-around md:gap-4 md:flex-nowrap flex-wrap w-full mt-6">
                    {{-- First --}}
                    <div class="lg:w-[50%] w-[100%] h-min flex flex-col gap-5 md:me-4">
                        <div class="">
                            <div class="text-md font-semibold text-[#333B69] mb-4">Sécurité et Connexion</div>
                            <!-- Option 1 -->
                            <div class="flex justify-between items-center mb-4">
                                <label class="relative inline-flex items-center cursor-pointer me-4">
                                    <input name="two_factor_enabled" type="checkbox"
                                           @checked(old('two_factor_enabled', $user[0]->two_factor_enabled)) class="sr-only peer">
                                    <span
                                        class="w-11 h-6 bg-[#DFEAF2] rounded-full peer  peer-checked:bg-[#16DBCC] peer-checked:before:translate-x-6 peer-checked:before:bg-white before:content-[''] before:absolute before:top-0.5 before:left-[2px] before:bg-white before:border-gray-300 before:border before:rounded-full before:h-5 before:w-5 before:transition-all"></span>
                                </label>
                                <span
                                    class="text-gray-700 text-left flex-grow">Authentification à deux facteurs (2FA)</span>
                            </div>
                            <!-- Option 2 -->
                            <div class="flex justify-between items-center mb-4">
                                <label class="relative inline-flex items-center cursor-pointer me-4">
                                    <input name="confirm_transaction" type="checkbox"
                                           class="sr-only peer" @checked(old('confirm_transaction', $user[0]->confirm_transaction))>
                                    <span
                                        class="w-11 h-6 bg-[#DFEAF2] rounded-full peer  peer-checked:bg-[#16DBCC] peer-checked:before:translate-x-6 peer-checked:before:bg-white before:content-[''] before:absolute before:top-0.5 before:left-[2px] before:bg-white before:border-gray-300 before:border before:rounded-full before:h-5 before:w-5 before:transition-all"></span>
                                </label>
                                <span class="text-gray-700 text-left flex-grow">Demander une confirmation pour chaque transaction</span>
                            </div>
                            <!-- Option 2 -->
                            <div class="flex justify-between items-center mb-4">
                                <label class="relative inline-flex items-center cursor-pointer me-4">
                                    <input name="amount_alert" type="checkbox"
                                           class="sr-only peer" @checked(old('amount_alert', $user[0]->amount_alert))>
                                    <span
                                        class="w-11 h-6 bg-[#DFEAF2] rounded-full peer  peer-checked:bg-[#16DBCC] peer-checked:before:translate-x-6 peer-checked:before:bg-white before:content-[''] before:absolute before:top-0.5 before:left-[2px] before:bg-white before:border-gray-300 before:border before:rounded-full before:h-5 before:w-5 before:transition-all"></span>
                                </label>
                                <span class="text-gray-700 text-left flex-grow">Alerte en cas de transaction supérieure à un certain montant</span>
                            </div>
                        </div>


                    </div>

                    {{-- Second --}}
                    <div class="lg:w-[50%] w-[100%] h-min flex flex-col gap-5 md:me-4">
                        <div class="">
                            <div class="text-md font-semibold text-[#333B69] mb-4">Notifications</div>
                            <!-- Option 1 -->
                            <div class="flex justify-between items-center mb-4">
                                <label class="relative inline-flex items-center cursor-pointer me-4">
                                    <input name="email_notifications" type="checkbox"
                                           class="sr-only peer" @checked(old('email_notifications', $user[0]->email_notifications))>
                                    <span
                                        class="w-11 h-6 bg-[#DFEAF2] rounded-full peer  peer-checked:bg-[#16DBCC] peer-checked:before:translate-x-6 peer-checked:before:bg-white before:content-[''] before:absolute before:top-0.5 before:left-[2px] before:bg-white before:border-gray-300 before:border before:rounded-full before:h-5 before:w-5 before:transition-all"></span>
                                </label>
                                <span
                                    class="text-gray-700 text-left flex-grow">Recevoir des notifications par e-mail</span>
                            </div>

                            <!-- Option 2 -->
                            <div class="flex justify-between items-center mb-4">
                                <label class="relative inline-flex items-center cursor-pointer me-4">
                                    <input name="card_payment" type="checkbox"
                                           class="sr-only peer" @checked(old('card_payment', $user[0]->card_payment))>
                                    <span
                                        class="w-11 h-6 bg-[#DFEAF2] rounded-full peer  peer-checked:bg-[#16DBCC] peer-checked:before:translate-x-6 peer-checked:before:bg-white before:content-[''] before:absolute before:top-0.5 before:left-[2px] before:bg-white before:border-gray-300 before:border before:rounded-full before:h-5 before:w-5 before:transition-all"></span>
                                </label>
                                <span class="text-gray-700 text-left flex-grow">Notification lors d’un paiement par carte bancaire</span>
                            </div>

                            <!-- Option 3 -->
                            <div class="flex justify-between items-center">
                                <label class="relative inline-flex items-center cursor-pointer me-4">
                                    <input name="new_login" type="checkbox"
                                           class="sr-only peer" @checked(old('new_login', $user[0]->new_login))>
                                    <span
                                        class="w-11 h-6 bg-[#DFEAF2] rounded-full peer  peer-checked:bg-[#16DBCC] peer-checked:before:translate-x-6 peer-checked:before:bg-white before:content-[''] before:absolute before:top-0.5 before:left-[2px] before:bg-white before:border-gray-300 before:border before:rounded-full before:h-5 before:w-5 before:transition-all"></span>
                                </label>
                                <span
                                    class="text-gray-700 text-left flex-grow">Alerte en cas de connexion à partir d’un nouvel appareil</span>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Send Botton --}}
                <div class="flex justify-end ">
                    <button
                        class="md:m-5 my-5 px-5 py-2 md:w-[130px] w-full bg-[#1814F3] font-semibold text-white rounded-[10px]"
                        type="submit">
                        Save
                    </button>
                </div>
            </form>
        @else
            <div class=" flex flex-col">

                {{-- Form --}}
                <div class="flex justify-around md:gap-4 md:flex-nowrap flex-wrap w-full mt-6">
                    {{-- Profil picture --}}
                    <div class="">
                            <?php
                            $fullname = Auth::user()->first_name . " " . Auth::user()->last_name;
                            $initial = collect(explode(' ', $fullname))
                                ->take(2)
                                ->map(fn($part) => strtoupper(Str::substr($part, 0, 1)))
                                ->implode('');
                            ?>
                        <div
                            class=" w-[130px] h-[130px] rounded-full bg-[#F5F7FA] flex items-center justify-center text-[28px] font-semibold text-primary-2 select-none">
                            {{$initial}}</div>
                    </div>

                    {{-- First col --}}
                    <div class="lg:w-[40%] w-[100%] h-min flex flex-col gap-5 md:me-4">

                        <div class="mt-5">
                            <label
                                class="text-[#232323] font-normal"
                                for="name">
                                Prénom
                            </label><br>
                            <input
                                class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                                type="text"
                                name="name"
                                value="{{Auth::user()->first_name}}"
                                id=""
                                disabled
                                readonly>
                        </div>

                        <div>
                            <label
                                class="text-[#232323] font-normal"
                                for="">
                                Email
                            </label><br>
                            <input
                                class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                                type="email"
                                name="email"
                                id=""
                                value="{{Auth::user()->email}}"
                                disabled
                                readonly>
                        </div>


                        <div>
                            <label
                                class="text-[#232323] font-normal"
                                for="date_of_birth">
                                Date of Birth
                            </label><br>
                            <input
                                class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                                type="date"
                                name="date_of_birth"
                                id="date_of_birth"
                                value="{{Auth::user()->date_of_birth}}"
                                >
                        </div>


                    </div>

                    {{--Second col --}}
                    <div class="lg:w-[40%] w-[100%] h-min flex flex-col gap-5 md:me-5">
                        <div class="mt-5">
                            <label
                                class="text-[#232323] font-normal"
                                for="name">
                                Nom
                            </label><br>
                            <input
                                class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                                type="text"
                                name="name"
                                value="{{Auth::user()->last_name}}"
                                id=""
                                disabled
                                readonly>
                        </div>

                        <div>
                            <label
                                class="text-[#232323] font-normal"
                                for="address">
                                Adresse
                            </label><br>
                            <input
                                class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                                type="text"
                                name="address"
                                id="address"
                                value="{{Auth::user()->address}}"
                                placeholder="San Jose, California, USA">
                        </div>

                    </div>
                </div>

                {{-- Send Botton --}}
                <div class="flex justify-end ">
                    <button
                        class="md:m-5 my-5 px-5 py-2 md:w-[130px] w-full bg-[#1814F3] font-semibold text-white rounded-[10px]"
                        type="submit">
                        Save
                    </button>
                </div>
            </div>
        @endif


    </div>
</x-app-layout>
