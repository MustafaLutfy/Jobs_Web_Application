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
            <div class="flex items-end gap-4">
                <div class="w-[50%]">
                    <x-input-label for="org_name" :value="__('org_name	')" />
                    <x-text-input  id="org_name" name="org_name" type="text" class="mt-1 block w-full" required autofocus autocomplete="org_name" />
                    <x-input-error class="mt-2" :messages="$errors->get('org_name')" />
                </div>
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
        
        </div>


        <div class="flex items-center gap-4 mt-6">
            <x-primary-button>{{ __('Add') }}</x-primary-button>
        </div>
    </form>


    @foreach ($userExps as $key => $userExp )
    <form method="post" action="{{ route('remove.experience', $userExps[$key]->org_name) }}" class="mt-6 space-y-6">
        @csrf
        @method('delete')
        <ul class="flex">
           
                <li class="ml-4">{{$userExp->org_name}}</li>
                <li class="ml-4">{{$userExp->from_date}}</li>
                <li class="ml-4">{{$userExp->to_date}}</li>
                <button type='button' onclick="this.form.submit()" class="text-lg ml-2 font-bold text-red-400">X</button>
            
        </ul>
    </form>
    @endforeach
</section>
