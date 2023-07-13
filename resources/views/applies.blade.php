<!DOCTYPE html>
<html lang="en">
<head>
    <title>Offers</title>
</head>
<body>
    @foreach ($job_applies as $job_apply)
        <h1>-------------------</h1>
        Job Title : {{$job_apply->offer->job->job_title}}<br>
        Job Company : {{$job_apply->offer->company->cp_name}}<br>
        Job Requirments : {{$job_apply->offer->requirments}}<br>
        Job Responsibilities : {{$job_apply->offer->responsibilities}}<br>
        Job Salary : {{$job_apply->offer->salary}}<br>
        Work Time : Fulltime <br>
        status : {{$job_apply->offer->status == null ? 'Waiting...' : $job_apply->offer->status}}
            {{-- <div class="flex items-center gap-4">
                <a href="{{ route('get.job.apply',  [ 'id' => $offer->id]) }}"><button>{{ __('Apply') }}</button></a>
            </div> --}}
            {{-- @if (Auth::guard('web')->check())

            <form method="post" action="{{ route('remove.offer', $offer->id) }}" class="mt-6 space-y-6">
                @csrf
                @method('delete')
                   
                        <button type='button' onclick="this.form.submit()" class="text-lg ml-2 font-bold text-red-400">X</button>
            </form>
             @endif --}}

        <h1>-------------------</h1>
    @endforeach
</body>
</html>