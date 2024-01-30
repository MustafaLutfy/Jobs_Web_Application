
@extends('layouts.admin-layout')
@section('content')
        <main class="h-full overflow-y-auto">
          <!-- New Table -->
          <div class="w-full overflow-hidden rounded-lg shadow-xs px-10 py-4">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Name</th>
                      <th class="px-4 py-3">Current Position</th>
                      <th class="px-4 py-3">Job Status</th>
                      <th class="px-4 py-3">Date</th>
                      <th class="px-4 py-3">Actions</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >

                  @foreach($users as $user)
                  
                  <tr class="text-gray-700 dark:text-gray-400 group">
                    <td class="px-4 py-3">
                      <a href="{{route('cp.profile.show', $user->id)}}">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="{{asset('users_images/' . $user->image_path)}}"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div class="flex gap-2">
                          <p class="font-semibold">{{$user->first_name}} {{$user->last_name}}</p>
                          <p class="text-blue-600 opacity-0 group-hover:opacity-100 transition-all ">Profile</p>
                        </div>
                      </div>
                    </a>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      @if ($user->current_pos)
                      <span
                      class="px-2 py-1 text-sm font-semibold leading-tight text-black-100 bg-green-200 rounded-full dark:text-white dark:bg-orange-600"
                      >
                      {{$user->current_pos}}

                      </span>
                      @else
                      <span
                      class="px-2 py-1 text-sm font-semibold leading-tight text-black-100 bg-red-200 rounded-full dark:text-white dark:bg-orange-600">
                      Unemployed
                      </span>
                      @endif
                     
                    </td>
                    <td class="px-4 py-3 text-xs">
                        
                        @if ($user->job_searching == 1)
                        <span
                        class="px-2 py-1 font-semibold leading-tight text-black-100 bg-green-200 rounded-full dark:text-white dark:bg-orange-600"
                        >
                        Searching

                        </span>
                        @else
                        <span
                        class="px-2 py-1 font-semibold leading-tight text-black-100 bg-red-200 rounded-full dark:text-white dark:bg-orange-600">
                        Not Searcing
                        </span>
                        @endif                       
                    </td>

                    <td class="px-4 py-3 text-xs">
                        @if ($user->is_active == 1)
                        <span
                        class="px-2 py-1 font-semibold leading-tight text-black-100 bg-green-200 rounded-full dark:text-white dark:bg-orange-600"
                        >
                        Active
                        </span>
                        @else
                        <span
                        class="px-2 py-1 font-semibold leading-tight text-black-100 bg-red-200 rounded-full dark:text-white dark:bg-orange-600">
                        Inactive
                        </span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-sm">
                      {{$user->created_at->format('Y/m/d')}}
                    </td>

                    <form method="POST" action="{{ route('active-user-actions', $user->id) }}">
                      @method("PUT")
                      @csrf

                    <td class="flex gap-4 px-4 py-3 text-sm">
                      
                        <div x-data="{ enabletooltip: false }">
                          <button x-on:mouseenter="enabletooltip = true" x-on:mouseleave="enabletooltip = false" class="text-gray-400 hover:text-green-500 font-semibold mt-2 cursor-pointer" type="submit" name="action" value="Enable">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m4 24l5-5l10 10L39 9l5 5l-25 25z" clip-rule="evenodd"/></svg>
                          </button>
                          <div x-show="enabletooltip" class="z-50 absolute bg-white  border-2 rounded px-3 py-1 mr-1 -translate-x-6">
                            Enable
                          </div>
                        </div>
 
                        <div x-data="{ disabletooltip: false }">
                          <button x-on:mouseenter="disabletooltip = true" x-on:mouseleave="disabletooltip = false" class="text-gray-400 hover:text-orange-400 font-semibold mt-2 cursor-pointer" type="submit" name="action" value="Disable">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10m-4.906-3.68L18.32 7.094A8 8 0 0 1 7.094 18.32M5.68 16.906A8 8 0 0 1 16.906 5.68z"/></svg>
                          </button>
                          <div x-show="disabletooltip" class="z-50 absolute bg-white  border-2 rounded px-3 py-1 mr-1 -translate-x-6">
                            Disable
                          </div>
                        </div>

                        <div x-data="{ deletetooltip: false }">
                          <button x-on:mouseenter="deletetooltip = true" x-on:mouseleave="deletetooltip = false" class="text-gray-400 hover:text-red-600 font-semibold mt-2 cursor-pointer" type="submit" name="action" value="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 256 256"><path fill="currentColor" d="M216 48h-40v-8a24 24 0 0 0-24-24h-48a24 24 0 0 0-24 24v8H40a8 8 0 0 0 0 16h8v144a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16V64h8a8 8 0 0 0 0-16M96 40a8 8 0 0 1 8-8h48a8 8 0 0 1 8 8v8H96Zm96 168H64V64h128Zm-80-104v64a8 8 0 0 1-16 0v-64a8 8 0 0 1 16 0m48 0v64a8 8 0 0 1-16 0v-64a8 8 0 0 1 16 0"/></svg>
                          </button>
                          <div x-show="deletetooltip" class="z-50 absolute bg-white  border-2 rounded px-3 py-1 mr-1 -translate-x-6">
                            Delete
                          </div>
                       </div>

                    </td>
                  </form>

                  </tr>
               
                
                
               @endforeach
                    
                  </tbody>
                </table>
              </div>
          

        </main>

      
      @endsection