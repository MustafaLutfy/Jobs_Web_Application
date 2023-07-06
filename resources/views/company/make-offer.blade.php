<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
      
      
    <form method="POST" action="{{ route('create.offer') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="requirments" :value="__('requirments')" />
            <x-text-input id="requirments" class="block mt-1 w-full" type="text" name="requirments" :value="old('requirments')" required autofocus autocomplete="requirments" />
            <x-input-error :messages="$errors->get('requirments')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="responsibilities" :value="__('responsibilities')" />
            <x-text-input id="responsibilities" class="block mt-1 w-full" type="text" name="responsibilities" :value="old('responsibilities')" required autofocus autocomplete="responsibilities" />
            <x-input-error :messages="$errors->get('responsibilities')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="salary" :value="__('salary')" />
            <x-text-input id="salary" class="block mt-1 w-full" type="text" name="salary" :value="old('salary')" required autofocus autocomplete="salary" />
            <x-input-error :messages="$errors->get('salary')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="work_time" :value="__('work_time')" />
            <x-text-input id="work_time" class="block mt-1 w-full" type="text" name="work_time" :value="old('work_time')" required autofocus autocomplete="work_time" />
            <x-input-error :messages="$errors->get('work_time')" class="mt-2" />
        </div>

        
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <select name="job_title" id="">
    
            <option value="Programmer">Programmer</option>
            <option value="Designer">Designer</option>
            
        </select>
            
            <x-primary-button class="ml-3">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
