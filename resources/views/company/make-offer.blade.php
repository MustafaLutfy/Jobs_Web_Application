
    <!-- Session Status -->
    @extends('layouts.company-layout')
    @section('content')
    <x-auth-session-status class="mb-4" :status="session('status')" />
      
      <div class="px-[20%] h-full flex items-center justify-center">

      
    <form method="POST" action="{{ route('create.offer') }}" enctype="multipart/form-data">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="requirments" :value="__('requirments')" />
            <textarea id="requirments" class="block max-h-[200px] border-2 border-gray-300 rounded-lg mt-1 w-full" type="text" name="requirments" :value="old('requirments')" required autofocus autocomplete="requirments" ></textarea>
            <x-input-error :messages="$errors->get('requirments')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="responsibilities" :value="__('responsibilities')" />
            <x-text-input id="responsibilities" class="block mt-1 w-full" type="text" name="responsibilities" :value="old('responsibilities')" required autofocus autocomplete="responsibilities" />
            <x-input-error :messages="$errors->get('responsibilities')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="salary" :value="__('salary')" />
            <div class="flex gap-3">
                <x-text-input id="salary" class="block mt-1 w-full" type="text" name="minSalary" placeholder="Min in $" :value="old('salary')" required autofocus autocomplete="salary" />
                <x-text-input id="salary" class="block mt-1 w-full" type="text" name="maxSalary" placeholder="Max in $" :value="old('salary')" required autofocus autocomplete="salary" />    
            </div>
            <x-input-error :messages="$errors->get('salary')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="work_time" :value="__('work_time')" />
            <x-text-input id="work_time" class="block mt-1 w-full" type="text" name="work_time" :value="old('work_time')" required autofocus autocomplete="work_time" />
            <x-input-error :messages="$errors->get('work_time')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="address" :value="__('address')" />
            <x-text-input id="pac-input" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        



        
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}
       
        <select name="job_title" id="job_title">

            @foreach ($jobs as $job)
              <option value="{{$job->job_title}}">{{$job->job_title}}</option>
            @endforeach

        </select>
            <x-primary-button class="ml-3">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</div>

     



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG_umtIa7hqoi4nKE4o2kvqVfZZim2YLs&libraries=places&callback=initAutocomplete&language=ar&region=IQ
async defer"></script> 
@endsection