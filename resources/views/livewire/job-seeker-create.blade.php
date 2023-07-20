<div class="w-11/12 mx-auto mt-20 flex flex-col items-center justify-center">
    <div class="text-center py-5">
        <h1 class="font-semibold text-3xl">Create a Job Seeker Account</h1>
        <p>Your new career is one click away</p>
    </div>
    

    <form wire:submit.prevent="storeJobSeeker" method="POST">

        {{-- Step One--}}

        @if($currentStep == 1)
            <div class="step-one">
                <div class="text-center py-2">
                    <span class="font-semibold text-3xl">STEP 1 of 2</span>
                </div>
                
                <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-3 border border-gray-200 hover:border-gray-400 bg-orange-100 rounded-lg p-5">
                    <div class="md:w-3/12 flex flex-col">
                        <h2 class="text-lg font-medium text-gray-700 mb-2">Personal Information</h2>
                        <p class="text-gray-500 mb-2">This is information pertaining to you as an individual</p>
                    </div>

                    <div class="md:w-9/12 bg-white border border-gray-200 hover:border-gray-400 rounded-lg px-5">
                        <div class="py-6">
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="first_name" class="text-sm font-medium text-gray-700">First Name</label>
                                    <input wire:model.defer="first_name" type="text" class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1">
                                    @error('first_name')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="w-full md:w-1/2">
                                    <label for="last_name" class="text-sm font-medium text-gray-700">Last Name</label>
                                    <input wire:model.defer="last_name" type="text" class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1">
                                    @error('last_name')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6">
                                <div class="w-full md:w-1/2">
                                    <label for="email" class="text-sm font-medium text-gray-700">Email Address</label>
                                    <input wire:model.defer="email" type="text" placeholder="you@example.com" class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1">
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="w-full md:w-1/2">
                                    <label for="password" class="text-sm font-medium text-gray-700">Create Password</label>
                                    <div class="flex mb-2"> 
                                        <div class="relative flex-1 col-span-4" x-data="{ show: true }">
                                            <input class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                                    id="password"
                                                    :type="show ? 'password' : 'text'"
                                                    name="password"
                                                    wire:model="password"
                                            >
                                     
                                            <button type="button" class="flex absolute inset-y-0 right-0 items-center pr-3" @click="show = !show" :class="{'hidden': !show, 'block': show }">
                                                <!-- Heroicon name: eye -->
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </button>
                                            <button type="button" class="flex absolute inset-y-0 right-0 items-center pr-3" @click="show = !show" :class="{'block': !show, 'hidden': show }">
                                                <!-- Heroicon name: eye-slash -->
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div> 
                                    <span class="text-sm"> 
                                        <span class="font-semibold">Password strength:</span> {{ $strengthLevels[$strengthScore] ?? 'Weak' }}
                                    </span>
                                 
                                    <progress value="{{ $strengthScore }}" max="4" class="w-full"></progress>
                                    @error('password')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>
                        </div>    

                        <hr class="border-1 border-gray-200">

                        <div class="py-6">
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full">
                                    <label for="date_of_birth" class="text-sm font-medium text-gray-700">Date of birth</label>
                                    <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row md:space-x-6">
                                        <div class="flex flex-col w-full">
                                            <select wire:model.defer="dob_day" name="dob_day" id="dob_day" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                                <option value="">Day</option>
                                                @for ($i = 1; $i <= 31; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>
                                            @error('dob_day')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col w-full">
                                            <select wire:model.defer="dob_month" name="dob_month" id="dob_month" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                                <option value="">Month</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            @error('dob_month')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="flex flex-col w-full">
                                            <select wire:model.defer="dob_year" name="dob_year" id="dob_year" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                                <option value="">Year</option>
                                                @php
                                                $year = date('Y') - 15;
                                                @endphp
                                                @for ($i = 0; $i <= 85; $i++)
                                                    <option value="{{$year - $i}}">{{$year - $i}}</option>
                                                @endfor
                                            </select>
                                            @error('dob_year')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6">
                                <div class="w-full md:w-1/3">
                                    <label for="gender" class="text-sm font-medium text-gray-700">Gender</label>
                                    <select wire:model.defer="gender" name="gender" id="gender" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    @error('gender')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="w-full md:w-1/3">
                                    <label for="nationality " class="text-sm font-medium text-gray-700">Nationality</label>
                                    <select wire:model.defer="nationality" name="nationality " id="nationality " class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        <option value="Ghanaian">Ghanaian</option>
                                        <option value="Algerian">Algerian</option>
                                        <option value="Angolan">Angolan</option>
                                        <option value="Gabonese">Gabonese</option>
                                        <option value="Gambian">Gambian</option>
                                        <option value="Nigerian">Nigerian</option>
                                        <option value="Nigerien">Nigerien</option>
                                        <option value="Togolese">Togolese</option>
                                        <option value="Sierra Leonean">Sierra Leonean</option>
                                        <option value="Senegalese">Senegalese</option>
                                        <option value="Zimbabwean">Zimbabwean</option>
                                    </select>
                                    @error('nationality')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="w-full md:w-1/3">
                                    <label for="location_id" class="text-sm font-medium text-gray-700">Location</label>
                                    <select wire:model.defer="location_id" name="location_id" id="location_id" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        @foreach ($locations as $location)
                                            <option value="{{$location->id}}">{{$location->name}}</option>   
                                        @endforeach
                                    </select>
                                    @error('location_id')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>  
                        
                        <hr class="border-1 border-gray-200">

                        <div class="mt-6 mb-2">
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="country_code" class="text-sm font-medium text-gray-700">Country Code</label>
                                    <select wire:model.defer="country_code" name="country_code" id="country_code" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        <option value="Ghana (+233)">Ghana (+233)</option>
                                        <option value="Afghanistan (+93)">Afghanistan (+93)</option>
                                        <option value="Algeria (+213)">Algeria (+213)</option>
                                        <option value="Angola (+244)">Angola (+244)</option>
                                        <option value="Gabon (+241)">Gabon (+241)</option>
                                        <option value="Gambia (+220)">Gambia (+220)</option>
                                        <option value="Nigeria (+234)">Nigeria (+234)</option>
                                        <option value="Niger (+277)">Niger (+277)</option>
                                        <option value="Togo (+228)">Togo (+228)</option>
                                        <option value="Sierra Leone (+232)">Sierra Leone (+232)</option>
                                        <option value="Senegal (+221)">Senegal (+221)</option>
                                        <option value="Zimbabwe (+263)">Zimbabwe (+263)</option>
                                    </select>
                                    @error('country_code')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="w-full md:w-1/2">
                                    <label for="mobile_number" class="text-sm font-medium text-gray-700">Mobile Number</label>
                                    <input wire:model.defer="mobile_number" type="text" class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1">
                                    @error('mobile_number')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>
                        </div>
                        
                        <div class="flex space-x-2 mb-4">
                            <span class="text-gray-500">Already have an account?</span>
                            <a href="/account/login" class="text-orange-600">Log in</a>
                        </div>

                        <hr class="border-1 border-gray-200">

                    </div>
                </div>
            </div>
        @endif

        {{-- Step Two--}}
        @if($currentStep == 2)
            <div class="step-two">

                <div class="text-center py-8">
                    <span class="font-semibold text-3xl">STEP 2 of 2</span>
                </div>
                
                
                <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-3 border border-gray-200 hover:border-gray-400 bg-orange-100 rounded-lg p-5 mb-8">
                    <div class="md:w-3/12 flex flex-col">
                        <h2 class="text-lg font-medium text-gray-700 mb-2">Work Information</h2>
                        <p class="text-gray-500 mb-2">This is information pertaining to your past work experience and your qualifications</p>
                    </div>

                    <div class="md:w-9/12 bg-white border border-gray-200 hover:border-gray-400 rounded-lg px-5">
                        
                        <div class="py-6">
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="highest_qualification" class="text-sm font-medium text-gray-700">Highest Qualification</label>
                                    <select wire:model.defer="highest_qualification" name="highest_qualification" id="highest_qualification" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        <option value="Degree">Degree</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="High-School (S.S.C.E)">High-School (S.S.C.E)</option>
                                        <option value="HND">HND</option>
                                        <option value="MBA/MSC">MBA/MSC</option>
                                        <option value="MBBS">MBBS</option>
                                        <option value="MPhil">MPhil</option>
                                        <option value="Vocational">Vocational</option>
                                        <option value="Others">Others</option> 
                                    </select>
                                    @error('highest_qualification')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="w-full md:w-1/2">
                                    <label for="current_jobFunction_id" class="text-sm font-medium text-gray-700">Current Job Function</label>
                                    <select wire:model.defer="current_jobFunction_id" name="day" id="" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        @foreach ($functions as $function)
                                            <option value="{{$function->id}}">{{$function->name}}</option>  
                                        @endforeach
                                    </select>
                                    @error('current_jobFunction_id')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6">
                                <div class="w-full md:w-1/2">
                                    <label for="experience" class="text-sm font-medium text-gray-700">Years of Experience</label>
                                    <select wire:model.defer="experience" name="experience" id="experience" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        <option value="No-Experience/Less-than-1-year" {{ old('experience') == 'No-Experience/Less-than-1-year' ? 'selected' : '' }}>No-Experience/Less-than-1-year</option>
                                        <option value="1-year">1-year</option>
                                        <option value="2-years">2-years</option>
                                        <option value="3-years">3-years</option>
                                        <option value="4-years">4-years</option>
                                        <option value="5-years">5-years</option>
                                        <option value="6-years">6-years</option>
                                        <option value="7-years">7-years</option>
                                        <option value="8-years">8-years</option>
                                        <option value="9-years">9-years</option>
                                        <option value="10-years">10-years</option>
                                        <option value="11-years">11-years</option>
                                        <option value="12-years">12-years</option>
                                        <option value="13-years">13-years</option>
                                        <option value="14-years">14-years</option>
                                        <option value="15-years">15-years</option>
                                        <option value="16-years">16-years</option>
                                        <option value="17-years">17-years</option>
                                        <option value="18-years">18-years</option>
                                        <option value="19-years">19-years</option>
                                        <option value="20-years">20-years</option>
                                        <option value="More-than-20-years">More-than-20-years</option>
                                    </select>
                                    @error('experience')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="w-full md:w-1/2">
                                    <label for="availability" class="text-sm font-medium text-gray-700">Availability</label>
                                    <select wire:model.defer="availability" name="availability" id="availability" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        <option value="Immediately">Immediately</option>
                                        <option value="1-Week">1-Week</option>
                                        <option value="2-Weeks">2-Weeks</option>
                                        <option value="3-Weeks">3-Weeks</option>
                                        <option value="1-Month">1-Month</option>
                                        <option value="2-Months">2-Months</option>
                                        <option value="More than 3-Months">More than 3-Months</option>
                                    </select>
                                    @error('availability')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>
                        </div>    

                        <hr class="border-1 border-gray-200">

                        <div class="py-6">
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 mb-3">
                                <div class="">
                                    <input wire:model.defer="resume" type="file" class="">
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
                                        <input wire:model.defer="career_tips" type="checkbox" value="checked" >
                                        <label for="career_tips" class="text-sm text-gray-700">I would like to receive top jobs and career tips.</label>
                                        @error('career_tips')
                                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                        @enderror
                                    </div>
            
                                    <div class="flex space-x-2">
                                        <input wire:model.defer="job_alerts" type="checkbox" value="checked">
                                        <label for="job_alerts" class="text-sm text-gray-700">Sign me up for email and browser Job alerts.</label>
                                        @error('job_alerts')
                                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        @endif   

        <div class="action-buttons flex md:justify-between space-x-2 md:space-x-0 my-8">

            @if($currentStep == 1)
                <div></div>
            @endif

            @if($currentStep == 2)
                <button type="button" wire:click="decreaseStep()" class="w-full flex items-center justify-center text-center text-white md:w-32 bg-orange-600 px-6 py-2 rounded-md">
                    <span class="pr-2">Back</span>
                    <span class="bg-white rounded-md px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>                                                   
                    </span> 
                </button>
            @endif

            @if($currentStep == 1)
                <button type="button" wire:click="increaseStep()" class="w-full flex items-center justify-center text-center text-white md:w-32 bg-orange-600 px-6 py-2 rounded-md">
                    <span class="pr-2">Next</span>
                    <span class="bg-white rounded-md px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>                                 
                    </span> 
                </button>
            @endif
            
            @if($currentStep == 2)
                <button type="submit" class="w-full flex items-center justify-center text-center text-white md:w-52 bg-orange-600 px-4 py-2 rounded-md">
                    Create Your Account
                </button>
            @endif
        </div>   
    </form>    
</div>