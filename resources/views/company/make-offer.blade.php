
    <!-- Session Status -->
    @extends('layouts.company-layout')
    @section('content')
    <x-auth-session-status class="mb-4" :status="session('status')" />
      
      <div class="px-[20%] h-full flex items-center justify-center">

      
    <form method="POST" action="{{ route('create.offer') }}" enctype="multipart/form-data">
        @csrf
        <!-- requirments -->
        <div class="mb-4">
            <x-input-label for="requirments" :value="__('Requirments')" />
            <x-textarea-input id="requirments" class="block w-full max-h-[200px] border-2 border-gray-300 rounded-lg mt-1" type="text" name="requirments" :value="old('requirments')" required autofocus autocomplete="requirments" />
            <x-input-error :messages="$errors->get('requirments')" class="mt-2" />
        </div>
        <!-- responsibilities -->
        <div  class="mb-4">
            <x-input-label for="responsibilities" :value="__('Responsibilities')" />
            <x-textarea-input id="responsibilities" class="block w-full max-h-[200px] border-2 border-gray-300 rounded-lg mt-1" type="text" name="responsibilities" :value="old('responsibilities')" required autofocus autocomplete="responsibilities" />
            <x-input-error :messages="$errors->get('responsibilities')" class="mt-2" />
        </div>
        <!-- salary -->
        <div  class="mb-4">
            <x-input-label for="salary" :value="__('Salary')" />
            <div class="flex gap-3">
                <x-text-input id="salary" class="block mt-1 w-full" type="text" name="minSalary" placeholder="Min in $" :value="old('salary')" required autofocus autocomplete="salary" />
                <x-text-input id="salary" class="block mt-1 w-full" type="text" name="maxSalary" placeholder="Max in $" :value="old('salary')" required autofocus autocomplete="salary" />    
            </div>
            <!-- end salary -->
            <x-input-error :messages="$errors->get('salary')" class="mt-2" />
        </div>
        <!-- work time -->
        <div class="flex gap-3 mb-4">
                     <div class="">
                     <x-input-label for="work_time" :value="__('Work Time')" class="mb-1" />
                        <select name="work time" id="work_time" class="p-2 rounded-md text-gray-400 focus:border-[#8A7BC8] focus:ring-[#8A7BC8] focus:text-gray-700 border-gray-300 w-64">
                            <option value="">Choice A Work time</option>
                            <option value="full time">Full time</option>
                            <option value="part time">Part time</option>
                        </select>
                     </div>

                 <div>
                    <x-input-label for="job_title" :value="__('Job Title')" class="mb-1"/>
                    <select name="job_title" id="job_title" class="p-2 rounded-md border-gray-300 text-gray-400 focus:border-[#8A7BC8] focus:ring-[#8A7BC8] focus:text-gray-700 w-64">
                        <option value="">Choice A Job Title</option>
                         @foreach ($jobs as $job)
                        <option value="{{$job->job_title}}">{{$job->job_title}}</option>
                         @endforeach
                    </select>
            </div>
             
        </div>
        <!-- end worktime -->
        <!-- Address -->
        <div class="mb-2">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="pac-input" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        
       

        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}
       
        <!-- button -->
            <x-primary-button class="mt-4">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </div>
    </form>
</div>

     



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG_umtIa7hqoi4nKE4o2kvqVfZZim2YLs&libraries=places&callback=initAutocomplete&language=ar&region=IQ
async defer"></script> 
@endsection