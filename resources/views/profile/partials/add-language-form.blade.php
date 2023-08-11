<section>
    <header>
        <h2 class="text-lg font-medium text-[#8A7BC8]">
            {{ __('Add Language') }}
        </h2>

        <p class="mt-1 text-sm text-gray-500">
            {{ __("From here you can add delete or update your languages") }}
        </p>
    </header>


    <form method="post" action="{{ route('add.language') }}" class="mt-6 space-y-6">
        @csrf
        <select class="rounded-lg rounded-tr-none rounded-br-none border-2 border-r-0 border-[#8A7BC8] w-[40%]" name="language" id="language">
            @foreach ($languages as $language)
                <option value="{{ $language->language }}">{{ $language->language }}</option>
            @endforeach
        </select>
        <select class="rounded-lg rounded-tl-none rounded-bl-none border-2 border-l-0 -translate-x-1	 border-[#8A7BC8] w-[15%]" name="level" id="level">
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>

        </select>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Add') }}</x-primary-button>
        </div>
    </form>



    </form>
    @foreach ($userLanguages as $key => $userLanguage)
        <form method="post" action="{{ route('remove.language', $userLanguages[$key]->lang_id) }}" class="mt-6 space-y-6">
            @csrf
            @method('delete')
            <ul class="flex">

                <li class="ml-4">{{ $languages[$userLanguage->lang_id - 1]->language}}</li>
                <button type='button' onclick="this.form.submit()"
                    class="text-lg ml-2 font-bold text-red-400">X</button>

            </ul>
        </form>
    @endforeach
</section>
