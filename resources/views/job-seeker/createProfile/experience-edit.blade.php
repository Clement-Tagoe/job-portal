<x-app-layout>
    <div class="mt-16 w-full bg-gray-50">
        <div class="w-11/12 mx-auto flex space-x-6 pt-10">
            <div class="w-full lg:w-8/12">
                <div class="bg-white mb-6">
                    <h1 class="text-white bg-orange-500 px-3 py-3 rounded-t-sm">
                        Add Work Experience
                    </h1>
                    
                    <div class="p-5">
                        <form action="{{route('work-experience.update', $workExperience)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="flex space-x-3 text-gray-600 mb-3">
                                <input type="checkbox" name="no_work_experience" @checked(old('no_work_experience', $workExperience->no_work_experience))>
                                <label for="no_work_experience">I have no work experience</label>
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="employer" class="font-medium text-gray-700">Employer</label>
                                    <input type="text" name="employer" placeholder="Employer Name"
                                        value="{{old('employer', $workExperience->employer)}}"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('employer')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="job_title" class="font-medium text-gray-700">Job Title</label>
                                    <input type="text"  id="job_title" name="job_title" placeholder="Job Title"
                                        value="{{old('job_title', $workExperience->job_title)}}"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('job_title')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>
    
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="job_level" class="font-medium text-gray-700">Job Level</label>
                                    <select name="job_level" id="job_level" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        <option value="Graduate-Trainee" {{ old('job_level', $workExperience->job_level) == 'Graduate-Trainee' ? 'selected' : '' }}>Graduate-Trainee</option>
                                        <option value="Volunteer/Internship" {{ old('job_level', $workExperience->job_level) == 'Volunteer/Internship' ? 'selected' : '' }}>Volunteer/Internship</option>
                                        <option value="Entry-Level" {{ old('job_level', $workExperience->job_level) == 'Entry-level' ? 'selected' : '' }}>Entry-Level</option>
                                        <option value="Mid-Level" {{ old('job_level', $workExperience->job_level) == 'Mid-Level' ? 'selected' : '' }}>Mid-Level</option>
                                        <option value="Senior-Level" {{ old('job_level', $workExperience->job_level) == 'Senior-Level' ? 'selected' : '' }}>Senior-Level</option>
                                        <option value="Management-Level" {{ old('job_level', $workExperience->job_level) == 'Management-Level' ? 'selected' : '' }}>Management-Level</option>
                                        <option value="Executive-Level" {{ old('job_level', $workExperience->job_level) == 'Executive-Level' ? 'selected' : '' }}>Executive-Level</option>
                                        <option value="No-Experience" {{ old('job_level', $workExperience->job_level) == 'No-Experience' ? 'selected' : '' }}>No-Experience</option>
                                        <option value="Others" {{ old('job_level', $workExperience->job_level) == 'Others' ? 'selected' : '' }}>Others</option> 
                                    </select>
                                    @error('job_level')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="country" class="text-sm font-medium text-gray-700">Country</label>
                                    <select name="country" wire:model="country" id="country" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        <option value="Ghana" {{ old('country', $workExperience->country, $workExperience->country) == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                                        <option value="Afghanistan" {{ old('country', $workExperience->country) == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                                        <option value="Algeria" {{ old('country', $workExperience->country) == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                                        <option value="Angola" {{ old('country', $workExperience->country) == 'Angola' ? 'selected' : '' }}>Angola</option>
                                        <option value="Gabon" {{ old('country', $workExperience->country) == 'Gabon' ? 'selected' : '' }}>Gabon</option>
                                        <option value="Gambia" {{ old('country', $workExperience->country) == 'Gambia' ? 'selected' : '' }}>Gambia</option>
                                        <option value="Nigeria" {{ old('country', $workExperience->country) == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                                        <option value="Niger" {{ old('country', $workExperience->country) == 'Niger' ? 'selected' : '' }}>Niger</option>
                                        <option value="Togo" {{ old('country', $workExperience->country) == 'Togo' ? 'selected' : '' }}>Togo</option>
                                        <option value="Sierra" {{ old('country', $workExperience->country) == 'Sierra' ? 'selected' : '' }}>Sierra</option>
                                        <option value="Senegal" {{ old('country', $workExperience->country) == 'Senegal' ? 'selected' : '' }}>Senegal</option>
                                        <option value="Zimbabwe" {{ old('country', $workExperience->country) == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>
                                    </select>
                                    @error('country')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="jobIndustry_id" class="font-medium text-gray-700">Industry</label>
                                    <select name="jobIndustry_id" wire:model="jobIndustry_id" id="jobIndustry_id" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        @foreach ($industries as $industry)
                                            <option value="{{$industry->id}}" {{ old('jobIndustry_id', $workExperience->jobIndustry_id) == $industry->id ? 'selected' : '' }}>{{$industry->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('jobIndustry_id')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="jobFunction_id" class="font-medium text-gray-700">Job Function</label>
                                    <select name="jobFunction_id" id="jobFunction_id" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        @foreach ($functions as $function)
                                            <option value="{{$function->id}}" {{ old('jobFunction_id', $workExperience->jobFunction_id) == $function->id ? 'selected' : '' }}>{{$function->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('jobFunction_id')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="monthly_salary" class="font-medium text-gray-700">Monthly Salary</label>
                                    <select name="monthly_salary" id="monthly_salary" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        <option value="Less-than-180" {{ old('monthly_salary', $workExperience->monthly_salary) == 'Less-than-180' ? 'selected' : '' }}>Less-than-180</option>
                                        <option value="180-300" {{ old('monthly_salary', $workExperience->monthly_salary) == '180-300' ? 'selected' : '' }}>180-300</option>
                                        <option value="300-600" {{ old('monthly_salary', $workExperience->monthly_salary) == '300-600' ? 'selected' : '' }}>300-600</option>
                                        <option value="600-900" {{ old('monthly_salary', $workExperience->monthly_salary) == '600-900' ? 'selected' : '' }}>600-900</option>
                                        <option value="900-1,200" {{ old('monthly_salary', $workExperience->monthly_salary) == '900-1,200' ? 'selected' : '' }}>900-1,200</option>
                                        <option value="1,200-1,500" {{ old('monthly_salary', $workExperience->monthly_salary) == '1,200-1,500' ? 'selected' : '' }}>1,200-1,500</option>
                                        <option value="1,500-1,800" {{ old('monthly_salary', $workExperience->monthly_salary) == '1,500-1,800' ? 'selected' : '' }}>1,500-1,800</option>
                                        <option value="1,800-2,100" {{ old('monthly_salary', $workExperience->monthly_salary) == '1,800-2,100' ? 'selected' : '' }}>1,800-2,100</option>
                                        <option value="2,100-2,400" {{ old('monthly_salary', $workExperience->monthly_salary) == '2,100-2,400' ? 'selected' : '' }}>2,100-2,400</option>
                                        <option value="2,400-3,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '2,400-3,000' ? 'selected' : '' }}>2,400-3,000</option>
                                        <option value="3,600-4,200" {{ old('monthly_salary', $workExperience->monthly_salary) == '3,600-4,200' ? 'selected' : '' }}>3,600-4,200</option>
                                        <option value="4,200-4,800" {{ old('monthly_salary', $workExperience->monthly_salary) == '4,200-4,800' ? 'selected' : '' }}>4,200-4,800</option>
                                        <option value="4,800-5,400" {{ old('monthly_salary', $workExperience->monthly_salary) == '4,800-5,400' ? 'selected' : '' }}>4,800-5,400</option>
                                        <option value="5,400-6,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '5,400-6,000' ? 'selected' : '' }}>5,400-6,000</option>
                                        <option value="6,600-7,200" {{ old('monthly_salary', $workExperience->monthly_salary) == '6,600-7,200' ? 'selected' : '' }}>6,600-7,200</option>
                                        <option value="7,200-7,800" {{ old('monthly_salary', $workExperience->monthly_salary) == '7,200-7,800' ? 'selected' : '' }}>7,200-7,800</option>
                                        <option value="7,800-8,400" {{ old('monthly_salary', $workExperience->monthly_salary) == '7,800-8,400' ? 'selected' : '' }}>7,800-8,400</option>
                                        <option value="8,400-9,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '8,400-9,000' ? 'selected' : '' }}>8,400-9,000</option>
                                        <option value="9,000-10,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '9,000-10,000' ? 'selected' : '' }}>9,000-10,000</option>
                                        <option value="10,000-12,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '10,000-12,000' ? 'selected' : '' }}>10,000-12,000</option>
                                        <option value="12,000-15,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '12,000-15,000' ? 'selected' : '' }}>12,000-15,000</option>
                                        <option value="15,000-20,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '15,000-20,000' ? 'selected' : '' }}>15,000-20,000</option>
                                        <option value="20,000-30,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '20,000-30,000' ? 'selected' : '' }}>20,000-30,000</option>
                                        <option value="30,000-40,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '30,000-40,000' ? 'selected' : '' }}>30,000-40,000</option>
                                        <option value="40,000-50,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '40,000-50,000' ? 'selected' : '' }}>40,000-50,000</option>
                                        <option value="50,000-60,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '50,000-60,000' ? 'selected' : '' }}>50,000-60,000</option>
                                        <option value="60,000-70,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '60,000-70,000' ? 'selected' : '' }}>60,000-70,000</option>
                                        <option value="70,000-80,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '70,000-80,000' ? 'selected' : '' }}>70,000-80,000</option>
                                        <option value="80,000-90,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '80,000-90,000' ? 'selected' : '' }}>80,000-90,000</option>
                                        <option value="90,000-100,000" {{ old('monthly_salary', $workExperience->monthly_salary) == '90,000-100,000' ? 'selected' : '' }}>90,000-100,000</option>
                                        <option value="More-than-100,000" {{ old('monthly_salary', $workExperience->monthly_salary) == 'over-100,000' ? 'selected' : '' }}>More-than-100,000</option>
                                    </select>
                                    @error('monthly_salary')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="work_type" class="font-medium text-gray-700">Work Type</label>
                                    <select name="work_type" id="work_type" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        <option value="Full-Time" {{ old('work_type', $workExperience->work_type) == 'Full-Time' ? 'selected' : '' }}>Full-Time</option>
                                        <option value="Part-Time" {{ old('work_type', $workExperience->work_type) == 'Part-Time' ? 'selected' : '' }}>Part-Time</option>
                                        <option value="Contract" {{ old('work_type', $workExperience->work_type) == 'Contract' ? 'selected' : '' }}>Contract</option>
                                        <option value="Remote" {{ old('work_type', $workExperience->work_type) == 'Remote' ? 'selected' : '' }}>Remote</option>
                                        <option value="Internship/Graduate" {{ old('work_type', $workExperience->work_type) == "Internship/Graduate" ? 'selected' : '' }}>Internship/Graduate</option>
                                    </select>
                                    @error('work_type')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full">
                                    <label for="city" class="font-medium text-gray-700">City</label>
                                    <input type="text"  id="city" name="city" placeholder="City"
                                        value="{{old('city', $workExperience->city)}}"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('city')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="month" class="font-medium text-gray-700">Start date</label>
                                    <div class="flex flex-col md:flex-row md:space-x-2">
                                        <div class="w-full md:w-1/2">
                                            <select name="start_month" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                                <option value="">Month</option>
                                                <option value="January" {{old('start_month', $workExperience->start_month) == 'January' ? 'selected' : ''}}>January</option>
                                                <option value="February" {{old('start_month', $workExperience->start_month) == 'February' ? 'selected' : ''}}>February</option>
                                                <option value="March" {{old('start_month', $workExperience->start_month) == 'March' ? 'selected' : ''}}>March</option>
                                                <option value="April" {{old('start_month', $workExperience->start_month) == 'April' ? 'selected' : ''}}>April</option>
                                                <option value="May" {{old('start_month', $workExperience->start_month) == 'May' ? 'selected' : ''}}>May</option>
                                                <option value="June" {{old('start_month', $workExperience->start_month) == 'June' ? 'selected' : ''}}>June</option>
                                                <option value="July" {{old('start_month', $workExperience->start_month) == 'July' ? 'selected' : ''}}>July</option>
                                                <option value="August" {{old('start_month', $workExperience->start_month) == 'August' ? 'selected' : ''}}>August</option>
                                                <option value="September" {{old('start_month', $workExperience->start_month) == 'September' ? 'selected' : ''}}>September</option>
                                                <option value="October" {{old('start_month', $workExperience->start_month) == 'October' ? 'selected' : ''}}>October</option>
                                                <option value="November" {{old('start_month', $workExperience->start_month) == 'November' ? 'selected' : ''}}>November</option>
                                                <option value="December" {{old('start_month', $workExperience->start_month) == 'December' ? 'selected' : ''}}>December</option>
                                            </select>
                                            @error('start_month')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror    
                                        </div>
                                        
                                        <div class="w-full md:w-1/2">
                                            <select name="start_year" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                                <option value="">Year</option>
                                                @php
                                                    $year = date('Y');
                                                @endphp
                                                @for ($x = 0; $x <=50; $x++)
                                                    <option value="{{$year - $x}}" {{old('start_year', $workExperience->start_year) == $year - $x ? 'selected' : ''}}>{{$year - $x}}</option>
                                                @endfor  
                                            </select>
                                            @error('start_year')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="year" class="font-medium text-gray-700">End date</label>
                                    <div class="flex flex-col md:flex-row md:space-x-2">
                                        <div class="w-full md:w-1/2">
                                            <select name="end_month" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                                <option value="">Month</option>
                                                <option value="January" {{old('end_month', $workExperience->end_month) == 'January' ? 'selected' : ''}}>January</option>
                                                <option value="February" {{old('end_month', $workExperience->end_month) == 'February' ? 'selected' : ''}}>February</option>
                                                <option value="March" {{old('end_month', $workExperience->end_month) == 'March' ? 'selected' : ''}}>March</option>
                                                <option value="April" {{old('end_month', $workExperience->end_month) == 'April' ? 'selected' : ''}}>April</option>
                                                <option value="May" {{old('end_month', $workExperience->end_month) == 'May' ? 'selected' : ''}}>May</option>
                                                <option value="June" {{old('end_month', $workExperience->end_month) == 'June' ? 'selected' : ''}}>June</option>
                                                <option value="July" {{old('end_month', $workExperience->end_month) == 'July' ? 'selected' : ''}}>July</option>
                                                <option value="August" {{old('end_month', $workExperience->end_month) == 'August' ? 'selected' : ''}}>August</option>
                                                <option value="September" {{old('end_month', $workExperience->end_month) == 'September' ? 'selected' : ''}}>September</option>
                                                <option value="October" {{old('end_month', $workExperience->end_month) == 'October' ? 'selected' : ''}}>October</option>
                                                <option value="November" {{old('end_month', $workExperience->end_month) == 'November' ? 'selected' : ''}}>November</option>
                                                <option value="December" {{old('end_month', $workExperience->end_month) == 'December' ? 'selected' : ''}}>December</option>
                                            </select>
                                            @error('end_month')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror    
                                        </div>
                                        
                                        <div class="w-full md:w-1/2">
                                            <select name="end_year" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                                <option value="">Year</option>
                                                @php
                                                    $year = date('Y');
                                                @endphp
                                                @for ($x = 0; $x <=50; $x++)
                                                    <option value="{{$year - $x}}" {{old('end_year', $workExperience->end_year) == $year - $x ? 'selected' : ''}}>{{$year - $x}}</option>
                                                @endfor  
                                            </select>
                                            @error('end_year')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-3 text-gray-600 mb-3">
                                <input type="checkbox" name="currently_work_here" @checked(old('currently_work_here', $workExperience->currently_work_here))>
                                <label for="currently_work_here">I currently work here</label>
                            </div>

                            <div class="mb-6">
                                <label for="job_responsibilities" class="font-medium text-gray-700">Job Responsibilities</label>
                                @error('job_responsibilities')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                                <textarea name="job_responsibilities" id="job_responsibilities" cols="30" rows="5" class="w-full rounded-md">{{old('job_responsibilities', $workExperience->job_responsibilities)}}</textarea>
                                
                            </div>
                            <hr>
                            <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row justify-between p-5">
                                <a href="/job-seeker/profile" class="text-white text-center bg-gray-600 px-12 py-2 rounded-md uppercase">Cancel</a>
                                <button type="submit" class="text-white bg-blue-700 px-12 py-2 rounded-md uppercase">Save</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
                
            </div>

            <div class="hidden lg:w-4/12">

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js"></script>
    <script>
            tinymce.init({
                selector: 'textarea#job_responsibilities',
                menubar: false,
                plugins: 'code table lists image',
                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | table | image',
            });
    </script>
</x-app-layout>