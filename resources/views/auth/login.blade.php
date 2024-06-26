<div class="bg-[#8B7FC0] w-[25vw] h-[80vh] rounded-3xl absolute z-0 rounded-bl-none top-0 left-0"></div>
<div class="bg-[#8B7FC0] w-[33vw] h-[70vh] absolute z-0 rounded-tl-3xl right-0 bottom-0"></div>

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex h-full items-center">
        <div class="h-full flex flex-col justify-center items-center h-[50vh] w-[80vw]">
            <h1 class="text-4xl font-bold text-[#7566B4]">
                "Empower Your Career<br>
                Apply Now and Transform<br>
                Your Future!"
            </h1>
            <p class="text-lg">
                Join thousands of people who’ve found their 
                dream job <br> using Hired.
            </p>
        </div>
    <form class="flex flex-col  justify-center px-[10%] w-full" method="POST" action="{{ route('user.login') }}">
        @csrf
        
        <a class="p-2 mx-24 bg-purple-400 mb-4 rounded-md text-white text-center" href="{{ route('company.dashboard') }}">Sign as company</a>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</div>
</x-guest-layout>
