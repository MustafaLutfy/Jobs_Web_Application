<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>



    <form method="post" action="{{ route('add.experience') }}" class="mt-6 space-y-6">
        @csrf
       

        <div>
            <x-input-label for="org_name" :value="__('org_name	')" />
            <x-text-input id="org_name" name="org_name" type="text" class="mt-1 block w-full" required autofocus autocomplete="org_name" />
            {{-- <x-text-input id="from_date" name="from_date" type="date" class="mt-1 block w-full" placeholder="From" required autofocus autocomplete="from_date" />
            <x-text-input id="to_date" name="to_date" type="date" class="mt-1 block w-full" placeholder="To" required autofocus autocomplete="to_date" /> --}}
            <select name="from_date" id="from_date">
                <option>From</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
            </select>
        
            <select name="to_date" id="to_date">
                <option>To</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
            </select>
        
            <x-input-error class="mt-2" :messages="$errors->get('education')" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Add') }}</x-primary-button>
        </div>
    </form>
</section>
