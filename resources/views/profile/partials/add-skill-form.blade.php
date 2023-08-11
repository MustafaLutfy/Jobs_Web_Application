<section>
    <header>
        <h2 class="text-lg font-medium text-[#8A7BC8]">
            {{ __('Add Skills') }}
        </h2>

        <p class="mt-1 text-sm text-gray-500">
            {{ __("From here you can add delete or update your skills") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('add.skill') }}" class="space-y-6">
        @csrf

        <select class="rounded-lg border-2 border-[#8A7BC8] w-[50%]" name="skill" id="skill">
            @foreach ($skills as $skill )
              <option value="{{$skill->skill_title}}">{{$skill->skill_title}}</option>
            @endforeach
        </select>

        

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Add') }}</x-primary-button>
        </div>
    </form>
    @foreach ($userSkills as $key => $userSkill )
    <form method="post" action="{{ route('skill.remove', $userSkills[$key]->skill_id) }}" class="mt-6 space-y-6">
        @csrf
        @method('delete')
        <ul class="flex">
           
                <li class="ml-4">{{$skills[$userSkill->skill_id - 1]->skill_title}}</li>
                <button type='button' onclick="this.form.submit()" class="text-lg ml-2 font-bold text-red-400">X</button>

            
            
        </ul>
    </form>
    @endforeach
</section>
