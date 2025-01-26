<x-auth-layout>
    @section('title', "Login - Sogebanking")
    <div class="flex flex-col text-center items-center max-w-[450px] justify-center gap-1">
        <p class="font-medium text-[20px] text-[#333333]">Welcome back</p>
        <span>Login to easily save,recieve and send money.</span>
    </div>
    <form method="POST" action="/auth/register" class="w-full flex flex-col gap-4">
        @csrf
        
        <div class="flex flex-col gap-2">
            <label for="email" class="text-[#333333] text-[14px]">Email</label>
            <input type="email" name="email" id="email" required
                   class="border rounded-[8px] py-1 px-3 outline-none ">
            @error('email')
            <p class="text-[12px] text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label for="password" class="text-[#333333] text-[14px]">Mot de passe</label>
            <input type="password" name="password" id="password" required
                   class="border rounded-[8px] py-1 px-3 outline-none ">
            @error('password')
            <p class="text-[12px] text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div>
            <input type="checkbox" name="Remember" id="Remember" required
            class="border rounded-[8px] py-1 px-3 outline-none ">
            <label for="Remember" class="text-[#333333] text-[14px]">Remember me</label>    
        </div>
        <div class="w-full flex flex-col gap-2  items-center mt-6">
            <button
                class="w-full text-white text-[14px] bg-gradient-to-r from-[#2754C8] to-[#110F72] py-2 hover:from-[#110F72] hover:to-[#110F72] transition-all rounded-[8px] "
                type="submit" name="submit">Login
            </button>
            <p class="text-[14px] text-center text-[#333333]">Creer un compte si vous en avez pas deja ? <a href="/auth/register" class="text-[#2754C8]">Inscrivez-vous.</a></p>
            <a href="/auth/forgot-password" class="text-[#2754C8] text-[14px]">Mot de passe oublié ?</a>
            <p class="text-[14px] text-center text-[#333333] max-w-[380px]">En cliquant sur « S'inscrire », vous acceptez les Conditions d'utilisation et la Politique de confidentialité.</p>

            

        </div>
{{--        @if($errors -> any())--}}
{{--            <ul class="px-4 py-2 bg-red-100">--}}
{{--                @foreach($errors -> all() as $error)--}}
{{--                    <li class="my-2 test-red-500">{{$error}}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        @endif--}}
    </form>


</x-auth-layout>
