<!DOCTYPE html>
<html lang="en">
<head>
    <title>Offers</title>
</head>
<body>
    @foreach ($offers as $offer)
        <h1>-------------------</h1>
        Job Title : {{$job_titles[$offer->job_id - 1]->job_title}}<br>
        Job Company : {{$offer->company->cp_name}}<br>
        Job Requirments : {{$offer->requirments}}<br>
        Job Responsibilities : {{$offer->responsibilities}}<br>
        Job Salary : {{$offer->salary}}<br>
        Work Time : Fulltime

            <div class="flex items-center gap-4">
                <a href="{{ route('get.job.apply',  [ 'id' => $offer->id]) }}"><button>{{ __('Apply') }}</button></a>
            </div>

        <h1>-------------------</h1>
    @endforeach
</body>
</html>