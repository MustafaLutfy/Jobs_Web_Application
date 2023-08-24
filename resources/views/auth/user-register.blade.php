<div class="bg-[#8B7FC0] w-[25vw] h-[80vh] rounded-3xl absolute z-0 rounded-bl-none top-0 left-0"></div>
<div class="bg-[#8B7FC0] w-[33vw] h-[70vh] absolute z-0 rounded-tl-3xl right-0 bottom-0"></div>

<x-guest-layout>

    <div class="flex h-full items-center">
        
        <div class="bg-white h-full flex flex-col justify-center items-center h-[50vh] w-[80vw]">
            <h1 id="side-text" class="text-4xl font-bold text-[#7566B4]">
                "Empower Your Career<br>
                Apply Now and Transform<br>
                Your Future!"
            </h1>
            <p class="text-lg">
                Join thousands of people who’ve found their 
                dream job <br> using Hired.
            </p>
        </div>
      
            
        <form class="flex flex-col w-full h-full justify-between px-20" method="POST" action="{{ route('user.register') }}" enctype="multipart/form-data">
            @csrf
            <div>

            </div>

            <!-- Name -->
                            <div id="step-one" class="reg-step current">

                                
                                <div class="mt-4">
                                    <x-input-label for="first_name" :value="__('first_name')" />
                                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"
                                        required autofocus autocomplete="first_name" />
                                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                </div>


                                <div class="mt-4">
                                    <x-input-label for="last_name" :value="__('last_name')" />
                                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                                        required autofocus autocomplete="last_name" />
                                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                </div>

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
                            </div>
                            <div id="step-two"  class="hidden reg-step ">
                                <div class="mb-4">
                                    <x-input-label for="country" :value="__('country')" />
                                    <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required autofocus autocomplete="country" />
                                    <x-input-error :messages="$errors->get('country')" class="mt-2" />
                                </div>
                                <div class="mb-4">
                                    <x-input-label for="city" :value="__('city')" />
                                    <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus autocomplete="city" />
                                    <x-input-error :messages="$errors->get('city')" class="mt-2" />
                                </div>      
                                <div class="mb-4">
                                    <x-input-label for="birth_date" :value="__('birth_date')" />
                                    <x-text-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date')" required autofocus autocomplete="birth_date" />
                                    <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
                                </div>
                            </div>
                            <div id="step-three"  class="hidden reg-step ">
                                <div class="flex items-center gap-10">
                                    <!-- image -->
                                    <div class=" border-dashed border-2 flex items-center justify-center border-gray-300 rounded-full w-[90px] h-[90px] p-1 mr-0">
                                        <svg class="stroke-gray-300 fill-gray-300" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48"><g><path  d="M44 24C44 22.8954 43.1046 22 42 22C40.8954 22 40 22.8954 40 24H44ZM24 8C25.1046 8 26 7.10457 26 6C26 4.89543 25.1046 4 24 4V8ZM39 40H9V44H39V40ZM8 39V9H4V39H8ZM40 24V39H44V24H40ZM9 8H24V4H9V8ZM9 40C8.44772 40 8 39.5523 8 39H4C4 41.7614 6.23857 44 9 44V40ZM39 44C41.7614 44 44 41.7614 44 39H40C40 39.5523 39.5523 40 39 40V44ZM8 9C8 8.44772 8.44771 8 9 8V4C6.23858 4 4 6.23857 4 9H8Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M6 35L16.6931 25.198C17.4389 24.5143 18.5779 24.4953 19.3461 25.1538L32 36"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M28 31L32.7735 26.2265C33.4772 25.5228 34.5914 25.4436 35.3877 26.0408L42 31"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M30 12L42 12"/><path  stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M36 6V18"/></g></svg>
                                    </div>
                
                                    <input
                                    type="file"
                                    name="image"
                                    class=" text-sm text-slate-500
                                    file:mr-4 file:py-2 file:px-4 
                                    file:border-0 file:text-sm file:font-semibold
                                    file:bg-pink-50 file:text-pink-700
                                    hover:file:bg-pink-100"
                                  />
                        </div>
                    </div>

                    <div class="flex justify-end items-center mb-10">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('user.login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        <button type="button" id="prev-btn" class="ml-4 hidden bg-[#7566B4] px-4 py-2 text-white rounded">
                            Previous
                        <button>
                        <button type="button" id="next-btn" class="ml-4 bg-[#7566B4] px-4 py-2 text-white rounded">
                            Next
                        <button>
                        <button type="submit" id="submit-btn" class="ml-4 bg-[#7566B4] px-4 py-2 text-white rounded hidden">
                            Register
                        <button>
                       
                    </div>
                 </div>
                </form>

               
            {{-- <div>
            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>  --}}

            
    
    <script src="{{asset('js/changeStep.js')}}"></script>
</x-guest-layout>
