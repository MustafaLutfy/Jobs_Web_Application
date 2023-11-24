
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
                    <td class="px-4 py-3">
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
                          <p class="font-semibold">{{$offer->job->job_title}}</p>
                          <p class="text-xs text-gray-600 dark:text-gray-400">
                            {{$offer->company->cp_name}}
                          </p>
                        </div>
                      </div>
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
                  </tr>

               @endforeach
                    
                  </tbody>
                </table>
              </div>
          
        </main>
      @endsection