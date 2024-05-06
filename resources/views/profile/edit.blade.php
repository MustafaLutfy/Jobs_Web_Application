<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot>
    <!-- back arrow -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-full">
                    <h1 class="text-gray-700 text-lg font-semibold">Searching for job</h1>
                    <p class="text-gray-500 text-sm mt-2">Check this Box to allow the companies in your field to see you profile and have more opportunities</p>
                    <form method="post" action="{{ route('is.searching') }}" class="space-y-6">
                        @csrf
                        @method('PUT')
                        <label for="is_searching" class="inline-flex items-center">
                            <input class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" onchange="this.form.submit()" name="is_searching" type="checkbox" value="1" {{$current}}>
                            <span class="ml-2 text-sm text-gray-600">{{ __("I'm Searching for job") }}</span>
                        </label>
                    </form>                    
                  
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">

                    @include('profile.partials.update-profile-information-form')
                   
                  
                    
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.add-skill-form')
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.add-education-form')
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.add-exp-form')
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.add-language-form')
                </div>
            </div>
            
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
          
        </div>
    </div>
</x-app-layout>
