@extends('layouts.company-layout')
@section('content')
<section class="p-10">
    <div class="bg-white h-auto px-10 rounded-xl shadow-md">
    <div class="flex items-center h-auto py-10 w-full">
        <div class="flex items-center justify-center w-[15vw] min-h-[15vw] mr-10">
            <img class="min-h-[15vw] min-w-[15vw] rounded-xl border-2 border-gray-200" src="{{asset('assets/6.png')}}" alt="">
        </div>
        <div class="flex flex-col h-auto w-full border-b-2 border-gray-200">
            <div class="flex">
                <div class="flex items-center gap-8">
                    <h1 class="text-2xl font-semibold text-gray-600">{{$company->cp_name}}</h1>
                    <div class="flex gap-1">
                        <svg class="mr-2 fill-[#7868B6]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path d="M256 32C167.67 32 96 96.51 96 176c0 128 160 304 160 304s160-176 160-304c0-79.49-71.67-144-160-144Zm0 224a64 64 0 1 1 64-64a64.07 64.07 0 0 1-64 64Z"/></svg>
                        <span class="text-md text-[#7868B6]">{{$company->city}}</span>
                    </div>

                </div>
            </div>
            <h3 class="text-[#7868B6] font-semibold mt-2">Tecnology Company</h3>

                <div>
                    <h3 class="text-gray-500 text-sm font-semibold mt-8">Employees Number</h3>
                    <h3 class="text-gray-500 text-xl font-bold mt-1">{{$company->employees_number}}</h3>
                </div>
                <a class="group flex items-center justify-center w-36 p-2 my-6 rounded border-2 border-gray-200 hover:border-[#7868B6] transtion duration-300" href="">
                    <svg class="mr-2 fill-gray-400 group-hover:fill-[#7868B6] transtion duration-300" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><g transform="translate(24 0) scale(-1 1)"><path d="M22 4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h14l4 4V4Z"/></g></svg>
                    <span class="text-sm text-gray-400 group-hover:text-[#7868B6] transtion duration-300">Send Message</span>
                </a>

            <div class="flex text-gray-500 gap-6 mt-auto">
                <a id="infoTab" onclick="openInfo()" class="flex gap-2 py-2 border-b-2 border-[#7868B6] items-center cursor-pointer translate-y-[2px]">
                    <svg class="w-5 h-5 stroke-[#7868B6] " id="infoIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><g transform="translate(16 0) scale(-1 1)"><g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><circle cx="8" cy="8" r="6.25"/><path d="M8 5.25v0m0 6v-3.5"/></g></g></svg>
                    <p id="infoText" class="font-semibold text-[#7868B6]">Information</p>
                </a>
                <a id="aboutTab" onclick="openAbout()" class="flex border-[#7868B6] cursor-pointer gap-2 items-center translate-y-[2px]">
                    <svg id="aboutIcon" class=" w-5 h-5 stroke-gray-500" xmlns="http://www.w3.org/2000/svg" stroke-width="0.5" viewBox="0 0 24 24"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18M9 8h1m-1 4h1m-1 4h1m4-8h1m-1 4h1m-1 4h1M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16"/></svg>
                    <p id="aboutText" class=" font-semibold">About Us</p>
                </a>
            </div>
            
        </div>

        
    </div>
    <div class="flex h-auto pb-10 ">
        <div class="min-w-[15vw] mt-10">
            <div>
                <h1 class="text-[#7868B6] font-semibold ">Company Founder</h1>
                <h1 class="text-gray-500 mt-1">Mustafa Lutfy Abdulwahab</h1>
            </div>
            <div class="mt-4">
                <h1 class="text-[#7868B6] font-semibold ">Company CEO</h1>
                <h1 class="text-gray-500 mt-1">Zubaiduh Abbas fadel</h1>
            </div>
            <div class="mt-4">
                <h1 class="text-[#7868B6] font-semibold ">Contacts Manager</h1>
                <h1 class="text-gray-500 mt-1">Full username</h1>
            </div>

            
          
        </div>
        <div class="w-full font-semibold text-gray-500 p-10">
            <div id="about-content" class="hidden">
                <h1 class="text-[#7868B6] font-semibold text-xl mb-6">About Our Company</h1>
                <p class="w-[60%]">
                    {{$company->description}}
                </p>
            </div>
            
            <div id="info-content" class="">

                
                <h1 class="font-semibold text-sm text-gray-400 mb-4">Contact Information</h1>
                <div class="flex mb-10">
                    <ul class="w-[20%]">
                        <li class="flex">
                            <p>Phone : </p>
                        </li>
                        <li class="flex mt-4">
                            <p>Email : </p>
                        </li>
                        <li class="flex mt-4">
                            <p>Address : </p>
                        </li>
                    </ul>
                    <ul class="w-[50%]">
                        <li class="flex">
                            <p class="text-[#7868B6]">{{$company->cp_phone}}</p>
                        </li>
                        <li class="flex mt-4">
                            <p class="text-[#7868B6]">{{$company->cp_email}}</p>
                        </li>
                        <li class="flex mt-4">
                            <p>{{$company->country}}/{{$company->city}}/{{$company->Address}}</p>
                        </li>
                    </ul>
                </div>


                <h1 class="font-semibold text-sm text-gray-400 mb-4">Basic Information</h1>
                <div class="flex ">
                    <ul class="w-[20%] ">
                        <li class="flex">
                            <p>Establising Date : </p>
                        </li>
                        <li class="flex mt-4">
                            <p>Website : </p>
                        </li>
                    </ul>
                    <ul class="w-[20%] ">
                        <li class="flex">
                            <p>{{$company->establishing_date}}</p>
                        </li>
                        <li class="flex mt-4">
                            <p class="text-[#7868B6]">{{$company->website}}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script src="{{asset('js/cpProfileTabs.js')}}"></script>
@endsection