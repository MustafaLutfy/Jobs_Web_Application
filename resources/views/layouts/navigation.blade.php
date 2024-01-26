<nav x-data="{ open: false }" class="bg-[#fff] drop-shadow-md h-[81px] border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center h-16">
            <div class="flex h-[80px] ml-[22vw]">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 gap-10 sm:-my-px sm:ml-10 sm:flex">
                   
                    @guest
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link> 
                    @endguest
                    @auth
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link> 
                    @endauth
                    

                    <x-nav-link :href="route('offers')" :active="request()->routeIs('offers')">
                        {{ __('Offers') }}
                    </x-nav-link>
            
                    <x-nav-link class="w-[110px]" :href="route('get.user.applies')" :active="request()->routeIs('get.user.applies')">
                        {{ __('My Applies') }}
                    </x-nav-link>
            
                    <x-nav-link class="w-[100px]" :href="route('get.user.applies')" :active="request()->routeIs('get.user.freelance')">
                        {{ __('Freelance') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->

          

            @auth
                
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex ml-[20vw] w-[70px] items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <img class="rounded-full mt-4 mr-4" src="{{url('/images/images.png')}}" alt="">
                            {{-- <div class="text-lg font-semibold text-white">{{ Auth::user()->first_name }}</div> --}}
                            {{-- <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div> --}}
                        </button>
                    </x-slot>


                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.show', Auth::user()->id)">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        @if(Auth::user()->is_admin == 1)
                        <x-dropdown-link :href="route('admin.dashboard')">
                            {{ __('Admin Dashboard') }}
                        </x-dropdown-link>
                        @endif


                        <form method="POST" action="{{ route('user.logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('user.logout')"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                       
                       

                        <!-- Authentication -->
                        
                       
                    </x-slot>
                </x-dropdown>
            </div>
            @endauth

            @guest
            <div class="flex gap-8 items-center ml-[15%] justify-self-end mt-4">
                <div class="flex gap-1">
                       <a href="{{ route('user.register') }}">
                               <svg xmlns="http://www.w3.org/2000/svg" class="text-[#7767B5]" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M15 4a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4m0 1.9a2.1 2.1 0 1 1 0 4.2A2.1 2.1 0 0 1 12.9 8A2.1 2.1 0 0 1 15 5.9M4 7v3H1v2h3v3h2v-3h3v-2H6V7H4m11 6c-2.67 0-8 1.33-8 4v3h16v-3c0-2.67-5.33-4-8-4m0 1.9c2.97 0 6.1 1.46 6.1 2.1v1.1H8.9V17c0-.64 3.1-2.1 6.1-2.1Z"/></svg>
                       </a>
                       <a  class="text-[#7767B5] font-bold" href="{{ route('user.register') }}">Register</a>
                      
                </div>
                <div class="flex gap-1"> 
                      <a href="{{ route('user.login') }}">
                           <svg xmlns="http://www.w3.org/2000/svg" class="text-[#7767B5]" width="24" height="24" viewBox="0 0 24 24"><g transform="rotate(180 12 12)"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M14 8V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2"/><path d="M20 12H7l3-3m0 6l-3-3"/></g></g></svg>
                      </a>
                      <a  class="text-[#7767B5] font-bold" href="{{ route('user.login') }}">Login</a>
                     
                </div>
             </div>
            @endguest

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
     <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                @auth
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->first_name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                @endauth
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('user.logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('user.logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div> 
</nav>
