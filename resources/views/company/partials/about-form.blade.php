<section>
    <header>
        <h2 class="text-lg font-medium text-[#8A7BC8]">
            {{ __('Location Information') }}
        </h2>

    
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('company.update.about') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="mb-4">
            <x-input-label for="description" :value="__('About You')" />
            <textarea id="description" class="border-gray-300  focus:border-[#8A7BC8] focus:ring-[#8A7BC8] rounded-md shadow-sm block mt-1 max-h-[350px] min-h-[150px] w-full" type="text" name="description" required autofocus autocomplete="discription">{{Auth::guard('company')->user()->description}}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>      
        <x-primary-button>{{ __('Save') }}</x-primary-button>
    </form>
</section>

