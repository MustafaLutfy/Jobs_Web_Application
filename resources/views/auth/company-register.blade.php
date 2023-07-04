<x-guest-layout>
    <form method="POST" action="{{ route('company.register') }}" enctype="multipart/form-data">
        @csrf

    
        <!-- Name -->
        <div>
            <x-input-label for="cp_name" :value="__('cp_name')" />
            <x-text-input id="cp_name" class="block mt-1 w-full" type="text" name="cp_name" :value="old('cp_name')" required autofocus autocomplete="cp_name" />
            <x-input-error :messages="$errors->get('cp_name')" class="mt-2" />
        </div>
       
        

        <!-- Email Address -->
        <div>
            <x-input-label for="cp_phone" :value="__('cp_phone')" />
            <x-text-input id="cp_phone" class="block mt-1 w-full" type="text" name="cp_phone" :value="old('cp_phone')" required autofocus autocomplete="cp_phone" />
            <x-input-error :messages="$errors->get('cp_phone')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="cp_email" :value="__('cp_email')" />
            <x-text-input id="cp_email" class="block mt-1 w-full" type="text" name="cp_email" :value="old('cp_email')" required autocomplete="cp_email" />
            <x-input-error :messages="$errors->get('cp_email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

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
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('exp')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="zip_code" :value="__('zip_code')" />
            <x-text-input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code" :value="old('zip_code')" required autofocus autocomplete="zip_code" />
            <x-input-error :messages="$errors->get('exp')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="description" :value="__('description')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="website" :value="__('website')" />
            <x-text-input id="website" class="block mt-1 w-full" type="text" name="website" :value="old('website')" required autofocus autocomplete="website" />
            <x-input-error :messages="$errors->get('website')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="establishing_date" :value="__('establishing_date')" />
            <x-text-input id="establishing_date" class="block mt-1 w-full" type="date" name="establishing_date" :value="old('establishing_date')" required autofocus autocomplete="establishing_date" />
            <x-input-error :messages="$errors->get('establishing_date')" class="mt-2" />
        </div>
       
        <div>
            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
       
       
        {{-- <div class="flex items-center justify-end mt-4">
            {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a> --}}

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div> 
    </form>
</x-guest-layout>
