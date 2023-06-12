<x-app-layout>
    <div class="w-11/12 mx-auto mt-20 flex flex-col items-center justify-center">
        <div class="text-center py-5">
            <h1 class="font-semibold text-3xl">Create a Job Seeker Account</h1>
            <p>Your new career is one click away</p>
            <span class="font-semibold text-3xl">STEP 1 of 2</span>
        </div>
        
        
        <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-3 border border-gray-200 hover:border-gray-400 bg-orange-100 rounded-lg p-5">
            <div class="md:w-3/12 flex flex-col">
                <h2 class="text-lg font-medium text-gray-700 mb-2">Personal Information</h2>
                <p class="text-gray-500 mb-2">This is information pertaining to you as an individual</p>
            </div>

            <div class="md:w-9/12 bg-white border border-gray-200 hover:border-gray-400 rounded-lg px-5">
                <form action="">
                    <div class="py-6">
                        <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                            <div class="w-full md:w-1/2">
                                <label for="firstname" class="text-sm font-medium text-gray-700">First Name</label>
                                <input type="text" 
                                    name="firstname" 
                                    value="{{old('firstname')}}"
                                    class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                >
                            </div>
    
                            <div class="w-full md:w-1/2">
                                <label for="lastname" class="text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" 
                                    name="lastname" 
                                    value="{{old('lastname')}}"
                                    class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                >
                            </div> 
                        </div>
    
                        <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6">
                            <div class="w-full md:w-1/2">
                                <label for="email" class="text-sm font-medium text-gray-700">Email Address</label>
                                <input type="text" placeholder="you@example.com"
                                    name="email" 
                                    value="{{old('email')}}"
                                    class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                >
                            </div>
    
                            <div class="w-full md:w-1/2">
                                <label for="password" class="text-sm font-medium text-gray-700">Create Password</label>
                                <input type="password" 
                                    name="password" 
                                    value="{{old('password')}}"
                                    class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                >
                            </div> 
                        </div>
                    </div>    

                    <hr class="border-1 border-gray-200">

                    <div class="py-6">
                        <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                            <div class="w-full">
                                <label for="firstname" class="text-sm font-medium text-gray-700">Date of birth</label>
                                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row md:space-x-6">
                                    <select name="day" id="" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Day</option>
                                    </select>
                                    <select name="day" id="" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Month</option>
                                    </select>
                                    <select name="day" id="" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Year</option>
                                    </select>
                                </div>
                                
                            </div>
                        </div>
    
                        <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6">
                            <div class="w-full md:w-1/3">
                                <label for="gender" class="text-sm font-medium text-gray-700">Gender</label>
                                <select name="gender" id="gender" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                    <option value="male">Male</option>
                                    <option value="male">Female</option>
                                </select>
                            </div>
    
                            <div class="w-full md:w-1/3">
                                <label for="nationality " class="text-sm font-medium text-gray-700">Nationality</label>
                                <select name="nationality " id="nationality " class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                    <option value="">Select</option>
                                </select>
                            </div>

                            <div class="w-full md:w-1/3">
                                <label for="email" class="text-sm font-medium text-gray-700">Location</label>
                                <select name="day" id="" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                    <option value="">Select</option>
                                </select>
                            </div>
                        </div>
                    </div>  
                    
                    <hr class="border-1 border-gray-200">

                    <div class="mt-6 mb-2">
                        <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                            <div class="w-full md:w-1/2">
                                <label for="country-code" class="text-sm font-medium text-gray-700">Country Code</label>
                                <select name="day" id="" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                    <option value="">Select</option>
                                </select>
                            </div>
    
                            <div class="w-full md:w-1/2">
                                <label for="mobile-number" class="text-sm font-medium text-gray-700">Mobile Number</label>
                                <input type="number" 
                                    name="mobile-number" 
                                    value="{{old('mobile-number')}}"
                                    class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                >
                            </div> 
                        </div>
                    </div>
                    
                    <div class="flex space-x-2 mb-4">
                        <span class="text-gray-500">Already have an account?</span>
                        <a href="/account/login" class="text-orange-600">Log in</a>
                    </div>

                    <hr class="border-1 border-gray-200">

                    <div class="flex flex-col md:flex-row my-4">
                        <span class="w-full md:w-1/2 text-red-500"></span>
                        <div class="w-full flex justify-end md:w-1/2">
                            <button class="w-full flex items-center justify-center text-center text-white md:w-32 bg-orange-600 px-6 py-2 rounded-md">
                                <span class="pr-2">Next</span>
                                <span class="bg-white rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                                    </svg>   
                                </span> 
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="text-center py-8">
            <span class="font-semibold text-3xl">STEP 2 of 2</span>
        </div>
        
        
        <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-3 border border-gray-200 hover:border-gray-400 bg-orange-100 rounded-lg p-5 mb-8">
            <div class="md:w-3/12 flex flex-col">
                <h2 class="text-lg font-medium text-gray-700 mb-2">Work Information</h2>
                <p class="text-gray-500 mb-2">This is information pertaining to your past work experience and your qualifications</p>
            </div>

            <div class="md:w-9/12 bg-white border border-gray-200 hover:border-gray-400 rounded-lg px-5">
                <form action="">
                    <div class="py-6">
                        <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                            <div class="w-full md:w-1/2">
                                <label for="firstname" class="text-sm font-medium text-gray-700">Highest Qualification</label>
                                <select name="day" id="" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                    <option value="">Select</option>
                                </select>
                            </div>
    
                            <div class="w-full md:w-1/2">
                                <label for="lastname" class="text-sm font-medium text-gray-700">Current Job Function</label>
                                <select name="day" id="" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                    <option value="">Select</option>
                                </select>
                            </div> 
                        </div>
    
                        <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6">
                            <div class="w-full md:w-1/2">
                                <label for="email" class="text-sm font-medium text-gray-700">Years of Experience</label>
                                <select name="day" id="" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                    <option value="">Select</option>
                                </select>
                            </div>
    
                            <div class="w-full md:w-1/2">
                                <label for="password" class="text-sm font-medium text-gray-700">Availability</label>
                                <select name="day" id="" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                    <option value="">Select</option>
                                </select>
                            </div> 
                        </div>
                    </div>    

                    <hr class="border-1 border-gray-200">

                    <div class="py-6">
                        <div class="w-full flex flex-col space-y-3 md:space-y-0 mb-3">
                            <div class="">
                                <input type="file" class="">
                            </div>
                            
                            <div class="pt-4">
                                <span class="text-sm text-gray-400">
                                    Optionally upload a CV no larger than 10MB for file types .pdf .doc .docx .rtf
                                </span>
                                <br>
                                <span class="text-sm text-gray-500">
                                    Please note: You will need to upload a CV to apply for jobs, however you can skip the CV upload on sign up.
                                </span>
                            </div>

                            <div class="pt-4">
                                <p class="text-gray-700 mb-2">
                                    Would you like a CV touch-up?
                                </p>
                                
                                <p class="text-sm text-gray-500">
                                    Job portal's CV experts can help make your CV more attractive to employers. Prices start from Ghs 200.
                                </p>
                                
                                <a href="" class="text-orange-600 block mt-2">
                                    Learn More
                                </a>
                            </div>
                        </div> 
                    </div>  
                    
                    <hr class="border-1 border-gray-200">

                    <div class="mt-6 mb-2">
                        <div class="w-full flex flex-col mb-3">
                            <p class="text-gray-700 mb-3">By clicking "Create Your Account", you agree to our <a href="" class="text-orange-600">Terms & Conditions</a> and <a href="" class="text-orange-600">Privacy Policy</a></p>
                            <div class="">
                                <div class="flex space-x-2">
                                    <input type="checkbox">
                                    <label for="country-code" class="text-sm text-gray-700">I would like to receive top jobs and career tips.</label>
                                </div>
        
                                <div class="flex space-x-2">
                                    <input type="checkbox">
                                    <label for="country-code" class="text-sm text-gray-700">Sign me up for email and browser Job alerts.</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="border-1 border-gray-200">

                    <div class="flex flex-col md:flex-row my-4">
                        <span class="w-full md:w-1/2 text-red-500"></span>
                        <div class="w-full flex justify-end md:w-1/2">
                            <button class="w-full flex items-center justify-center text-center text-white md:w-44 bg-orange-600 px-4 py-2 rounded-md">
                                Create Your Account
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>