@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- @if(Auth::user())
<x-app-layout>
@endif --}}

@extends('layouts.company-layout')
@section('content')
    
    <div class="w-full h-16 flex justify-center mt-16">
        <div class="w-[80%] bg-white h-full rounded-lg flex justify-between items-center p-3">
            <form action="{{route('offers.skill.filter')}}" method="post">
                @csrf
                <select name='skill_id' onchange="this.form.submit()" id="underline_select" class="block w-[25vw] py-2.5 px-0 text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option selected>Find Jobs by skill</option>
                    @foreach ($skills as $skill)
                        <option value="{{$skill->id}}">{{$skill->skill_title}}</option>
                    @endforeach
                </select>
            </form>
            <select id="underline_select" class="block w-[25vw] py-2.5 px-0 text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option selected>Order by</option>
                <option value="US">Work Time</option>
                <option value="CA">Newer First</option>
                <option value="FR">Most Applies First</option>
            </select>
            <button class="bg-[#9F94CB] text-white rounded-md px-2 py-2 ">Search</button>

        </div>
            <!--end search bar-->
    </div>
  <div class="w-full flex justify-center items-center p-10">
    <div class="w-[80vw] gap-10 grid md:grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 items-center">

        @foreach ($offers as $offer)
       
        
        <a href="{{url('offer/' . $offer->offer->id)}} " class="mx-auto">
            <div 
                class="group sm:w-[450px] w-[80vw] h-[250px] border flex items-start p-4 drop-shadow-md transition duration-300 hover:drop-shadow-lg  hover:border-[#7566B4] rounded-xl border-gray-300 bg-white">
                <div class="flex flex-col h-full w-[100%]">
                    <div class="flex items-center mb-4 mt-4">
                        <img class="h-[60px] w-[60px] rounded-full p-2 ml-4 border-8 border-[#E9E6F3] transition duration-300 group-hover:border-[#9F94CB]"
                        src="{{ $offer->offer->company->cp_logo_path == null ? url('assets/sample.jpg') : url('users_images/' . $offer->offer->company->cp_logo_path) }}"
                        alt="">
                        <div class="flex ml-auto">
                            <svg class="stroke-[#9F94CB] fill-white cursor-pointer transition-all duration-300 hover:fill-[#9F94CB]"
                                xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 3H8a2 2 0 0 0-2 2v16l6-3l6 3V5a2 2 0 0 0-2-2Z" />
                            </svg>
                                
                              
                                    <button class="bg-[#9F94CB] text-white rounded-md w-full px-2 " href="{{route('job.apply', $offer->offer->id)}}">Apply Now</button>
                        </div>
                    </div>
                    
                <div class="mt-auto mb-6">
                    <div class="flex ">
                        <div class="flex justify-between w-[100%]">
        
                            <h3 class="text-lg mx-4 font-bold overflow-hidden whitespace-nowrap">
                                {{ $offer->offer->job->job_title }}</h3>
        
                        </div>
                        
                    </div>
                    <div class="flex ">
                        <h3 class="text-md mx-4">{{ $offer->offer->company->cp_name}}</h3>
                    </div>
                    <div class="px-3 flex rounded-md text-white mt-2">
                        <svg class="group-hover:fill-[#9F94CB] fill-gray-400" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                        </svg>
                        <span class="text-gray-400 group-hover:text-[#9F94CB] ml-1">{{$offer->offer->company->city}}</span>
    
    
    
                        <div class="ml-4 flex rounded-md text-white">
                            <svg class="group-hover:fill-[#9F94CB] fill-gray-400" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <g>
                                    <path
                                        d="M11.25 7.847c-.936.256-1.5.975-1.5 1.653s.564 1.397 1.5 1.652V7.848Zm1.5 5.001v3.304c.936-.255 1.5-.974 1.5-1.652c0-.678-.564-1.397-1.5-1.652Z" />
                                    <path fill-rule="evenodd"
                                        d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10ZM12 5.25a.75.75 0 0 1 .75.75v.317c1.63.292 3 1.517 3 3.183a.75.75 0 0 1-1.5 0c0-.678-.564-1.397-1.5-1.653v3.47c1.63.292 3 1.517 3 3.183s-1.37 2.891-3 3.183V18a.75.75 0 0 1-1.5 0v-.317c-1.63-.292-3-1.517-3-3.183a.75.75 0 0 1 1.5 0c0 .678.564 1.397 1.5 1.652v-3.469c-1.63-.292-3-1.517-3-3.183s1.37-2.891 3-3.183V6a.75.75 0 0 1 .75-.75Z"
                                        clip-rule="evenodd" />
                                </g>
                            </svg>
                            <span class="text-gray-400 group-hover:text-[#9F94CB] ml-1">{{$offer->offer->salary}}</span>
                        </div>
                    </div>
        
                    
    
                </div>
                </div>
                    
                    
            </div>
        </a>
        
       
      
        @endforeach
    <div>
  </div>
  @endsection

  {{-- @if(Auth::user())
</x-app-layout>
  @endif --}}