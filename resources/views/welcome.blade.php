<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased overflow-x-hidden w-screen">
        <nav x-data="{ open: false }" class="bg-[#b497dd] h-[82px] border-b border-gray-100">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex h-16">
                    <div class="flex h-[80px] w-full">
        
                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 gap-10 sm:-my-px ml-[25%] sm:flex">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
        
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

                            <div class="flex gap-8 items-center ml-[15%] justify-self-end">
                                     <div class="flex gap-1">
                                            <a  class="text-white font-bold" href="{{ route('user.register') }}">Register</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M15 4a4 4 0 0 0-4 4a4 4 0 0 0 4 4a4 4 0 0 0 4-4a4 4 0 0 0-4-4m0 1.9a2.1 2.1 0 1 1 0 4.2A2.1 2.1 0 0 1 12.9 8A2.1 2.1 0 0 1 15 5.9M4 7v3H1v2h3v3h2v-3h3v-2H6V7H4m11 6c-2.67 0-8 1.33-8 4v3h16v-3c0-2.67-5.33-4-8-4m0 1.9c2.97 0 6.1 1.46 6.1 2.1v1.1H8.9V17c0-.64 3.1-2.1 6.1-2.1Z"/></svg>
                                     </div>
                                     <div class="flex gap-1"> 
                                           <a  class="text-white font-bold" href="{{ route('user.login') }}">Login</a>
                                           <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="24" height="24" viewBox="0 0 24 24"><g transform="rotate(180 12 12)"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M14 8V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2"/><path d="M20 12H7l3-3m0 6l-3-3"/></g></g></svg>
                                     </div>
                                 </div>
                    </div>

                
        
                    <!-- Settings Dropdown -->

        
                    <!-- Hamburger -->
                    <!-- <div class="-mr-2 flex items-center ">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div> -->
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

                </div>
            </div> 
        </nav>
        

            <div class="flex items-center  h-[90vh] bg-[#F7F7F8]">
        
                <div class="flex justify-center flex-col h-[100%] w-[60vw] p-40">
                    <!-- heading -->
                    <h1 class="text-[#7B6AB8] text-[40px] 2xl:text-[60px] font-bold">Connecting talents<br>with apportionities</h1>
                   
                    <p class="mt-6 md:text-[18px]">Our platform was designed to connect talented indivisuals live you
                        with a vast array of job opening cross various indastries and sectors
                    </p>
                    <!-- Auth -->
                    <div class="mt-6 flex gap-10">
                        <button class="border-[#7767b5] border-[3px] p-2 text-[#7767b5] rounded-md border-3 px-4"><a href="{{  route('company.register')  }}">I'm Hiring</a></button>
                        <button class="bg-[#7767b5] p-2 text-white rounded-md border-3 px-4"><a href="{{ route('user.register') }}">I'm  A Talent </a></button>
                    </div>
                    <!-- end auth -->
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
                {{-- @foreach ($offers as $offer)
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
                @endforeach --}}
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
        
        
    </body>
</html>
