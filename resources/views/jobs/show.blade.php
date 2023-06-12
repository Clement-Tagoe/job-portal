<x-app-layout>
    <div class="mt-16 w-full">

        <!--For small Screens-->
        <div class="w-11/12 mx-auto md:hidden">
            <a href="/account/login" class="inline-block text-center w-full mt-5 px-3 py-3 text-white font-semibold bg-orange-600 hover:bg-orange-700 rounded-md">
                Log In and Apply
            </a>
        </div>
    
        <!--For medium and large screens-->
        <div class="hidden md:flex w-full bg-orange-100 py-6 md:py-auto md:mt-8">
            <div class="w-11/12 mx-auto">
                <form action="" class="flex flex-col items-center md:flex-row w-full">
                    <div class="text-gray-600 mr-5 whitespace-nowrap">Find a job</div>
                    <select class="w-full h-10 pl-2 text-gray-500 rounded-md border border-gray-300 hover:border-gray-400 focus:border-gray-400 placeholder-gray-400 focus:placeholder-gray-900 mb-3 w-full md:mb-0 md:mr-3" name="" id="">
                        <option value="">All Job Functions</option>
                        @foreach ($functions as $function)
                            <option value="{{$function->id}}">{{$function->name}}</option>
                        @endforeach
                    </select>
                    <select class="w-full h-10 pl-2 text-gray-500 rounded-md border border-gray-300 hover:border-gray-400 focus:border-gray-400 placeholder-gray-400 focus:placeholder-gray-900 mb-3 w-full md:mb-0 md:mr-3" name="" id="">
                        <option value="">All Industries</option>
                        @foreach ($industries as $industry)
                            <option value="{{$industry->id}}">{{$industry->name}}</option>
                        @endforeach
                    </select>
                    <select class="w-full h-10 pl-2 text-gray-500 rounded-md border border-gray-300 hover:border-gray-400 focus:border-gray-400 placeholder-gray-400 focus:placeholder-gray-900 mb-3 w-full md:mb-0 md:mr-3" name="" id="">
                        <option value="">All Locations</option>
                        @foreach ($locations as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach
                    </select>
                    <button class="flex items-center justify-center appearance-none font-medium text-center rounded-md text-base py-3 lg:py-2 px-6 bg-orange-600 text-white  hover:bg-orange-700 w-full lg:w-1/2">
                        Search
                    </button>
                </form>
            </div>  
        </div>

        <div class="w-11/12 mx-auto flex md:space-x-8">
            <div class="w-full md:w-8/12 border border-gray-300 rounded-lg my-8">
                <div class="flex flex-col-reverse md:flex-row p-5">
                    <div class="w-full md:w-8/12 mt-3 md:mt-0">
                        <h1 class="text-xl font-semibold mb-3">{{$job->title}}</h1>
                        <h4 class="text-orange-600">Nestle Ghana Limited</h4>
                        <h5 class="mb-4">{{$job->jobFunction->name}}</h5>
                        <div class="mb-3">
                            <span class="inline-block bg-green-100 text-green-500 px-3 py-1 rounded-md mr-1">{{$job->type}}</span>
                            <span class="inline-block text-gray-500 bg-gray-200 rounded-md px-3 py-1">
                                {{$job->jobLocation->name}}
                            </span>
                        </div>
                        <div>
                            <span class="inline-block bg-blue-100 text-blue-500 px-3 py-1 rounded-md mr-1">{{$job->jobIndustry->name}}</span>
                            <span class="inline-block text-purple-500 bg-purple-100 rounded-md px-3 py-1">
                                Ghs {{$job->monthly_salary}}
                            </span>
                        </div>
                        
                    </div>
                    <div class="w-full md:w-4/12 flex md:justify-end">
                        <img class="w-40 h-40" src="../images/nestle.jpg" alt="nestle-ghana-limited">
                    </div>
                </div>

                <hr class="border-1 border-gray-300">

                <div class="flex justify-between px-5 py-3">
                    <span class="inline-flex text-lime-600 bg-lime-200 px-3 rounded-md">
                        New
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                        </svg>  
                    </span>
                    <span class="inline-block text-gray-400">{{$job->created_at->diffForHumans()}}</span>
                </div>

                <hr class="border-1 border-gray-300">

                <div class="p-5">
                    <h1 class="text-xl mb-4 font-medium text-gray-600">Job Summary</h1>
                    <p class="text-justify text-gray-500 mb-3">
                        {{$job->summary}}
                    </p>
                    <ul class="text-gray-500 list-disc ml-5">
                        <li><span class="font-medium">Minimum Qualification: <span> <span class="font-normal">{{$job->qualification}}</span></li>
                        <li><span class="font-medium">Experience Level: <span> <span class="font-normal">{{$job->level}}</span></li>
                        <li><span class="font-medium">Experience Length: <span> <span class="font-normal">{{$job->experience}}</span></li>
                    </ul>
                </div>

                <div class="p-5">
                    <h1 class="text-xl mb-4 font-medium text-gray-600">Job Description/Requirements</h1>
                    <h5 class="text-gray-600 font-medium">Responsibilities:</h5>
                    
                    <div class="custom-ul">
                        @php
                            echo $job->requirements;
                        @endphp
                    </div>
                    
                

                    <h5 class="text-gray-600 font-medium mt-6">Requirements:</h5>

                    <div class="custom-ul">
                        @php
                            echo $job->requirements;
                        @endphp
                    </div>
                    
                </div>


            </div>

            <div class="hidden md:flex flex-col md:w-4/12 h-128 border border-gray-300 rounded-lg my-8 p-5">
                <h3 class="text-lg mb-4">Log in to apply now</h3>
                <h1 class="text-3xl font-semibold mb-8">{{$job->title}}</h1>
                <form action="" method="POST">
                    @csrf
                    <input type="text" placeholder="Email Address" name="email" required
                        class="w-full h-10 py-3 px-2 mb-6 rounded-md block hover:border-gray-400 focus:border-gray-400 text-gray-700 outline-none placeholder-gray-400 border border-gray-300"
                    >
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <input type="password" placeholder="Password" name="password" required
                        class="w-full h-10 py-3 px-2 mb-6 rounded-md block hover:border-gray-400 focus:border-gray-400 text-gray-700 outline-none placeholder-gray-400 border border-gray-300"
                    > 
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    <div class="mb-4">
                        <a href="" class="font-bold text-orange-600">
                            Forgot Password?    
                        </a>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="remember_me" name="remember_me" value="remember_me"
                            class="w-4 h-4 rounded border border-gray-300 transition duration ease-in-out cursor-pointer text-orange-600 focus:ring-orange-600"
                        >  
                        <label for="remember_me" class="text-gray-600">Keep me logged in</label>
                    </div>
                    <button type="submit" class="w-full bg-orange-600 hover:bg-orange-700 text-white rounded-md px-3 py-2 my-4">
                        Log in
                    </button>

                    <div class="w-full text-sm p-4 mt-3 text-center text-gray-700 bg-gray-200">
                        <span>Don't have an account?</span>
                        <a href="/account/job-seeker/sign-up" class="text-orange-600">
                            Sign Up to Apply
                        </a>
                    </div>
                </form>    
            </div>
            <div class="mt-10">
                <a href="{{route('jobs.edit', $job)}}" class="text-white px-6 py-2 bg-orange-600 hover:bg-orange-700 rounded-md">
                    Edit
                </a>
            </div>
        </div>
    </div>
</x-app-layout>