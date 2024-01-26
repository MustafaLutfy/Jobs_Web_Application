
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
                      <th class="px-4 py-3">Employees number</th>
                      <th class="px-4 py-3">Status</th>
                      <th class="px-4 py-3">Date</th>
                      <th class="px-4 py-3">Actions</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >

                  @foreach($companies as $company)
                  <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div
                          class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                        >
                          <img
                            class="object-cover w-full h-full rounded-full"
                            src="{{asset('users_images/' . $company->cp_logo_path)}}"
                            alt=""
                            loading="lazy"
                          />
                          <div
                            class="absolute inset-0 rounded-full shadow-inner"
                            aria-hidden="true"
                          ></div>
                        </div>
                        <div>
                          <p class="font-semibold">{{$company->cp_name}}</p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                    {{$company->employees_number}}
                    </td>
                    <td class="px-4 py-3 text-xs">
                        @if($company->isActivated == false)
                        <span
                        class="px-2 py-1 font-semibold leading-tight text-black-100 bg-orange-200 rounded-full dark:text-white dark:bg-orange-600"
                        >
                        Pendeing

                        </span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-sm">
                      {{$company->created_at->format('Y/m/d')}}
                    </td>

                    <form method="POST" action="{{ route('company-request-actions', $company->id) }}">
                      @method("PUT")
                      @csrf

                    <td class="flex gap-4 px-4 py-3 text-sm">
                      <input class="text-green-600 font-semibold mt-2 cursor-pointer" type="submit" name="action" value="Activate"/>
                      <input class="text-red-600 font-semibold mt-2 cursor-pointer" type="submit" name="action" value="Decline"/>

                    </td>
                  </tr>
                </form>
               @endforeach
                    
                  </tbody>
                </table>
              </div>
          
        </main>
      @endsection