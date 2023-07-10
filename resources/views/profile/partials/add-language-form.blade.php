<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>


    <form method="post" action="{{ route('add.language') }}" class="mt-6 space-y-6">
        @csrf
        <select name="language" id="language">
            @foreach ($languages as $language)
                <option value="{{ $language->language }}">{{ $language->language }}</option>
            @endforeach
        </select>
        <select name="level" id="level">
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>

        </select>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
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
