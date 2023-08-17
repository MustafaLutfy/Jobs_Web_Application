<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <nav x-data="{ open: false }" class="bg-white relative h-[82px] z-90">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-center h-16">
                    <div class="flex h-[80px]">
        
                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 gap-10 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link class="text-[#8B7FC0] hover:text-[#7868B6] hover:border-[#7868B6]" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
        
                            <x-nav-link class="text-[#8B7FC0] hover:text-[#7868B6] hover:border-[#7868B6]" :href="route('offers')" :active="request()->routeIs('offers')">
                                {{ __('Offers') }}
                            </x-nav-link>
                    
                            <x-nav-link class="w-[110px] text-[#8B7FC0] hover:text-[#7868B6] hover:border-[#7868B6]" :href="route('get.user.applies')" :active="request()->routeIs('get.user.applies')">
                                {{ __('My Applies') }}
                            </x-nav-link>
                    
                            <x-nav-link class="w-[100px] text-[#8B7FC0] hover:text-[#7868B6] hover:border-[#7868B6]" :href="route('get.user.applies')" :active="request()->routeIs('get.user.freelance')">
                                {{ __('Freelance') }}
                            </x-nav-link>
                    
                        </div>
                    </div>
        
                    <!-- Settings Dropdown -->
                
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
        <div class="h-[91vh] flex flex-col sm:justify-center items-center  pt-6 sm:pt-0 bg-gray-100">
       

            <div class=" z-90 w-[65vw] h-[75vh] relative mt-6 px-6 py-4 bg-white shadow-2xl sm:rounded-lg">
                {{ $slot }}      
            </div>

        </div>
    </body>
</html>
