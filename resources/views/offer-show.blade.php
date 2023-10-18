        <x-app-layout>
            <div class="bg-[#F7F7F8]  h-[100vh] w-[100%] flex justify-center py-20">
                <div class="w-[60%] bg-white rounded-xl border p-10">
                    <div class="group w-[100%] h-[150px] flex items-center ">
                        <img class="h-[94%] border-2 rounded-md"
                            src="{{ $offer->company->cp_logo_path == 0 ? url('assets/sample.jpg') : url('users_images/' . $offer->company->cp_logo_path) }}"
                            alt="">
                        <div class="h-[100%] flex ml-4 justify-between flex-col">
                            <div class="flex justify-between w-[100%]">
        
                                <h3 class="text-lg mx-4 font-bold overflow-hidden whitespace-nowrap">
                                    {{ $offer->job->job_title }}</h3>
        
                            </div>
                            <div class="flex">
                                <h3 class="text-md mb-6 mx-4">{{ $offer->company->cp_name }}</h3>
                            </div>
                            <div class="flex items-end">
        
        
                                <div class="px-3 py-1 flex rounded-md text-white">
                                    <svg class="fill-[#9F94CB]" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24">
                                        <g>
                                            <path
                                                d="M11.25 7.847c-.936.256-1.5.975-1.5 1.653s.564 1.397 1.5 1.652V7.848Zm1.5 5.001v3.304c.936-.255 1.5-.974 1.5-1.652c0-.678-.564-1.397-1.5-1.652Z" />
                                            <path fill-rule="evenodd"
                                                d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10ZM12 5.25a.75.75 0 0 1 .75.75v.317c1.63.292 3 1.517 3 3.183a.75.75 0 0 1-1.5 0c0-.678-.564-1.397-1.5-1.653v3.47c1.63.292 3 1.517 3 3.183s-1.37 2.891-3 3.183V18a.75.75 0 0 1-1.5 0v-.317c-1.63-.292-3-1.517-3-3.183a.75.75 0 0 1 1.5 0c0 .678.564 1.397 1.5 1.652v-3.469c-1.63-.292-3-1.517-3-3.183s1.37-2.891 3-3.183V6a.75.75 0 0 1 .75-.75Z"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                    <span class="text-[#9F94CB] ml-1">500$-800$</span>
                                </div>
        
                                <div class="px-3 py-1 flex rounded-md text-white">
                                    <svg class="fill-[#9F94CB]" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24">
                                        <path
                                            d="M12 20a8 8 0 0 0 8-8a8 8 0 0 0-8-8a8 8 0 0 0-8 8a8 8 0 0 0 8 8m0-18a10 10 0 0 1 10 10a10 10 0 0 1-10 10C6.47 22 2 17.5 2 12A10 10 0 0 1 12 2m.5 5v5.25l4.5 2.67l-.75 1.23L11 13V7h1.5Z" />
                                    </svg>
                                    <span class="text-[#9F94CB] ml-1">Full time</span>
                                </div>
                                
                                <div class="px-3 py-1 flex rounded-md text-white">
        
                                    <svg class="fill-[#9F94CB]" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24">
                                        <path
                                            d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                                    </svg>
                                    <span class="text-[#9F94CB] ml-1">{{$offer->company->country}}/{{$offer->company->city}}/{{$offer->company->Address}}</span>
                                </div>
                            </div>
        
                        </div>
        
                        <div class="ml-auto h-[100%]">
                            <div class="flex">
        
                                <svg class="stroke-[#9F94CB] fill-white cursor-pointer transition-all duration-300 hover:fill-[#9F94CB]"
                                    xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 3H8a2 2 0 0 0-2 2v16l6-3l6 3V5a2 2 0 0 0-2-2Z" />
                                </svg>
                                <a href="{{route('job.apply', $offer->id)}}" class="bg-[#9F94CB] text-white text-center rounded-md w-full px-2 py-2 ">Apply Now</a>
        
                            </div>
                        </div>
                    </div>
        
        
                    <div class="mt-16">
                        <h2 class="text-xl text-gray-600 font-semibold">Requirments</h2>
                        <p class="text-md text-gray-600 w-[60%] leading-[30px] mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae fugit ipsa ut impedit iusto, exercitationem doloremque asperiores, quaerat beatae dolorem magnam officiis odit debitis cupiditate praesentium. Inventore minima deserunt vitae!</p>
                    </div>
                    
                    <div class="mt-16">
                        <h2 class="text-xl text-gray-600 font-semibold">Responsibilities</h2>
                        <p class="text-md text-gray-600 w-[60%] leading-[30px] mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae fugit ipsa ut impedit iusto, exercitationem doloremque asperiores, quaerat beatae dolorem magnam officiis odit debitis cupiditate praesentium. Inventore minima deserunt vitae!</p>
                    </div>
        
                </div>
            </div>
        </x-app-layout>


 
