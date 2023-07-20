<x-app-layout>
    <div class="mt-16 w-full bg-gray-50 pb-6">

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

        <div class="w-11/12 md:w-9/12 mx-auto mt-10">
            <div class="bg-white p-5 border border-gray-200 rounded-lg mb-10">
                <div class="flex flex-col items-center md:flex-row md:space-x-5">
                    <div class="text-gray-600">
                        @if (is_null($user->photo))
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-28 h-28">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        @endif
                        @if (!is_null($user->photo))
                            <img class="w-28 h-28 rounded-full" src="{{ asset('storage/' . $user->photo)}}" alt="">
                        @endif
                        
                    </div>
                    <div class="">
                        <h1 class="font-medium text-xl">{{$user->first_name . ' ' . $user->last_name}}</h1>
                        <p class="text-gray-600 font-medium">{{$user->professional_headline ?? ' **Professional Headline** '}}</p>
                        <p class="text-gray-600">{{$user->jobLocation->name ?? '**Location**'}}</p>
                    </div>
                </div>
                <hr class="mt-2">
                <div class="flex justify-end mt-2">
                    <a href="/job-seeker/employment-availability" class="flex space-x-2 px-3 bg-orange-600 hover:bg-orange-500 text-white p-2 rounded-2xl">
                        <span>Edit</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 border-b border-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>      
                    </a>
                </div>
            </div>
            
            <div class="bg-white p-5 border border-gray-200 rounded-lg mb-10">
                <h2 class="font-medium">Personal Information</h2>
                <div class="md:w-9/12 grid grid-cols-1 sm:grid-cols-2 mt-5">
                    <div class="">
                        <h4 class="text-gray-500">First Name</h4>
                        <p>{{$user->first_name}}</p>
                    </div>
                    <div class="">
                        <h4 class="text-gray-500">Last Name</h4>
                        <p>{{$user->last_name}}</p>
                    </div>
                </div>
                <div class="md:w-9/12 grid grid-cols-1 sm:grid-cols-2 mt-5">
                    <div class="">
                        <h4 class="text-gray-500">Email Address</h4>
                        <p>{{$user->email}}</p>
                    </div>
                    <div class="">
                        <h4 class="text-gray-500">Mobile Number</h4>
                        <p>{{$user->mobile_number}}</p>
                    </div>
                </div>
                <div class="md:w-9/12 grid grid-cols-1 sm:grid-cols-2 mt-5">
                    <div class="">
                        <h4 class="text-gray-500">Professional Headline</h4>
                        <p>{{$user->professional_headline}}</p>
                    </div>
                    <div class="">
                        <h4 class="text-gray-500">Location</h4>
                        <p>{{$user->jobLocation->name ?? ''}}</p>
                    </div>
                </div>
                
                <hr class="mt-2">
                <div class="flex justify-end">
                    <a href="/job-seeker/employment-availability" class="flex space-x-2 px-3 bg-orange-600 hover:bg-orange-500 text-white p-2 rounded-2xl mt-2">
                        <span>Edit</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 border-b border-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>      
                    </a>
                </div>
            </div>

            <div class="bg-white p-5 border border-gray-200 rounded-lg mb-10">
                <h2 class="font-medium">Employment & Availability</h2>
                <p class="text-gray-500 mb-3 italic">Keeping this section up to date will help employers & recruiters find you. They will know the field you are in, what your preferred industries are, and if you are actively looking.</p>
                <hr class="mt-2">
                <div class="md:w-9/12 grid grid-cols-1 sm:grid-cols-2 mt-5">
                    <div class="">
                        <h4 class="text-gray-500">Highest Qualification</h4>
                        <p>{{$user->highest_qualification}}</p>
                    </div>
                    <div class="">
                        <h4 class="text-gray-500">Current Job Function</h4>
                        <p>{{$user->currentJobFunction->name}}</p>
                    </div>
                </div>

                <div class="md:w-9/12 grid grid-cols-1 sm:grid-cols-2 mt-5">
                    <div class="">
                        <h4 class="text-gray-500">Preferred Job Function</h4>
                        <p>{{$user->preferredJobFunction->name ?? ''}}</p>
                    </div>
                    <div class="">
                        <h4 class="text-gray-500">Years of Experience</h4>
                        <p>{{$user->experience}}</p>
                    </div>
                </div>

                <div class="md:w-9/12 grid grid-cols-1 sm:grid-cols-2 mt-5">
                    <div class="">
                        <h4 class="text-gray-500">Work Type</h4>
                        <p>{{$user->work_type}}</p>
                    </div>
                    <div class="">
                        <h4 class="text-gray-500">Availability</h4>
                        <p>{{$user->availability}}</p>
                    </div>
                </div>

                <div class="md:w-9/12 grid grid-cols-1 sm:grid-cols-2 mt-5">
                    <div class="">
                        <h4 class="text-gray-500">Preferred Job Location</h4>
                        <p>{{$user->preferredJobLocation->name ?? ''}}</p>
                    </div>
                    <div class="">
                        <h4 class="text-gray-500">Monthly Salary Expectation (Gross)</h4>
                        <p>{{$user->salary_currency . ' ' . $user->salary_amount}}</p>
                    </div>
                </div>

                <hr class="mt-2">
                <div class="flex justify-end">
                    <a href="/job-seeker/employment-availability" class="flex space-x-2 px-3 bg-orange-600 hover:bg-orange-500 text-white p-2 rounded-2xl mt-2">
                        <span>Edit</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 border-b border-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>      
                    </a>
                </div>
            </div>

            <div class="bg-white p-5 border border-gray-200 rounded-lg mb-10">
                <h2 class="font-medium">About Me</h2>
                <p class="text-gray-500 mb-3 italic">Give a short overview of your career history and skills.</p>
                <hr class="mt-2">
                <div>
                    <p>{{$user->about_me}}</p>
                </div>
                <hr class="mt-2">
                <div class="flex justify-end">
                    <a href="/job-seeker/about-me" class="flex space-x-2 px-3 bg-orange-600 hover:bg-orange-500 text-white p-2 rounded-2xl mt-2">
                        <span>{{is_null($user->about_me) ? 'Add' : 'Edit'}}</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 border-b border-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>      
                    </a>
                </div>
            </div>

            <div class="bg-white p-5 border border-gray-200 rounded-lg mb-10">
                <h2 class="font-medium">Work Experience</h2>
                <p class="text-gray-500 mb-3 italic">Add your Work Experience. Such as an internship, part-time work or long term specialised experience.</p>

                <hr class="mt-2">

                @foreach ($user->workExperiences as $workExperience)
                    <div class="mt-2">
                        <h2 class="text-gray-600 font-medium">{{$workExperience->job_title .' at ' . $workExperience->employer }}</h2>
                        <div class="flex flex-col md:flex-row md:items-center md:space-x-3 text-gray-500">
                            <p>{{$workExperience->city}}</p>
                            <span class="hidden md:inline-block h-3 border-r border-gray-500 border-1"></span>
                            <p>{{$workExperience->start_month .' '. $workExperience->start_year . ' - ' . $workExperience->end_month .' '. $workExperience->end_year}}</p>
                            {{-- <p>{{Carbon\Carbon::parse($workExperience->start_date)->format('F Y') . ' - ' . Carbon\Carbon::parse($workExperience->end_date)->format('F Y') . ' ' . '('.Carbon\Carbon::parse($workExperience->start_date)->diffForHumans(Carbon\Carbon::parse($workExperience->end_date), true, false, 6).')'}}</p> --}}
                            
                        </div>
                        <p class="text-gray-500">Entry level</p>
                        <div class="flex flex-col md:flex-row md:items-center md:space-x-3 text-gray-500 mb-3">
                            <p>{{$workExperience->jobIndustry->name}}</p>
                            <span class="hidden md:inline-block h-3 border-r border-gray-500 border-1"></span>
                            <p>{{$workExperience->jobFunction->name}}</p>
                            <span class="hidden md:inline-block h-3 border-r border-gray-500 border-1"></span>
                            <p>{{$workExperience->monthly_salary}}</p>
                            <span class="hidden md:inline-block h-3 border-r border-gray-500 border-1"></span>
                            <p>{{$workExperience->work_type}}</p>
                        </div>

                        <hr class="mb-2">
                    </div>
                @endforeach

                <div class="flex justify-between">
                    <a href="/job-seeker/experiences" class="text-orange-600 uppercase border border-orange-600 hover:bg-orange-200 px-3 rounded-2xl mt-2 py-2 cursor-pointer">View All</a>
                    <a href="/job-seeker/experience/create" class="flex space-x-2 px-3 bg-orange-600 hover:bg-orange-500 text-white py-2 rounded-2xl mt-2">
                        <span>Add</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 border-b border-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>      
                    </a>
                </div>
            </div>

            <div class="bg-white p-5 border border-gray-200 rounded-lg mb-10">
                <h2 class="font-medium">Education</h2>
                <p class="text-gray-500 mb-3 italic">List your qualifications here</p>
                <hr class="mt-2">

                @foreach ($user->educations as $education)
                    <div class="mt-2">
                        <h2 class="text-gray-600 font-medium">{{$education->school_name}}</h2>
                        <div class="flex flex-col md:flex-row md:items-center md:space-x-3 text-gray-500 mb-3">
                            <p>: {{$education->description}}</p>
                            <span class="hidden md:inline-block h-3 border-r border-gray-500 border-1"></span>
                            <p>{{$education->start_month .' '. $education->start_year . ' - ' . $education->end_month .' '. $education->end_year}}</p>
                            {{-- <p>{{Carbon\Carbon::parse($education->start_date)->format('F Y') . ' - ' . Carbon\Carbon::parse($education->end_date)->format('F Y')}}</p> --}}
                        </div>
                        <hr class="mb-2">
                    </div> 
                @endforeach

                <div class="flex justify-between">
                    <a href="/job-seeker/educations" class="text-orange-600 uppercase border border-orange-600 hover:bg-orange-200 px-3 rounded-2xl mt-2 py-2 cursor-pointer">View All</a>
                    <a href="/job-seeker/education/create" class="flex space-x-2 px-3 bg-orange-600 hover:bg-orange-500 text-white py-2 rounded-2xl mt-2">
                        <span>Add</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 border-b border-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>      
                    </a>
                </div>
            </div>

            @livewire('job-skills')

            <div class="bg-white p-5 border border-gray-200 rounded-lg mb-10">
                <h2 class="font-medium">Associations</h2>
                <p class="text-gray-500 italic mb-3">Part of a professional association or organization? Add them to help enrich your professional profile.</p>
                <hr class="mb-2">
                <div class="flex justify-end mt-2">
                    <button class="flex space-x-2 text-gray-400 border border-gray-400 p-2 rounded-2xl">
                        <span>Add</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 border-b border-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>      
                    </button>
                </div>
            </div>

            <div class="bg-white p-5 border border-gray-200 rounded-lg mb-10">
                <h2 class="font-medium">Certificates & Awards</h2>
                <p class="text-gray-500 italic mb-3">Received any certificates or awards? Show them off to help enrich your career profile

                </p>
                <hr class="mb-2">
                <div class="flex justify-end mt-2">
                    <button class="flex space-x-2 text-gray-400 border border-gray-400 p-2 rounded-2xl">
                        <span>Add</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 border-b border-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>      
                    </button>
                </div>
            </div>

            <div class="bg-white p-5 border border-gray-200 rounded-lg mb-10">
                <h2 class="font-medium">Cover Letter</h2>
                <p class="text-gray-500 italic mb-3">Highlight your experience, skills and areas of expertise, as well as what you could bring to the company and what makes you the best candidate for the job.</p>
                <hr class="mb-2">
                <div class="flex justify-end mt-2">
                    <button class="flex space-x-2 text-gray-400 border border-gray-400 p-2 rounded-2xl">
                        <span>Add</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 border-b border-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>      
                    </button>
                </div>
            </div>

            <div class="bg-white p-5 border border-gray-200 rounded-lg mb-10">
                <h2 class="font-medium">CV</h2>
                <p class="text-gray-500 italic mb-3">You can use your uploaded CV to quickly apply for a job.</p>
                <hr class="mb-2">
                <div class="flex justify-between mt-2">
                    <button class="text-red-500 uppercase font-medium">
                        Delete
                    </button>
                    <div class="flex space-x-8">
                        <a class="text-gray-400 border border-gray-400 p-2 rounded-2xl">
                            Replace CV    
                        </a>
                        <a class="flex space-x-2 text-gray-400 border border-gray-400 p-2 rounded-2xl">
                            <span>Add</span> 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 border-b border-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            </svg>      
                        </a>
                    </div>
                    
                </div>
            </div>

            <div class="bg-white p-5 border border-gray-200 rounded-lg mb-10">
                <h2 class="font-medium">Projects & Portfolio</h2>
                <p class="text-gray-500 italic mb-3">Add links to your online projects and portfolios or sites such as LinkedIn.</p>
                <hr class="mb-2">
                <div class="flex justify-end mt-2">
                    <button class="flex space-x-2 text-gray-400 border border-gray-400 p-2 rounded-2xl">
                        <span>Add</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 border-b border-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>      
                    </button>
                </div>
            </div>

            <div class="bg-white p-5 border border-gray-200 rounded-lg mb-10">
                <h2 class="font-medium">Download Your Career Profile</h2>
                <p class="text-gray-500 mb-3">Completing your Career Profile makes it easier for employers to find you and will also be sent to employers & recruiters when you apply for a job, so keeping it up to date is very important.</p>
                <hr class="mb-2">
                
                <div class="flex flex-col space-y-3 md:space-y-0 md:flex-row md:justify-between pt-3">
                    <span class="text-gray-500">Your Career Profile is ready to be downloaded.</span>
                    <a href="" class="bg-orange-600 uppercase font-medium px-8 py-2 text-white rounded-md text-center">Download</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>