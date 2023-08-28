@extends('layouts.company-layout')
@section('content')
<section class="h-full w-full flex flex-col items-center justify-center ">
    <div class="bg-white h-[70%] max-w-[30%] rounded-lg shadow-lg flex flex-col items-center justify-center p-4">

    
    <header>
        <h2 class="text-lg font-medium text-[#8A7BC8]">
            {{ __('Add Skills') }}
        </h2>

        <p class="mt-1 text-sm text-gray-500">
            {{ __("From here you can add delete or update your skills") }}
        </p>
    </header>

    <form method="post" action="{{ route('add.offer.skill', $offer->id)}}" class="space-y-6 flex flex-col items-center justify-center w-[30vw]">
        @csrf

        <select class="rounded-lg border-2 border-[#8A7BC8] w-[50%] py-2" name="skill" id="skill">
            @foreach ($skills as $skill )
              <option value="{{$skill->skill_title}}">{{$skill->skill_title}}</option>
            @endforeach
        </select>

        

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Add') }}</x-primary-button>
        </div>
    </form>
    <ul class="flex gap-2">
    @foreach ($offerSkills as $key => $offerSkill )
    <li>
        <form method="post" action="{{ route('offer.skill.remove', $offerSkills[$key]->skill_id) }}" class="space-y-6">
            @csrf
            @method('delete')
            
                <div class="flex flex-wrap p-2 rounded ">
                    <p class="ml-4">{{$skills[$offerSkill->skill_id - 1]->skill_title}}</p>
                    <button type='button' onclick="this.form.submit()" class="text-lg ml-2 font-bold text-red-400">X</button>
                </div>
                
            
        </form>
    </li>
    @endforeach
</ul>
</div>
</section>
@endsection