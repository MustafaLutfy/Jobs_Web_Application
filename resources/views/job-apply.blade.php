<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
      
      
    <form method="POST" action="{{ route('job.apply', ['id'=> $id]) }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="name" :value="__('name')" />
            <x-text-input  id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" value="{{Auth::user()->first_name . ' ' .Auth::user()->last_name}}"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="description" :value="__('description')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
     
        

            <x-primary-button class="ml-3">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
