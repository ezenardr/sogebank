<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sogebank</title>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white h-dvh flex ">
{{--Navigation--}}
<nav class="w-[250px] max-w-[250px] h-full flex flex-col gap-10 py-6 border-r">
    <div class="w-full flex items-center justify-center">

        <img src="{{'img/logo-wide.jpg'}}" width="183" class="" alt="Logo sogebank wide"/>
    </div>
    <ul class="w-full flex flex-col gap-6">
        <li>
            <a href="/"
               class=" text-[18px] py-2 font-medium hover:text-primary-3 border-l-[6px] border-transparent transition-all duration-300 flex items-center  {{Request::is('/') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                <x-antdesign-home class="w-[25px] mr-5 ml-8"/>
                Dashboard</a>
        </li>
        <li>
            <a href="/transactions"
               class=" text-[18px] py-2 font-medium hover:text-primary-3 transition-all border-l-[6px] border-transparent duration-300 flex items-center {{Request::is('transactions') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                <x-fas-money-bill-transfer class="w-[25px] mr-5 ml-8"/>
                Transactions</a>
        </li>
        <li>
            <a href="/account"
               class=" text-[18px] py-2 font-medium hover:text-primary-3 transition-all border-l-[6px] border-transparent duration-300 flex items-center {{Request::is('account') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                <x-ionicon-person class="w-[25px] mr-5 ml-8"/>
                Compte</a>
        </li>
        <li>
            <a href="/settings"
               class=" text-[18px] py-2 font-medium hover:text-primary-3 transition-all border-l-[6px] border-transparent duration-300 flex items-center {{Request::is('settings') ? "text-primary-3  border-primary-3" : "text-[#b1b1b1]"}}">
                <x-ionicon-settings-sharp class="w-[25px] mr-5 ml-8"/>
                Paramètres</a>
        </li>
    </ul>
</nav>
<div class=" bg-[#f6f7fb] h-full w-full">
    {{--Top bar--}}
    <div class="bg-white py-4 px-4 flex items-center justify-between">
        <p class="text-primary-2 font-semibold text-[28px]">Aperçu</p>
        <div class="flex gap-10">
            <div class="bg-[#F5F7FA] p-4 flex gap-3 rounded-full">
                <x-ionicon-search-outline class="w-[20px] text-[#718EBF]"/>
                <p class="text-[#718EBF]">Recherchez quelques chose...</p>
            </div>
            <a href="/settings"
                class="w-[60px] h-[60px] rounded-full bg-[#F5F7FA] flex items-center justify-center font-semibold text-[#718EBF]">
                <x-ionicon-settings-sharp class="w-[25px]"/>
            </a>
            <a href="/account"
                class="w-[60px] h-[60px] rounded-full bg-[#F5F7FA] flex items-center justify-center text-[28px] font-semibold text-primary-2">
                JD
            </a>
        </div>
    </div>

    {{--    children--}}
    <main class="p-4  w-full">
        {{ $slot }}
    </main>
</div>
</body>
</html>
