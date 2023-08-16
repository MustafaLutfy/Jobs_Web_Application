<div class="bg-[#8B7FC0] w-[25vw] h-[80vh] rounded-3xl absolute z-0 rounded-bl-none top-0 left-0"></div>
<div class="bg-[#8B7FC0] w-[33vw] h-[70vh] absolute z-0 rounded-tl-3xl right-0 bottom-0"></div>

<x-guest-layout>
    <div class="flex h-full items-center">
        <div class="bg-white h-full flex flex-col justify-center items-center h-[50vh] w-[80vw]">
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
        <form class="flex flex-col w-full justify-center px-20" method="POST" action="{{ route('user.register') }}" enctype="multipart/form-data">
            @csrf


            <!-- Name -->
            <div>
                <x-input-label for="first_name" :value="__('first_name')" />
                <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"
                    required autofocus autocomplete="first_name" />
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>


            <div>
                <x-input-label for="last_name" :value="__('last_name')" />
                <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                    required autofocus autocomplete="last_name" />
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>


            <!-- Email Address -->
            {{-- <div>
            <x-input-label for="phone" :value="__('phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div> --}}

            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            {{-- 
        <div>
            <x-input-label for="country" :value="__('country')" />
            <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required autofocus autocomplete="country" />
            <x-input-error :messages="$errors->get('country')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="city" :value="__('city')" />
            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus autocomplete="city" />
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="exp" :value="__('exp')" />
            <x-text-input id="exp" class="block mt-1 w-full" type="text" name="city" :value="old('exp')" required autofocus autocomplete="exp" />
            <x-input-error :messages="$errors->get('exp')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="birth_date" :value="__('birth_date')" />
            <x-text-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date')" required autofocus autocomplete="birth_date" />
            <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
        </div>
        --}}
            {{-- <div>
            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>  --}}

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('user.login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
