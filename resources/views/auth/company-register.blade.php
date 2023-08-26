

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
      
            
        <form class="flex flex-col w-full h-full justify-between px-20" method="POST" action="{{ route('company.register') }}" enctype="multipart/form-data">
            @csrf
            <div class="flex items-end justify-between h-[10%]">
                <div id='0' class="bg-gray-200 bg-gray-400 w-[16%] h-2 rounded step-ind"></div>
                <div id='1' class="bg-gray-200 w-[16%] h-2 rounded step-ind"></div>
                <div id='2' class="bg-gray-200 w-[16%] h-2 rounded step-ind"></div>
                <div id='3' class="bg-gray-200 w-[16%] h-2 rounded step-ind"></div>
                <div id='4' class="bg-gray-200 w-[16%] h-2 rounded step-ind"></div>
            </div>

            <!-- Name -->
            
                            <div id="step-one" class="reg-step current">

                                
                                <div class="mt-4">
                                    <x-input-label for="cp_name" :value="__('cp_name')" />
                                    <x-text-input id="cp_name" class="block mt-1 w-full" type="text" name="cp_name" :value="old('cp_name')" required autofocus autocomplete="cp_name" />
                                    <x-input-error :messages="$errors->get('cp_name')" class="mt-2" />
                                </div>


                                <div class="mt-4">
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
                                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="zip_code" :value="__('zip_code')" />
                                    <x-text-input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code" :value="old('zip_code')" required autofocus autocomplete="zip_code" />
                                    <x-input-error :messages="$errors->get('exp')" class="mt-2" />
                                </div>
                                
                            </div>
                           
                            <div id="step-three"  class="hidden reg-step ">
                                <h3 class="text-center font-semibold text-gray-700 text-lg mb-8">Add Your Contact Ways</h3>
                                <div class="mb-4">
                                    <x-input-label for="contact_email" :value="__('Contact Email')" />
                                    <x-text-input id="contact_email" class="block mt-1 w-full" type="text" name="contact_email" :value="old('contact_email')" required autofocus autocomplete="contact_email" />
                                    <x-input-error :messages="$errors->get('contact_email')" class="mt-2" />
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
                            </div>
                            <div id="step-four"  class="hidden reg-step ">
                                <div class="mb-4">
                                    <x-input-label for="discription" :value="__('About You')" />
                                    <x-textarea-input id="discription" class="block mt-1 max-h-[350px] min-h-[150px] w-full" type="text" name="discription" :value="old('discription')" required autofocus autocomplete="discription"> </x-textarea-input>
                                    <x-input-error :messages="$errors->get('discription')" class="mt-2" />
                                </div>      
                            
                            </div>

                            <div id="step-five"  class="hidden reg-step ">
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

                    <div class="flex justify-end items-center mb-10 mt-2">
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

            
    
    <script src="{{asset('js/changeStepCompany.js')}}"></script>
</x-guest-layout>
