<section>
    <header>
        <h2 class="text-lg font-medium text-[#8A7BC8]">
            {{ __('Company Information') }}
        </h2>

    
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('company.update.details') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="flex items-center gap-10">
                    <!-- image -->
                    <div class="bg-[#8A7BC8] rounded-full w-[60px] h-[60px] p-1 mr-0">
                        <img class="rounded-full" src="{{asset('users_images/'.Auth::guard('company')->user()->cp_logo_path)}}" alt="">
                    </div>

                    <input
                    type="file"
                    name="image"
                    class="block text-sm 
                        file:mr-4 file:py-2 file:px-4 file:rounded-md
                        file:border-0 file:text-sm file:font-semibold
                        file:text-white file:bg-[#8A7BC8] file:cursor-pointer"
                  />
                <button class="text-[#8A7BC8] rounded-lg w-[15%] h-[38px] border-[2px] border-[#8A7BC8]">Delete</button>
        </div>
        <div class="flex w-[90%]">
                <div>
                    <x-input-label class="text-[#8A7BC8]" for="cp_name" :value="__('Company Name')" />
                    <x-text-input id="cp_name" name="cp_name" type="text" class="mt-1 block w-full" :value="old('cp_name', $company->cp_name)" autofocus autocomplete="cp_name" />
                    <x-input-error class="mt-2" :messages="$errors->get('cp_name')" />
                </div>
                <div class="ml-4 w-[50%]">
                    <x-input-label  for="employees_number" :value="__('Employees Number')" />
                    <select class="border-gray-300 p-2 focus:border-[#8A7BC8] focus:ring-[#8A7BC8] rounded-md shadow-sm w-full" name="employees_number" >
                        <option value="default">{{Auth::guard('company')->user()->employees_number}}</option>
                        <option value="1-5">1-5</option>
                        <option value="5-20">5-20</option>
                        <option value="20-100">20-100</option>
                        <option value="100-1000">100-1000</option>
                        <option value="1000+">1000+</option>
                    </select>
                    <x-input-error :messages="$errors->get('employees_number')" class="mt-2" />
                </div>
        </div>
        <div >
            <x-input-label class="text-[#8A7BC8]" for="cp_phone" :value="__('Phone Number')" />
            <x-text-input id="cp_phone" name="cp_phone" type="text" class="mt-1 block w-[90%]" :value="old('cp_phone', $company->cp_phone)" autofocus autocomplete="cp_phone" />
            <x-input-error class="mt-2" :messages="$errors->get('cp_phone')" />
        </div>  
        <div >
            <x-input-label class="text-[#8A7BC8]" for="cp_email" :value="__('Email')" />
            <x-text-input id="cp_email" name="cp_email" type="text" class="mt-1 block w-[90%]" :value="old('cp_email', $company->cp_email)" autofocus autocomplete="cp_email" />
            <x-input-error class="mt-2" :messages="$errors->get('cp_email')" />
        </div>  
        <div >
            <x-input-label class="text-[#8A7BC8]" for="website" :value="__('Website')" />
            <x-text-input id="website" name="website" type="text" class="mt-1 block w-[90%]" :value="old('website', $company->website)" autofocus autocomplete="website" />
            <x-input-error class="mt-2" :messages="$errors->get('website')" />
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

