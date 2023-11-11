<section>
    <header>
        <h2 class="text-lg font-medium text-[#8A7BC8]">
            {{ __('Location Information') }}
        </h2>

    
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('company.update.location') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="flex w-[90%]">
                <div>
                    <x-input-label class="text-[#8A7BC8]" for="country" :value="__('Country')" />
                    <x-text-input id="country" name="country" type="text" class="mt-1 block w-full" :value="old('country', $company->country)" autofocus autocomplete="country" />
                    <x-input-error class="mt-2" :messages="$errors->get('country')" />
                </div>
                <div class="ml-auto">
                    <x-input-label class="text-[#8A7BC8]" for="city" :value="__('City')" />
                    <x-text-input id="city" name="city" type="text" class="mt-1 block w-full" :value="old('city', $company->city)" autofocus autocomplete="city" />
                    <x-input-error class="mt-2" :messages="$errors->get('city')" />
                </div>
               
        </div>
        <div >
            <x-input-label class="text-[#8A7BC8]" for="address" :value="__('Street')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-[90%]" :value="old('address', $company->address)" autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div> 
        <div >
            <x-input-label class="text-[#8A7BC8]" for="zip_code" :value="__('ZIP code')" />
            <x-text-input id="zip_code" name="zip_code" type="text" class="mt-1 block w-[90%]" :value="old('zip_code', $company->zip_code)" autofocus autocomplete="zip_code" />
            <x-input-error class="mt-2" :messages="$errors->get('zip_code')" />
        </div>  
         


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

