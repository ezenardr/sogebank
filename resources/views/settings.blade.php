<x-app-layout>
    @section('title', 'Paramètres - Sogebanking')
    @section('pageTitle', 'Paramètres')

    <form method="post" action="" class="container bg-white lg:rounded-[25px] w-full px-10 pt-4 pb-2 mb-28">

        {{-- Header  Nav --}}
        <div class="w-full border-b border-[#EBEEF2]">
            <nav class="w-full bg-transparent flex  h-full lg:w-[415px]   ">
                <ul class="w-full flex justify-between">
                    <li class="relative group">
                        <i
                            class="settingProfilBtn cursor-pointer not-italic text-[16px] py-[14px] px-[11px] font-medium hover:text-primary-3 transition-all duration-100 flex items-center {{Request::is('account') ? "text-primary-3  border-primary-3" : "text-[#718EBF]"}}">
                            Edit Profil
                            <div
                                class="absolute bottom-0 left-0 right-0 h-1 bg-primary-3 rounded-t-xl transform scale-x-0 group-hover:scale-x-100 transition-all duration-300">
                            </div>
                        </i>
                    </li>
                    <li class="relative group">
                        <i
                            class="settingPreferenceBtn cursor-pointer not-italic text-[16px] py-[14px] px-[11px] font-medium hover:text-primary-3 transition-all duration-100 flex items-center {{Request::is('account') ? "text-primary-3  border-primary-3" : "text-[#718EBF]"}}">
                            Preferences
                            <div
                                class="absolute bottom-0 left-0 right-0 h-1 bg-primary-3 rounded-t-xl transform scale-x-0 group-hover:scale-x-100 transition-all duration-300">
                            </div>
                        </i>
                    </li>
                    <li class="relative group">
                        <i
                            class="settingSecurityBtn cursor-pointer not-italic text-[16px] py-[14px] px-[11px] font-medium hover:text-primary-3 transition-all duration-300 flex items-center {{Request::is('account') ? "text-primary-3  border-primary-3" : "text-[#718EBF]"}}">
                            Security
                            <div
                                class="absolute bottom-0 left-0 right-0 h-1 bg-primary-3 rounded-t-xl transform scale-x-0 group-hover:scale-x-100 transition-all duration-300">
                            </div>
                        </i>
                    </li>
                </ul>
            </nav>
        </div>

        {{-- Setting Profil --}}
        <div class=" settingProfil flex flex-col">

            {{-- Form --}}
            <div class="flex justify-around md:gap-4 md:flex-nowrap flex-wrap w-full mt-6">
                {{-- Profil picture --}}
                <div class="lg:w-[20%] w-[100%] md:h-[500px]">

                    <img class="border mx-auto my-5 lg:w-[132px] lg:h-[130px] md:w-[110px] md:h-[110px] w-[174px] h-[170px] rounded-[50%]"
                        src="{{'/assets/images/profile-mage.png'}}" alt="profile image" />

                    {{-- Edit pencil file type --}}
                    <img class="relative lg:left-[69%] lg:bottom-[13%] md:left-[64%] md:bottom-[12%] left-[65%] bottom-[30%] md:w-[30px] md:h-[30px] w-[40px] h-[40px]"
                        src="{{'/assets/icons/pencil.svg'}}" alt="pencil edit" />
                </div>

                {{-- First col --}}
                <div class="lg:w-[40%] w-[100%] h-min flex flex-col gap-5 md:me-4">

                    <div class="mt-5">
                        <label
                            class="text-[#232323] font-normal"
                            for="name">
                            Your name
                        </label><br>
                        <input
                            class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                            type="text"
                            name="name"
                            id=""
                            placeholder="Charlenne Rees">
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
                            placeholder="charlennereed@gmail.com">
                    </div>


                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="">
                            Date of Birth
                        </label><br>
                        <input
                            class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                            type="date"
                            name="birthday"
                            id=""
                            placeholder="25 january 1990">
                    </div>

                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="">
                            Permanent Address
                        </label><br>
                        <input
                            class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                            type="text"
                            name="permanent_address"
                            id=""
                            placeholder="San Jose, California, USA">
                    </div>

                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="">
                            Postal Code
                        </label><br>
                        <input
                            class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                            type="text"
                            name="postal"
                            id=""
                            placeholder="4592">
                    </div>


                </div>

                {{--Second col --}}
                <div class="lg:w-[40%] w-[100%] h-min flex flex-col gap-5 md:me-5">

                    <div class="mt-5">
                        <label
                            class="text-[#232323] font-normal"
                            for="username">
                            Username
                        </label><br>
                        <input
                            class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                            type="text"
                            name="username"
                            id=""
                            placeholder="Charlenne Rees">
                    </div>

                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="paasword">
                            Password
                        </label><br>
                        <input
                            class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                            type="password"
                            name="password"
                            id=""
                            placeholder="**********">
                    </div>

                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="presente_address">
                            Presente Address
                        </label><br>
                        <input
                            class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                            type="text"
                            name="presente_address"
                            id=""
                            placeholder="San Jose, California, USA">
                    </div>

                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="city">
                            City
                        </label><br>
                        <input
                            class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                            type="text"
                            name="city"
                            id=""
                            placeholder="San Jose">
                    </div>

                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="country">
                            Country
                        </label><br>
                        <input
                            class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                            type="text"
                            name="country"
                            id=""
                            placeholder="USA">
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

        {{-- Setting Preferences --}}
        <div class="hidden settingPreference flex flex-col h-min">


            <div class="flex justify-around md:gap-4 md:flex-nowrap flex-wrap w-full mt-6">
                {{-- First --}}
                <div class="lg:w-[50%] w-[100%] h-min flex flex-col gap-5 md:me-4">
                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="curency">
                            Curency
                        </label><br>
                        <input
                            class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                            type="text"
                            name="curency"
                            id=""
                            placeholder="USD">
                    </div>

                    <div class="hidden md:block">
                        <div class="text-md font-semibold text-[#333B69] mb-4">Notification</div>
                        <!-- Option 1 -->
                        <div class="flex justify-between items-center mb-4">
                            <label class="relative inline-flex items-center cursor-pointer me-4">
                                <input name="digital_curency" type="checkbox" class="sr-only peer">
                                <div class="w-11 h-6 bg-[#DFEAF2] rounded-full peer  peer-checked:bg-[#16DBCC] peer-checked:before:translate-x-6 peer-checked:before:bg-white before:content-[''] before:absolute before:top-0.5 before:left-[2px] before:bg-white before:border-gray-300 before:border before:rounded-full before:h-5 before:w-5 before:transition-all"></div>
                            </label>
                            <span class="text-gray-700 text-left flex-grow">I send or receive digital currency</span>
                        </div>

                        <!-- Option 2 -->
                        <div class="flex justify-between items-center mb-4">
                            <label class="relative inline-flex items-center cursor-pointer me-4">
                                <input name="order" type="checkbox" class="sr-only peer">
                                <div class="w-11 h-6 bg-[#DFEAF2] rounded-full peer  peer-checked:bg-[#16DBCC] peer-checked:before:translate-x-6 peer-checked:before:bg-white before:content-[''] before:absolute before:top-0.5 before:left-[2px] before:bg-white before:border-gray-300 before:border before:rounded-full before:h-5 before:w-5 before:transition-all"></div>
                            </label>
                            <span class="text-gray-700 text-left flex-grow">I receive merchant order</span>
                        </div>

                        <!-- Option 3 -->
                        <div class="flex justify-between items-center">
                            <label class="relative inline-flex items-center cursor-pointer me-4">
                                <input name="recommendation" type="checkbox" class="sr-only peer" checked>
                                <div class="w-11 h-6 bg-[#DFEAF2] rounded-full peer  peer-checked:bg-[#16DBCC] peer-checked:before:translate-x-6 peer-checked:before:bg-white before:content-[''] before:absolute before:top-0.5 before:left-[2px] before:bg-white before:border-gray-300 before:border before:rounded-full before:h-5 before:w-5 before:transition-all"></div>
                            </label>
                            <span class="text-gray-700 text-left flex-grow">Ther are recommendations for my account</span>
                        </div>
                    </div>

                </div>

                {{-- Second --}}
                <div class="lg:w-[50%] w-[100%] h-min flex flex-col gap-5 md:me-4">
                    <div>
                        <label
                            class="text-[#232323] font-normal"
                            for="time_zone">
                            Time zone
                        </label><br>
                        <input
                            class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                            type="text"
                            name="time_zone"
                            id=""
                            placeholder="(GMT-12:00) International Date Line West">
                    </div>

                    <div class="md:hidden">
                        <div class="text-md font-semibold text-[#333B69] mb-4">Notification</div>
                        <!-- Option 1 -->
                        <div class="flex justify-between items-center mb-4">
                            <label class="relative inline-flex items-center cursor-pointer me-4">
                                <input name="digital_curency" type="checkbox" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer  peer-checked:bg-[#16DBCC] peer-checked:before:translate-x-6 peer-checked:before:bg-white before:content-[''] before:absolute before:top-0.5 before:left-[2px] before:bg-gray-100 before:border-gray-300 before:border before:rounded-full before:h-5 before:w-5 before:transition-all"></div>
                            </label>
                            <span class="text-gray-700 text-left flex-grow">I send or receive digital currency</span>
                        </div>

                        <!-- Option 2 -->
                        <div class="flex justify-between items-center mb-4">
                            <label class="relative inline-flex items-center cursor-pointer me-4">
                                <input name="order" type="checkbox" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:bg-[#16DBCC]  peer-checked:before:translate-x-6 peer-checked:before:bg-white before:content-[''] before:absolute before:top-0.5 before:left-[2px] before:bg-gray-100 before:border-gray-300 before:border before:rounded-full before:h-5 before:w-5 before:transition-all"></div>
                            </label>
                            <span class="text-gray-700 text-left flex-grow">I receive merchant order</span>
                        </div>

                        <!-- Option 3 -->
                        <div class="flex justify-between items-center">
                            <label class="relative inline-flex items-center cursor-pointer me-4">
                                <input name="recommendation" type="checkbox" class="sr-only peer" checked>
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:bg-[#16DBCC]  peer-checked:before:translate-x-6 peer-checked:before:bg-white before:content-[''] before:absolute before:top-0.5 before:left-[2px] before:bg-gray-100 before:border-gray-300 before:border before:rounded-full before:h-5 before:w-5 before:transition-all"></div>
                            </label>
                            <span class="text-gray-700 text-left flex-grow">There are recommendations for my account</span>
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

        </div>

        {{-- Setting Security --}}
        <div class="hidden settingSecurity flex flex-col h-min">

            <div class="flex justify-around md:gap-4 md:flex-nowrap flex-wrap w-full mt-6">
                {{-- First --}}
                <div class="w-[100%] h-min flex flex-col gap-5 md:me-4">

                    <div>
                        <div class="text-md font-semibold text-[#333B69] mb-4">Two-factor Authentification</div>
                        <!-- Option 1 -->
                        <div class="flex justify-between items-center mb-4">
                            <label class="relative inline-flex items-center cursor-pointer me-4">
                                <input name="two_factor_auth" type="checkbox" class="sr-only peer">
                                <div class="w-11 h-6 bg-[#DFEAF2] rounded-full peer  peer-checked:bg-[#16DBCC] peer-checked:before:translate-x-6 peer-checked:before:bg-white before:content-[''] before:absolute before:top-0.5 before:left-[2px] before:bg-white before:border-gray-300 before:border before:rounded-full before:h-5 before:w-5 before:transition-all"></div>
                            </label>
                            <span class="text-gray-700 text-left flex-grow">Enable two factor authrntification</span>
                        </div>
                    </div>

                    <div class="w-[50%]">
                        <div class="text-md font-semibold text-[#333B69] mb-4">Change Password</div>
                        <label
                            class="text-[#232323] font-normal"
                            for="curent_password">
                            Curent Password
                        </label><br>
                        <input
                            class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                            type="password"
                            name="curent_password"
                            id=""
                            placeholder="***********">
                    </div>

                    <div class="w-[50%]">
                        <label
                            class="text-[#232323] font-normal"
                            for="new_password">
                            New Password
                        </label><br>
                        <input
                            class="mt-1 p-3 w-full border border-[#DFEAF2] rounded-[15px] text-[#718EBF]"
                            type="password"
                            name="new_password"
                            id=""
                            placeholder="***********">
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
    </form>
</x-app-layout>