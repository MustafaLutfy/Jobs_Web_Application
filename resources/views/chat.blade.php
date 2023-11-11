<x-app-layout>


<script src="{{asset('js/tailwind.js')}}"></script>

  <body class="flex ">
    <div class="container my-auto mx-auto flex h-[calc(100vh-100px)]  items-center">
      <div class="min-w-full border rounded lg:grid lg:grid-cols-3 bg-white h-[80vh]">
        <div class="border-r border-gray-300 lg:col-span-1">
          <div class="mx-3 my-3 ">
            <div class="relative text-gray-600">
              <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  viewBox="0 0 24 24" class="w-6 h-6 text-gray-300">
                  <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
              </span>
              <input type="search" class="block w-full py-2 pl-10 block border-gray-300 focus:border-[#8A7BC8] focus:ring-[#8A7BC8] rounded-full shadow-sm" name="search"
                placeholder="Search" required />
            </div>
          </div>

          <ul class="overflow-auto">
            <h2 class="my-2 mb-2 ml-2 text-lg text-gray-600">Chats</h2>
            @foreach ($contacts as $contact)
              <li>
                <a
                  href="{{route('user.get.chat', $contact->company_id)}}"
                  class="flex items-center px-3 py-2 text-sm transition duration-150 ease-in-out border-b border-gray-300 cursor-pointer hover:bg-gray-100 focus:outline-none">
                  <img class="object-cover w-10 h-10 rounded-full"
                    src="https://cdn.pixabay.com/photo/2018/09/12/12/14/man-3672010__340.jpg" alt="username" />
                  <div class="w-full pb-2">
                    <div class="flex justify-between">
                      <span class="block ml-2 font-semibold text-gray-600">{{$contact->company->cp_name}}</span>
                      <span class="block ml-2 text-sm text-gray-600">{{ Carbon\Carbon::parse($contact->created_at)->ago()}}</span>
                    </div>
                    <span class="block ml-2 text-sm text-gray-600">{{$contact->message}}</span>
                  </div>
                </a>
              </li>
            @endforeach
          

          </ul>
        </div>
        <div class="hidden lg:col-span-2 lg:block ">
          <div class="w-full">
            <div class="relative flex items-center p-3 border-b border-gray-300 ">
              <img class="object-cover w-10 h-10 rounded-full"
                src="https://cdn.pixabay.com/photo/2018/01/15/07/51/woman-3083383__340.jpg" alt="username" />
              <span class="block ml-2 font-bold text-gray-600">{{$company->cp_name}}</span>
              </span>
            </div>
            <div class="relative w-full p-6 overflow-y-auto h-[calc(80vh-133px)]">
              <ul class="space-y-2">
                @foreach ($messages as $message)
                @if($message->message_by == 'user')
                    <li class="group flex justify-end items-center">
                      <form method="POST" action="{{ route('message.delete', $message->id) }}">
                        @method('DELETE')
                        @csrf
                        <button type="button" onclick="this.form.submit()">
                          <svg class="cursor-pointer fill-white group-hover:stroke-gray-300 group-hover:fill-gray-500 mr-3 transition-all duration-200" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="-3 -2 24 24"><path d="M6 2V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h4a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-.133l-.68 10.2a3 3 0 0 1-2.993 2.8H5.826a3 3 0 0 1-2.993-2.796L2.137 7H2a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h4zm10 2H2v1h14V4zM4.141 7l.687 10.068a1 1 0 0 0 .998.932h6.368a1 1 0 0 0 .998-.934L13.862 7h-9.72zM7 8a1 1 0 0 1 1 1v7a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v7a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1z"/></svg>
                        </button>
                      </form>
                      <div class="relative max-w-xl px-4 py-2 bg-purple-700 text-gray-200 rounded shadow">
                        <span class="block">{{$message->message}}</span>
                        </div>
                    </li>
                @else
                    <li class="flex justify-start">
                        <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                        <span class="block">{{$message->message}}</span>
                        </div>
                    </li>
                @endif
                @endforeach
                
                {{-- <li class="flex justify-end">
                  <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                    <span class="block">Hiiii</span>
                  </div>
                </li> --}}
              </ul>
            </div>
            <form method="POST" action="{{ route('message.send', $company->id) }}">
                @csrf
            <div class="flex items-center justify-between w-full p-3 border-t border-gray-300 ">
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </button>
             
              
                <input type="text" placeholder="Message"
                    class="block w-full py-2 pl-4 mx-3 border-gray-300 focus:border-[#8A7BC8] focus:ring-[#8A7BC8] rounded-full shadow-sm"
                    name="message" required />

                    <button type="submit">
                        <svg class="w-5 h-5 text-gray-500 origin-center transform rotate-90" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                        </svg>
                    </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
</x-app-layout>

