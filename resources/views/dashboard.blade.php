<x-app-layout>


    <div class="flex items-center  h-[90vh] bg-[#F7F7F8]">

        <div class="flex justify-center flex-col h-[100%] w-[60vw] p-40">
            <!-- heading -->
            <h1 class="text-[#7B6AB8] text-[40px] 2xl:text-[60px] font-bold">Connecting talents<br>with apportionities</h1>
            <p class="mt-6 md:text-[18px]">Our platform was designed to connect talented indivisuals live you
                with a vast array of job opening cross various indastries and sectors
            </p>
            <div>
            <!-- job type button-->
                <div class="flex mt-6 gap-10">
                    <div class="inline-flex text-lg font-semibold items-center">
                        <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                            data-ripple-dark="true">
                            <input id="html" name="type" type="radio"
                                class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-[#b497dd] text-[#b497dd] transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-[#b497dd] checked:before:bg-[#b497dd] hover:before:opacity-10" />
                            <div
                                class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-[#b497dd] opacity-0 transition-opacity peer-checked:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                </svg>
                            </div>
                        </label>
                        <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="html">
                            Full Time
                        </label>
                    </div>
                    <div class="inline-flex text-lg font-semibold items-center">
                        <label class="relative flex cursor-pointer items-center rounded-full p-3" for="react"
                            data-ripple-dark="true">
                            <input id="react" name="type" type="radio"
                                class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-[#b497dd] text-[#b497dd] transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-[#b497dd] before:opacity-0 before:transition-opacity checked:border-[#b497dd] checked:before:bg-[#b497dd] hover:before:opacity-10" />
                            <div
                                class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-[#b497dd] opacity-0 transition-opacity peer-checked:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                </svg>
                            </div>
                        </label>
                        <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="react">
                            Part Time
                        </label>
                    </div>
                </div>

            </div>
            <!-- search for job -->
            <div class="flex bg-white p-2 rounded-lg w-fit">
                <input
                    class="focus:outline-none border-none focus:ring-white placeholder:text-lg focus:border-none w-[30vw] rounded-md "
                    placeholder="Search for anything..." name="search" type="text">
                <button class="px-6 py-2 2xl:px-12 2xl:py-4 bg-[#7767b5] ml-auto text-[22px] text-white rounded-md">Search</button>
            </div>
        </div>
        <!-- end search bar -->

        <!-- image -->
        <div class="h-[100%] w-[40vw] flex items-center justify-center sm:w-[350vw]:hidden">
            <div class="w-[50%] h-[50%] relative">

                <div class="h-[100%] rounded-[40px] bg-gradient-to-b from-[#b497dd] to-[#7767b5] flex items-end">
                    <img class="h-[130%] z-10 w-auto object-fill"
                        src="{{ url('/assets/podpros-GEnCnYhA1J4-unsplash-removebg-preview.png') }}" alt="">
                </div>
                <span
                    class="px-[25px] z-0 py-[10px] text-[24px] bg-[#FFE8D0] text-[#b497dd] rounded-md absolute top-20 -left-12 ">Marketing</span>
                <span
                    class="px-[25px] z-0 py-[10px] text-[24px] bg-[#FFE8D0] text-[#b497dd] rounded-md absolute top-10 -right-12 ">Coding</span>
                <span
                    class="px-[25px] z-0 py-[10px] text-[24px] bg-[#FFE8D0] text-[#b497dd] rounded-md absolute bottom-4 -right-12 ">Design</span>
            </div>
        </div>
    </div>
    <!-- end image -->

    <!-- categories -->
    <h1 class="text-4xl pl-40 pb-10 bg-[#F7F7F8] font-semibold">categories that matches your skills</h1>

    <div class="flex gap-8 px-40 pb-20 bg-[#F7F7F8] ">
        <div
            class="group drop-shadow-xl cursor-pointer w-[220px]  h-[220px] flex flex-col bg-white hover:bg-[#7868B6] transition-all duration-300 rounded-xl">
            <div class="w-[100%] h-[150px] flex justify-end p-2">
                <svg class="w-14 group-hover:fill-white group-hover:-translate-x-8 transition-all duration-300 group-hover:w-36 absolute"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <g transform="rotate(90 128 128)">
                        <path
                            d="M236 100.68a11.93 11.93 0 0 0-3.51-8.48L163.8 23.51a12 12 0 0 0-17 0l-29.02 29.05l-58.86 22.07a12.06 12.06 0 0 0-7.63 9.26L28.05 223.34A4 4 0 0 0 32 228a4.89 4.89 0 0 0 .66-.05L172.1 204.7a12 12 0 0 0 9.27-7.62l22.07-58.86l29-29a11.92 11.92 0 0 0 3.56-8.54Zm-62.12 93.59a4 4 0 0 1-3.09 2.54L43.66 218l58.45-58.45a24 24 0 1 0-5.66-5.66L38 212.35L59.19 85.21a4 4 0 0 1 2.54-3.09L119 60.64L195.35 137ZM100 140a16 16 0 1 1 16 16a16 16 0 0 1-16-16Zm126.83-36.49L200 130.34L125.66 56l26.82-26.82a4 4 0 0 1 5.66 0l68.69 68.69a4 4 0 0 1 0 5.65Z" />
                    </g>
                </svg>
            </div>
            <h2 class="text-2xl ml-4 text-gray-700 group-hover:text-white transition-all duration-300">Design</h2>
            <p class="ml-4 text-gray-700 group-hover:text-white transition-all duration-300">new 10 jobs are available
            </p>
        </div>

        <div
            class="group drop-shadow-xl cursor-pointer w-[220px]  h-[220px] flex flex-col bg-white hover:bg-[#7868B6] transition-all duration-300 rounded-xl">
            <div class="w-[100%] h-[150px] flex justify-end p-2">
                <svg class="w-14 group-hover:fill-white group-hover:-translate-x-8 transition-all duration-300 group-hover:w-36  absolute"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <path
                        d="M66.56 91.07L22.25 128l44.31 36.93A4 4 0 0 1 64 172a3.94 3.94 0 0 1-2.56-.93l-48-40a4 4 0 0 1 0-6.14l48-40a4 4 0 0 1 5.12 6.14Zm176 33.86l-48-40a4 4 0 1 0-5.12 6.14L233.75 128l-44.31 36.93a4 4 0 1 0 5.12 6.14l48-40a4 4 0 0 0 0-6.14Zm-81.19-88.69a4 4 0 0 0-5.13 2.39l-64 176a4 4 0 0 0 2.39 5.13A4.12 4.12 0 0 0 96 220a4 4 0 0 0 3.76-2.63l64-176a4 4 0 0 0-2.39-5.13Z" />
                </svg>
            </div>
            <h2 class="text-2xl ml-4 text-gray-700 group-hover:text-white transition-all duration-300">Coding</h2>
            <p class="ml-4 text-gray-700 group-hover:text-white transition-all duration-300">new 10 jobs are available
            </p>
        </div>

        <div
            class="group drop-shadow-xl cursor-pointer w-[220px] h-[220px] flex flex-col bg-white hover:bg-[#7868B6] transition-all duration-300 rounded-xl">
            <div class="w-[100%] h-[150px] flex justify-end p-2">
                <svg class="w-12 group-hover:fill-white group-hover:-translate-x-8 transition-all duration-300 group-hover:w-32 absolute"
                    xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24">
                    <path d="M3 4h1v14l5.58-9.67l6.01 3.47l3.62-6.26l.86.5l-4.11 7.13L9.95 9.7L4 20h16v1H3V4Z" />
                </svg>
            </div>
            <h2 class="text-2xl ml-4 text-gray-700 group-hover:text-white transition-all duration-300">Marketing</h2>
            <p class="ml-4 text-gray-700 group-hover:text-white transition-all duration-300">new 10 jobs are available
            </p>
        </div>
        <div
            class="group drop-shadow-xl cursor-pointer w-[220px] h-[220px] flex flex-col bg-white hover:bg-[#7868B6] transition-all duration-300 rounded-xl">
            <div class="w-[100%] h-[150px] flex justify-end p-2">
                <svg class="w-12 stroke-black group-hover:stroke-white group-hover:-translate-x-8 transition-all duration-300 group-hover:w-32 absolute"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="none"
                        d="M13 16.5a11.003 11.003 0 0 0 4.041 3.93l1.459.82v.25h-13v-.25l1.459-.82A11.003 11.003 0 0 0 11 16.5m-9.5-3h21m0-11h-21v14h21v-14Z" />
                </svg>
            </div>
            <h2 class="text-2xl ml-4 text-gray-700 group-hover:text-white transition-all duration-300">Marketing</h2>
            <p class="ml-4 text-gray-700 group-hover:text-white transition-all duration-300">new 10 jobs are available
            </p>
        </div>

        <div
            class="group drop-shadow-xl cursor-pointer w-[220px] h-[220px] flex flex-col bg-white hover:bg-[#7868B6] transition-all duration-300 rounded-xl">
            <div class="w-[100%] h-[150px] flex justify-end p-2">
                <svg class="w-12 rotate-45 group-hover:fill-white group-hover:-translate-x-8 transition-all duration-300 group-hover:w-32 absolute"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                    <path
                        d="M204.24 116.24a6 6 0 0 1-8.48 0L134 54.49V216a6 6 0 0 1-12 0V54.49l-61.76 61.75a6 6 0 0 1-8.48-8.48l72-72a6 6 0 0 1 8.48 0l72 72a6 6 0 0 1 0 8.48Z" />
                </svg>
            </div>
            <h2 class="text-2xl ml-4 text-gray-700 group-hover:text-white transition-all duration-300">More</h2>
            <p class="ml-4 text-gray-700 group-hover:text-white transition-all duration-300">Fine more catigories</p>
        </div>
    </div>
    <!-- end categories -->

    <div style="background-image:url({{ url('assets/pexels-sora-shimazaki-5668859.jpg') }});"
        class="h-[100vh] w-[100%] bg-cover overflow-x-hidden flex justify-center items-center">
        <div class="bg-[#7767b5] z-0 w-[100%] h-[100vh] opacity-30 absolute"></div>
        <h1 class="text-white text-7xl z-10 font-semibold text-center leading-[100px]">"Discover Endless Possibilities
            <br> for Your Future Career"
        </h1>
    </div>



    <!-- offers section-->
    <div class="flex h-[100vh] pt-40 items-center justify-center cursor-pointer flex-col gap-4 bg-[#F7F7F8]">
        @foreach ($offers as $offer)
        <a href="{{url('offer/' . $offer->id)}}">
            <div 
                class="group w-[60vw] h-[150px] border flex items-center p-4 px-6 transition duration-300 hover:drop-shadow-lg drop-shadow-sm hover:border-[#7566B4] rounded-xl border-gray-300 bg-white">
                <img class="h-[94%] rounded-md"
                    src="{{ $offer->company->cp_logo_path == 0 ? url('assets/sample.jpg') : url('users_images/' . $offer->company->cp_logo_path) }}"
                    alt="">
                <div class="h-[100%] flex ml-4 justify-between flex-col">
                    <div class="flex justify-between w-[100%]">

                        <h3 class="text-lg mx-4 font-bold overflow-hidden whitespace-nowrap">
                            {{ $offer->job->job_title }} gergergergergre</h3>

                    </div>
                    <div class="flex">
                        <h3 class="text-md mb-6 mx-4">{{ $offer->company->cp_name}}</h3>
                    </div>
                    <div class="flex items-end">

                        <div class="px-3 py-1 flex rounded-md text-white">
                          
                            <svg class="group-hover:fill-[#9F94CB] fill-gray-400" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                            </svg>
                            <span class="text-gray-400 group-hover:text-[#9F94CB] ml-1">{{$offer->company->city}}</span>
                        </div>

                        <div class="px-3 py-1 flex rounded-md text-white">
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
                            <span class="text-gray-400 group-hover:text-[#9F94CB] ml-1">500$-800$</span>
                        </div>

                        <div class="px-3 py-1 flex rounded-md text-white">
                            <svg class="group-hover:fill-[#9F94CB] fill-gray-400" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 20a8 8 0 0 0 8-8a8 8 0 0 0-8-8a8 8 0 0 0-8 8a8 8 0 0 0 8 8m0-18a10 10 0 0 1 10 10a10 10 0 0 1-10 10C6.47 22 2 17.5 2 12A10 10 0 0 1 12 2m.5 5v5.25l4.5 2.67l-.75 1.23L11 13V7h1.5Z" />
                            </svg>
                            <span class="text-gray-400 group-hover:text-[#9F94CB] ml-1">Full time</span>
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
                        <button class="bg-[#9F94CB] text-white rounded-md max-h-[38px] px-3 py-1">Apply Now</button>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    </div>






    <!-- how to use the site -->
    <div class="flex items-center justify-center gap-20 h-[100vh] w-[100vw] bg-[#F7F7F8]">

        <div class="h-[55%] w-[20vw] rounded-xl bg-[#D5D1E7] flex flex-col items-center justify-center">
            <div class="flex w-[78%]">
                <h2 class="text-xl font-semibold text-gray-700">First,<br>
                    Sign up for job</h2>
            </div>
            <div class="bg-white h-[70%] w-[80%] rounded-xl mt-4 flex items-center justify-center">

                <div class="w-[100%] ml-[10%] ">
                    <span>Email</span>
                    <div class="p-2 mt-2 w-[90%] bg-gray-200 rounded-md mb-10">
                        mustafa@gmail.com
                    </div>
                    <span>Password</span>
                    <div class="p-2 mt-2 w-[90%] bg-gray-200 rounded-md mb-14">
                        *********
                    </div>

                    <div class="p-2 w-[90%] bg-[#9F94CB] text-white rounded-md  text-center">
                        Login
                    </div>
                </div>
            </div>
        </div>

        <div class="h-[55%] w-[20vw] rounded-xl flex flex-col items-center justify-center bg-[#beb8d4]">
            <div class="flex mb-16 w-[78%]">
                <h2 class="text-xl font-semibold text-gray-700">Second,<br>
                    Find a suitable job</h2>
            </div>
            <div class="bg-white h-[10%] w-[80%] rounded-xl mb-4 flex items-center justify-center">

                <div class="w-[100%] mx-[6%] flex justify-between text-gray-500 ">
                    Find a job
                    <svg class="fill-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" />
                    </svg>
                </div>


            </div>



            <div
                class="group w-[80%] h-[80px] mt-8 border flex items-center p-4 px-6 transition duration-300 hover:drop-shadow-lg drop-shadow-sm hover:border-[#7566B4] rounded-xl border-gray-300 bg-white">
                <img class="h-[96%]" src="{{ url('assets/ae1bf8bbff7e9b4af2479d140e85b0d2.png') }}" alt="">
                <div class="h-[100%] flex ml-4 justify-between flex-col">
                    <div class="flex">

                        <h3 class="text-sm mx-2 font-semibold">Mobiledeveloper</h3>

                    </div>
                    <div class="flex mx-2 text-sm items-end">
                        TEX
                    </div>

                </div>
                <div class="ml-auto h-[100%]">
                    <svg class="stroke-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 3H8a2 2 0 0 0-2 2v16l6-3l6 3V5a2 2 0 0 0-2-2Z" />
                    </svg>
                </div>

            </div>

            <div
                class="group w-[80%] h-[80px] mt-8 border flex items-center p-4 px-6 transition duration-300 hover:drop-shadow-lg drop-shadow-sm hover:border-[#7566B4] rounded-xl border-gray-300 bg-white">
                <img class="h-[96%]" src="{{ url('assets/ae1bf8bbff7e9b4af2479d140e85b0d2.png') }}" alt="">
                <div class="h-[100%] flex ml-4 justify-between flex-col">
                    <div class="flex">

                        <h3 class="text-sm mx-2 font-semibold">Mobiledeveloper</h3>

                    </div>
                    <div class="flex mx-2 text-sm items-end">
                        TEX
                    </div>

                </div>
                <div class="ml-auto h-[100%]">
                    <svg class="stroke-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 3H8a2 2 0 0 0-2 2v16l6-3l6 3V5a2 2 0 0 0-2-2Z" />
                    </svg>
                </div>

            </div>




        </div>

        <div class="h-[55%] w-[20vw] rounded-xl bg-[#aca3d1] flex flex-col items-center justify-center">
            <div class="flex w-[78%]">
                <h2 class="text-xl font-semibold text-gray-700">First,<br>
                    Sign up for job</h2>
            </div>
            <div class="bg-white h-[70%] w-[80%] rounded-xl mt-4 flex items-center justify-center">

                <div class="w-[100%] ml-[10%] ">
                    <span class="text-gray-500">Full Name</span>
                    <div class="p-2 mt-2 text-gray-500 w-[90%] bg-gray-200 rounded-md mb-10">
                        Mustafa Lutfy
                    </div>
                    <span class="text-gray-500">Description</span>
                    <div class="p-2 mt-2 text-gray-500 w-[90%] bg-gray-200 rounded-md mb-14">
                        This is why i'm applying...
                    </div>

                    <div class="p-2 w-[90%] bg-[#9F94CB] text-white rounded-md  text-center">
                        Apply
                    </div>
                </div>
            </div>
        </div>

    </x-app-layout>
