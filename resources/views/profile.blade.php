@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Oxanium:wght@200;400;600;700;800&display=swap');

    .skills {
    columns: 3;
    -webkit-columns: 3;
    -moz-columns: 3;
    }
</style> 
<!-- edit profile -->
            <a href="{{url('/profile/edit')}}" class="text-white bg-[#B497DD] rounded-full p-6 absolute -bottom-14 right-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m14.363 5.652l1.48-1.48a2 2 0 0 1 2.829 0l1.414 1.414a2 2 0 0 1 0 2.828l-1.48 1.48m-4.243-4.242l-9.616 9.615a2 2 0 0 0-.578 1.238l-.242 2.74a1 1 0 0 0 1.084 1.085l2.74-.242a2 2 0 0 0 1.24-.578l9.615-9.616m-4.243-4.242l4.243 4.242"/></svg>
            </a>
<x-app-layout>

    <div class="h-full w-full p-4 flex justify-center items-center">

        <div class="w-[40vw] h-full drop-shadow-2xl grid grid-cols-3">
            <div class="bg-gray-800 col-span-1 drop-shadow-2xl">
                <div class="h-[30%] flex justify-center items-center p-8">
                    <img class="rounded-full object-contain border-4 bg-white border-[#B497DD] w-[80%]" src="{{asset('users_images/Screenshot 2024-02-13 063559.png')}}" alt="">
                </div>
                <div class="h-[30%] pl-6">
                    <h3 class="text-white text-lg mb-1">EDUCATION</h3>
                    <div class="h-[2px] w-full bg-white"></div>
                    <ul class="">
                        @foreach ($userEdus as $userEdu)
                            <li class="text-white mt-3 text-sm">
                                <div class="flex items-center mb-1">
                                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 15 15"><path fill="currentColor" d="M7.5 1L0 4.5l2 .9v1.7c-.6.2-1 .8-1 1.4s.4 1.2 1 1.4v.1l-.9 2.1C.8 13 1 14 2.5 14s1.7-1 1.4-1.9L3 10c.6-.3 1-.8 1-1.5s-.4-1.2-1-1.4V5.9L7.5 8L15 4.5L7.5 1zm4.4 6.5l-4.5 2L5 8.4v.1c0 .7-.3 1.3-.8 1.8l.6 1.4v.1c.1.4.2.8.1 1.2c.7.3 1.5.5 2.5.5c3.3 0 4.5-2 4.5-3v-3z"/></svg>
                                    <p>{{$userEdu->institution_name}}</p>
                                </div>
                                <div class="flex items-center">
                                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M115.063 21.97v9.343c0 101.953 38.158 189.648 96.343 222.093v6.094c-58.186 32.445-96.344 120.14-96.344 222.094v9.344H401.81v-9.344c0-102.552-38.804-190.274-97.53-222.188V253.5c58.722-31.917 97.53-119.64 97.53-222.188V21.97H115.06zM134 40.655h248.875c-2.477 96.445-42.742 175.523-91.938 198.906l-5.343 2.532v28.751l5.344 2.53c49.193 23.383 89.456 102.438 91.937 198.876H134c2.456-95.898 42.125-175.078 90.875-198.938l5.25-2.562v-28.594l-5.25-2.562c-48.748-23.86-88.42-103.04-90.875-198.938zm213.656 86.125c-57.607 27.81-124.526 27.84-177.562 4.095C184.748 181.78 213.91 218.012 248.22 224a12.178 12.178 0 0 0-2.47 7.344c0 6.76 5.488 12.25 12.25 12.25s12.25-5.49 12.25-12.25c0-2.72-.907-5.218-2.406-7.25c35.426-5.88 65.488-44.07 79.812-97.313zM258 258.626c-6.762 0-12.25 5.488-12.25 12.25s5.488 12.25 12.25 12.25s12.25-5.488 12.25-12.25s-5.488-12.25-12.25-12.25zm0 39.28c-6.762 0-12.25 5.49-12.25 12.25c0 6.763 5.488 12.25 12.25 12.25s12.25-5.487 12.25-12.25c0-6.76-5.488-12.25-12.25-12.25zm0 39.533c-6.762 0-12.25 5.488-12.25 12.25c0 6.76 5.488 12.25 12.25 12.25s12.25-5.49 12.25-12.25c0-6.762-5.488-12.25-12.25-12.25zm.125 39.906c-23.21.28-46.19 25.77-75.813 75.656h153c-30.523-51.003-53.977-75.936-77.187-75.656z"/></svg>
                                    <span class="text-xs">{{$userEdu->from_date}}-{{$userEdu->from_date}}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="h-[30%] pl-6">
                    <h3 class="text-white text-lg mb-1">Personal Information</h3>
                    <div class="h-[2px] w-full bg-white"></div>
                        <div class="text-white mt-3 text-sm">
                            <div class="flex items-center mb-2">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                                <p>{{$user->phone}}</p>
                            </div>
                            <div class="flex items-center mb-2">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 36 36"><path fill="currentColor" d="M32.33 6a2 2 0 0 0-.41 0h-28a2 2 0 0 0-.53.08l14.45 14.39Z" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="m33.81 7.39l-14.56 14.5a2 2 0 0 1-2.82 0L2 7.5a2 2 0 0 0-.07.5v20a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V8a2 2 0 0 0-.12-.61ZM5.3 28H3.91v-1.43l7.27-7.21l1.41 1.41Zm26.61 0h-1.4l-7.29-7.23l1.41-1.41l7.27 7.21Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                                <span class="text-xs">{{$user->email}}</span>
                            </div>
                            <div class="flex items-center mb-2">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M256 32C167.67 32 96 96.51 96 176c0 128 160 304 160 304s160-176 160-304c0-79.49-71.67-144-160-144Zm0 224a64 64 0 1 1 64-64a64.07 64.07 0 0 1-64 64Z"/></svg>
                                <span class="text-xs">{{$user->city}}</span>
                            </div>
                        </div>
                        
                    </div>
            </div>
            <div class="bg-white col-span-2">
                <div class="h-[20vh] mt-10 flex items-center w-full ">
                    <div class="h-[16vh] w-full bg-[#B497DD] flex flex-col justify-center px-8">
                        <h1 class="text-2xl text-white font-semibold">{{$user->first_name}} {{$user->last_name}}</h1>
                        <h1 class="text-md text-white font-thin">Software Engineer</h1>
                    </div>
                </div>
                <div class="h-auto w-full px-8 mb-10">
                    <h1 class="text-xl text-gray-700 font-semibold mb-1">About Me</h1>
                    <div class="h-[2px] w-full bg-gray-700"></div>
                    <p class="text-sm mt-2">{{$user->discription}}</p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eum itaque ipsa, aliquid suscipit laudantium assumenda delectus necessitatibus reprehenderit adipisci repudiandae ipsum temporibus nostrum veritatis possimus hic facilis earum explicabo.
                </div>


                <div class="h-auto w-full px-8 mb-10">
                    <h1 class="text-xl text-gray-700 font-semibold mb-1">Work Exp</h1>
                    <div class="h-[2px] w-full bg-gray-700"></div>
                    <ul class="mt-2">
                        @foreach ($userExps as $userExp)
                            <li class="text-sm flex mt-4">
                                <p class="mr-8">{{$userExp->from_date}}-{{$userExp->to_date}}</p>
                                <div>
                                    <p>Progammer</p>
                                    <p>{{$userExp->org_name}} / location</p>
                                </div>
                            </li>
                        @endforeach 
                        <li class="text-sm flex mt-4">
                            <p class="mr-8">2015-2019</p>
                            <div>
                                <p>Progammer</p>
                                <p>Qi Card / location</p>
                            </div>
                        </li>
                        <li class="text-sm flex mt-4">
                            <p class="mr-8">2019-2023</p>
                            <div>
                                <p>Team Leader</p>
                                <p>Asiacell / location</p>
                            </div>
                        </li>
        
                    </ul>
                </div>


                <div class="h-auto w-full px-8 ">
                    <h1 class="text-xl text-gray-700 font-semibold mb-1">Skills</h1>
                    <div class="h-[2px] w-full bg-gray-700"></div>
                    <ul class="skills mt-4">
                      @foreach ($userSkills as $userSkill)
                        <li class="text-sm flex mb-4 font-semibold">
                          {{$userSkill->skill->skill_title}}
                        </li>
                 
                      @endforeach
                      <li class="text-sm flex mb-4 font-semibold">
                        Graphics desgin
                      </li><li class="text-sm flex mb-4 font-semibold">
                        UI/UX
                      </li><li class="text-sm flex mb-4 font-semibold">
                        PHP
                      </li><li class="text-sm flex mb-4 font-semibold">
                        Laravel
                      </li>

                    </ul>
                </div>
                
            </div>
        </div>
    </div>


</x-app-layout>
