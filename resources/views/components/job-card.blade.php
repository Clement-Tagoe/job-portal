@props(['job'])

<div class="relative w-full border border-gray-300 hover:border-gray-400 hover:drop-shadow-sm rounded-lg p-5 mb-8">
        <h1 class="font-semibold text-lg"><a href="{{route('jobs.show', $job)}}">{{$job->title}}</a></h1>
        <h4 class="text-orange-600">Nestle Ghana Limited</h4>
        <span class="inline-block bg-green-100 text-green-500 px-3 py-1 rounded-lg mt-3 mr-1">{{$job->type}}</span>
        <span class="inline-block bg-yellow-100 text-yellow-600 px-3 py-1 rounded-lg mt-1">{{$job->jobFunction->name}}</span>
        <div class="absolute flex flex-col top-6 right-6">
            <span class="flex items-center justify-center font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-700 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg> 
               {{$job->jobLocation->name}}
            </span>
            <span class="text-gray-400 text-right">{{$job->created_at->diffForHumans()}}</span>
        </div>
        <p class="text-gray-500 my-3 text-justify">
            {{$job->summary}}
        </p>
</div>