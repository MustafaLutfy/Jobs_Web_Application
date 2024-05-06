
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
                      <th class="px-4 py-3">Users</th>
                      <th class="px-4 py-3">Salary</th>
                      <th class="px-4 py-3">Work time</th>
                      <th class="px-4 py-3">Date</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >

                  @foreach($offers as $offer)
                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 group">
                      <a href="{{route('offer.show', $offer->id)}}">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="{{asset('users_images/' . $offer->company->cp_logo_path)}}"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div>
                          <div class="flex gap-2">
                            <p class="font-semibold">{{$offer->job->job_title}}</p>
                            <p class="text-blue-600 opacity-0 group-hover:opacity-100 transition-all">Show</p>  
                          </div>

                          <p>{{$offer->company->cp_name}}</p>
                          </div>
                      </div>
                      </a>
                    </td>
                    <td class="px-4 py-3 text-sm">
                    {{$offer->salary}}
                    </td>
                    <td class="px-4 py-3 text-xs">
                        @if($offer->work_time == 'full time')
                        <span
                        class="px-2 py-1 font-semibold leading-tight text-black-100 bg-green-100 rounded-full dark:text-white dark:bg-orange-600"
                        >
                      {{$offer->work_time}}

                        </span>
                        @else
                        <span
                        class="px-2 py-1 font-semibold leading-tight text-black-100 bg-blue-100 rounded-full dark:text-white dark:bg-orange-600"
                        >
                      {{$offer->work_time}}

                        </span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-sm">
                      {{$offer->created_at->format('Y/m/d')}}
                    </td>

                    <form method="POST" action="{{ route('remove.offer', $offer->id) }}">
                      @method("DELETE")
                      @csrf

                    <td class="flex gap-4 px-4 py-3 text-sm">
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