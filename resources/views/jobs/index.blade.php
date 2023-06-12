<x-app-layout>
    <div class="mt-16 w-full mb-10">
        <div class="w-full md:h-44 flex flex-col justify-center p-5 text-white bg-gradient-to-r from-orange-700 from-20% via-orange-600 via-50% to-orange-400 to-90%">
            <h1 class="text-3xl font-semibold mb-1">Find the right job</h1>
            <p class="text-gray-200">Looking for jobs? Browse our latest job openings to view & apply to the best jobs today!</p>
        </div>

        <div class="flex w-11/12 mx-auto mt-10 md:space-x-5">
            <div class="hidden md:flex flex-col w-1/4 h-140 border border-gray-300 rounded-lg">
                <div class="flex justify-between p-3">
                    <span class="font-semibold">Filter</span>
                    <button class="text-red-600">
                        Clear all
                    </button>
                </div>

                <hr class="border-1 border-gray-300">

                <div class="flex flex-col p-4 text-sm">
                    <label for="" class="mb-2 font-semibold">Date Posted</label>
                    <select name="" id="" class="border border-gray-300 text-gray-400 rounded-lg p-2 outline-none hover:border-gray-400 focus:border-gray-400">
                        <option value="">Anytime</option>
                        <option value="">Within a week</option>
                        <option value="">Within two weeks</option>
                        <option value="">Within three weeks</option>
                        <option value="">Within a month</option>
                    </select>
                </div>

                <hr class="border-1 border-gray-300">

                <div class="flex flex-col p-4 text-sm">
                    <label for="" class="mb-2 font-semibold">Job Type</label>
                    <div class="mb-3 md:columns-1 lg:columns-2 space-y-3">
                        <div class="flex space-x-1 text-gray-400">
                            <input type="checkbox">
                            <label for="">Full time</label>
                        </div>
                        <div class="flex space-x-1 text-gray-400">
                            <input type="checkbox">
                            <label for="">Part time</label>
                        </div>
                        <div class="flex space-x-1 text-gray-400">
                            <input type="checkbox">
                            <label for="">Internship/Graduate</label>
                        </div>
                        <div class="flex space-x-1 text-gray-400">
                            <input type="checkbox">
                            <label for="">Contract</label>
                        </div>
                        
                        <div class="flex space-x-1 text-gray-400">
                            <input type="checkbox">
                            <label for="">Remote</label>
                        </div>
                    </div>   
                </div>

                <hr class="border-1 border-gray-300">

                <div class="flex flex-col p-4 text-sm">
                    <label for="" class="mb-2 font-semibold">Location</label>
                    <select name="" id="" class="border border-gray-300 text-gray-400 rounded-lg p-2 outline-none hover:border-gray-400 focus:border-gray-400">
                        <option value="">All Locations</option>
                        @foreach ($locations as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach
                    </select>
                </div>

                <hr class="border-1 border-gray-300">

                <div class="flex flex-col p-4 text-sm">
                    <label for="" class="mb-2 font-semibold">Job Function</label>
                    <select name="" id="" class="border border-gray-300 text-gray-400 rounded-lg p-2 outline-none hover:border-gray-400 focus:border-gray-400">
                        <option value="">All Job Functions</option>
                        @foreach ($functions as $function)
                            <option value="{{$function->id}}">{{$function->name}}</option>
                        @endforeach
                    </select>
                </div>

                <hr class="border-1 border-gray-300">

                <div class="flex flex-col p-4 text-sm">
                    <label for="" class="mb-2 font-semibold">Industry</label>
                    <select name="" id="" class="border border-gray-300 text-gray-400 rounded-lg p-2 outline-none hover:border-gray-400 focus:border-gray-400">
                        <option value="">All Industries</option>
                        @foreach ($industries as $industry)
                            <option value="{{$industry->id}}">{{$industry->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="w-full md:w-3/4">

                <!--Search and Filters for small and mobile screens -->
                <div class="w-11.5/12 mx-auto">
                    <div class="w-full flex flex-col md:hidden">
                        <button class="w-full text-white bg-orange-600 hover:bg-orange-700 px-3 py-2 mb-3 rounded-lg">
                            Search Filter
                        </button>

                        <div class="w-full border border-gray-300 rounded-lg p-4">
                            <h4 class="font-semibold">Filter Results</h4>
                            <div class="flex space-x-2 my-4">
                                <div class="w-11/12 flex items-center h-9 border border-gray-300 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-400 ml-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>                      
                                    <input type="text" placeholder="Search job title or keyword..." class="w-11/12 h-8 border-none px-3 py-2 outline-none placeholder:italic placeholder:text-sm" >
                                </div>
                                <button class="w-1/12 text-orange-600 border border-orange-600 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-600 ml-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>   
                                </button>
                            </div>

                            <hr class="border-1 border-gray-300">

                            <div class="flex flex-col text-sm my-4">
                                <label for="" class="mb-2 font-semibold">Job Function</label>
                                <select name="" id="" class="border border-gray-300 text-gray-400 rounded-lg p-2 outline-none hover:border-gray-400 focus:border-gray-400">
                                    <option value="">All Job Functions</option>
                                    @foreach ($functions as $function)
                                        <option value="{{$function->id}}">{{$function->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <hr class="border-1 border-gray-300">

                            <div class="flex flex-col text-sm my-4">
                                <label for="" class="mb-2 font-semibold">Industry</label>
                                <select name="" id="" class="border border-gray-300 text-gray-400 rounded-lg p-2 outline-none hover:border-gray-400 focus:border-gray-400">
                                    <option value="">All Industries</option>
                                    @foreach ($industries as $industry)
                                        <option value="{{$industry->id}}">{{$industry->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <hr class="border-1 border-gray-300">

                            <div class="flex flex-col text-sm my-4">
                                <label for="" class="mb-2 font-semibold">Location</label>
                                <select name="" id="" class="border border-gray-300 text-gray-400 rounded-lg p-2 outline-none hover:border-gray-400 focus:border-gray-400">
                                    <option value="">All Locations</option>
                                    @foreach ($locations as $location)
                                        <option value="{{$location->id}}">{{$location->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Search and Filters for medium screens and larger -->
                <div class="hidden md:flex flex-col md:flex-row w-full items-center border border-gray-300 rounded-lg p-1">
                    <div class="w-2/3 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-400 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>                      
                        <input type="text" placeholder="Search job title or keyword..." class="w-full border-none px-3 py-2 outline-none placeholder:italic" >
                    </div>
                    
                    <div class="w-1/3 flex justify-end">
                        <button class="w-40 text-white bg-orange-600 hover:bg-orange-700 px-3 py-2 rounded-lg">
                            Find jobs
                        </button>
                    </div>   
                </div>

                <div class="w-full mt-6">
                    <h4 class="text-orange-600 font-semibold mb-2">{{$jobs->count()}} Job(s) found</h4>
                    @foreach ($jobs as $job)
                        <x-job-card :job="$job" />
                    @endforeach
                </div>

                
            </div>
        </div>
    </div>
</x-app-layout>