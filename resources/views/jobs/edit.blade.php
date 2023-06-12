<x-app-layout>
    <div class="mt-16 w-full mb-10">
        <div class="w-full md:h-44 flex flex-col justify-center p-5 text-white bg-gradient-to-r from-orange-700 from-20% via-orange-600 via-50% to-orange-400 to-90%">
            <h1 class="text-3xl font-semibold mb-1">Find the right talent</h1>
            <p class="text-gray-200">Looking for job candidates? Post available vacancies and find the ralent talent for your organisation!</p>
        </div>

        <div class="w-11/12 md:w-9/12 mx-auto border border-gray-100 bg-orange-100 rounded-md p-5 my-8">
            <h1 class="text-xl font-semibold text-gray-600">Edit Job Details</h1>
            <p class="text-gray-500">Please edit the details of your job below</p>
            <form action="{{route('jobs.update', $job)}}" method="POST" class="my-8">
                @csrf
                @method('PUT')
                <div class="w-full mb-3">
                    <label for="title" class="text-sm font-medium text-gray-700">Job Title</label>
                    <input type="text" 
                        name="title" 
                        value="{{old('title', $job->title)}}"
                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                    >
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                    <div class="w-full md:w-1/3">
                        <label for="jobFunction_id" class="text-sm font-medium text-gray-700">Job Functions</label>
                        <select name="jobFunction_id" id="jobFunction_id" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                            <option value="">Select...</option>
                            @foreach ($functions as $function)
                                <option value="{{$function->id}}" {{ old('jobFunction_id', $job->jobFunction_id) == $function->id ? 'selected' : '' }}>{{$function->name}}</option>
                            @endforeach
                        </select>
                        @error('jobFunction_id')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="w-full md:w-1/3">
                        <label for="jobIndustry_id" class="text-sm font-medium text-gray-700">Industry</label>
                        <select name="jobIndustry_id" id="jobIndustry_id" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                            <option value="">Select...</option>
                            @foreach ($industries as $industry)
                                <option value="{{$industry->id}}" {{ old('jobIndustry_id', $job->jobIndustry_id) == $industry->id ? 'selected' : '' }}>{{$industry->name}}</option>
                            @endforeach
                        </select>
                        @error('jobIndustry_id')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div> 

                    <div class="w-full md:w-1/3">
                        <label for="type" class="text-sm font-medium text-gray-700">Work Type</label>
                        <select name="type" id="type" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                            <option value="">Select...</option>
                            <option value="Full-Time" {{ old('type', $job->type) == 'Full-Time' ? 'selected' : '' }}>Full-Time</option>
                            <option value="Part-Time" {{ old('type', $job->type) == 'Part-Time' ? 'selected' : '' }}>Part-Time</option>
                            <option value="Contract" {{ old('type', $job->type) == 'Contract' ? 'selected' : '' }}>Contract</option>
                            <option value="Remote" {{ old('type', $job->type) == 'Remote' ? 'selected' : '' }}>Remote</option>
                            <option value="Internship/Graduate" {{ old('type', $job->type) == "Internship/Graduate" ? 'selected' : '' }}>Internship/Graduate</option>
                        </select>
                        @error('type')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div> 
                </div>

                <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                    <div class="w-full md:w-1/3">
                        <label for="jobLocation_id" class="text-sm font-medium text-gray-700">Location</label>
                        <select name="jobLocation_id" id="jobLocation_id" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                            <option value="">Select...</option>
                            @foreach ($locations as $location)
                                <option value="{{$location->id}}" {{ old('jobLocation_id', $job->jobLocation_id) == $location->id ? 'selected' : '' }}>{{$location->name}}</option>
                            @endforeach
                        </select>
                        @error('jobLocation_id')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="w-full md:w-1/3">
                        <label for="qualification" class="text-sm font-medium text-gray-700">Minimum Qualification</label>
                        <select name="qualification" id="qualification" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                            <option value="">Select...</option>
                            <option value="Degree" {{ old('qualification', $job->qualification) == 'Degree' ? 'selected' : '' }}>Degree</option>
                            <option value="Diploma" {{ old('qualification', $job->qualification) == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                            <option value="High-School (S.S.C.E)" {{ old('qualification', $job->qualification) == 'High-School (S.S.C.E)' ? 'selected' : '' }}>High-School (S.S.C.E)</option>
                            <option value="HND" {{ old('qualification', $job->qualification) == 'HND' ? 'selected' : '' }}>HND</option>
                            <option value="MBA/MSC" {{ old('qualification', $job->qualification) == 'MBA/MSC' ? 'selected' : '' }}>MBA/MSC</option>
                            <option value="MBBS" {{ old('qualification', $job->qualification) == 'MBBS' ? 'selected' : '' }}>MBBS</option>
                            <option value="MPhil" {{ old('qualification', $job->qualification) == 'MPhil' ? 'selected' : '' }}>MPhil</option>
                            <option value="Vocational" {{ old('qualification', $job->qualification) == 'Vocational' ? 'selected' : '' }}>Vocational</option>
                            <option value="Others" {{ old('qualification', $job->qualification) == 'Others' ? 'selected' : '' }}>Others</option> 
                        </select>
                        @error('qualification')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div> 

                    <div class="w-full md:w-1/3">
                        <label for="experience" class="text-sm font-medium text-gray-700">Experience Length</label>
                        <select name="experience" id="experience" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                            <option value="">Select...</option>
                            <option value="No-Experience/Less-than-1-year" {{ old('experience', $job->experience) == 'No-Experience/Less-than-1-year' ? 'selected' : '' }}>No-Experience/Less-than-1-year</option>
                            <option value="1-year" {{ old('experience', $job->experience) == '1-year' ? 'selected' : '' }}>1-year</option>
                            <option value="2-years" {{ old('experience', $job->experience) == '2-years' ? 'selected' : '' }}>2-years</option>
                            <option value="3-years" {{ old('experience', $job->experience) == '3-years' ? 'selected' : '' }}>3-years</option>
                            <option value="4-years" {{ old('experience', $job->experience) == '4-years' ? 'selected' : '' }}>4-years</option>
                            <option value="5-years" {{ old('experience', $job->experience) == '5-years' ? 'selected' : '' }}>5-years</option>
                            <option value="6-years" {{ old('experience', $job->experience) == '6-years' ? 'selected' : '' }}>6-years</option>
                            <option value="7-years" {{ old('experience', $job->experience) == '7-years' ? 'selected' : '' }}>7-years</option>
                            <option value="8-years" {{ old('experience', $job->experience) == '8-years' ? 'selected' : '' }}>8-years</option>
                            <option value="9-years" {{ old('experience', $job->experience) == '9-years' ? 'selected' : '' }}>9-years</option>
                            <option value="10-years" {{ old('experience', $job->experience) == '10-years' ? 'selected' : '' }}>10-years</option>
                            <option value="11-years" {{ old('experience', $job->experience) == '11-years' ? 'selected' : '' }}>11-years</option>
                            <option value="12-years" {{ old('experience', $job->experience) == '12-years' ? 'selected' : '' }}>12-years</option>
                            <option value="13-years" {{ old('experience', $job->experience) == '13-years' ? 'selected' : '' }}>13-years</option>
                            <option value="14-years" {{ old('experience', $job->experience) == '14-years' ? 'selected' : '' }}>14-years</option>
                            <option value="15-years" {{ old('experience', $job->experience) == '15-years' ? 'selected' : '' }}>15-years</option>
                            <option value="16-years" {{ old('experience', $job->experience) == '16-years' ? 'selected' : '' }}>16-years</option>
                            <option value="17-years" {{ old('experience', $job->experience) == '17-years' ? 'selected' : '' }}>17-years</option>
                            <option value="18-years" {{ old('experience', $job->experience) == '18-years' ? 'selected' : '' }}>18-years</option>
                            <option value="19-years" {{ old('experience', $job->experience) == '19-years' ? 'selected' : '' }}>19-years</option>
                            <option value="20-years" {{ old('experience', $job->experience) == '20-years' ? 'selected' : '' }}>20-years</option>
                            <option value="More-than-20-years" {{ old('experience', $job->experience) == 'More-than-20-years' ? 'selected' : '' }}>More-than-20-years</option>
                        </select>
                        @error('experience')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div> 
                </div>

                <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                    <div class="w-full md:w-1/3">
                        <label for="level" class="text-sm font-medium text-gray-700">Job Level</label>
                        <select name="level" id="level" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                            <option value="">Select...</option>
                            <option value="Graduate-Trainee" {{ old('level', $job->level) == 'Graduate-Trainee' ? 'selected' : '' }}>Graduate-Trainee</option>
                            <option value="Volunteer/Internship" {{ old('level', $job->level) == 'Volunteer/Internship' ? 'selected' : '' }}>Volunteer/Internship</option>
                            <option value="Entry-Level" {{ old('level', $job->level) == 'Entry-Level' ? 'selected' : '' }}>Entry-Level</option>
                            <option value="Mid-Level" {{ old('level', $job->level) == 'Mid-Level' ? 'selected' : '' }}>Mid-Level</option>
                            <option value="Senior-Level" {{ old('level', $job->level) == 'Senior-Level' ? 'selected' : '' }}>Senior-Level</option>
                            <option value="Management-Level" {{ old('level', $job->level) == 'Management-Level' ? 'selected' : '' }}>Management-Level</option>
                            <option value="Executive-Level" {{ old('level', $job->level) == 'Executive-Level' ? 'selected' : '' }}>Executive-Level</option>
                            <option value="No-Experience" {{ old('level', $job->level) == 'No-Experience' ? 'selected' : '' }}>No-Experience</option>
                            <option value="Others" {{ old('level', $job->level) == 'Others' ? 'selected' : '' }}>Others</option> 
                        </select>
                        @error('level')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="w-full md:w-1/3">
                        <label for="salary_currency" class="text-sm font-medium text-gray-700">Salary Currency</label>
                        <select name="salary_currency" id="salary_currency" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                            <option value="">Select...</option>
                            <option value="Ghana-Cedi" {{ old('salary_currency', $job->salary_currency) == 'Ghana-Cedi' ? 'selected' : '' }}>Ghana-Cedi</option>
                            <option value="US-Dollar" {{ old('salary_currency', $job->salary_currency) == 'US-Dollar' ? 'selected' : '' }}>US-Dollar</option>
                        </select>
                        @error('salary_currency')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div> 

                    <div class="w-full md:w-1/3">
                        <label for="monthly_salary" class="text-sm font-medium text-gray-700">Monthly Salary (Gross)</label>
                        <select name="monthly_salary" id="monthly_salary" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                            <option value="">Select...</option>
                            <option value="Less-than-180" {{ old('monthly_salary', $job->monthly_salary) == 'Less-than-180' ? 'selected' : '' }}>Less-than-180</option>
                            <option value="180-300" {{ old('monthly_salary', $job->monthly_salary) == '180-300' ? 'selected' : '' }}>180-300</option>
                            <option value="300-600" {{ old('monthly_salary', $job->monthly_salary) == '300-600' ? 'selected' : '' }}>300-600</option>
                            <option value="600-900" {{ old('monthly_salary', $job->monthly_salary) == '600-900' ? 'selected' : '' }}>600-900</option>
                            <option value="900-1,200" {{ old('monthly_salary', $job->monthly_salary) == '900-1,200' ? 'selected' : '' }}>900-1,200</option>
                            <option value="1,200-1,500" {{ old('monthly_salary', $job->monthly_salary) == '1,200-1,500' ? 'selected' : '' }}>1,200-1,500</option>
                            <option value="1,500-1,800" {{ old('monthly_salary', $job->monthly_salary) == '1,500-1,800' ? 'selected' : '' }}>1,500-1,800</option>
                            <option value="1,800-2,100" {{ old('monthly_salary', $job->monthly_salary) == '1,800-2,100' ? 'selected' : '' }}>1,800-2,100</option>
                            <option value="2,100-2,400" {{ old('monthly_salary', $job->monthly_salary) == '2,100-2,400' ? 'selected' : '' }}>2,100-2,400</option>
                            <option value="2,400-3,000" {{ old('monthly_salary', $job->monthly_salary) == '2,400-3,000' ? 'selected' : '' }}>2,400-3,000</option>
                            <option value="3,600-4,200" {{ old('monthly_salary', $job->monthly_salary) == '3,600-4,200' ? 'selected' : '' }}>3,600-4,200</option>
                            <option value="4,200-4,800" {{ old('monthly_salary', $job->monthly_salary) == '4,200-4,800' ? 'selected' : '' }}>4,200-4,800</option>
                            <option value="4,800-5,400" {{ old('monthly_salary', $job->monthly_salary) == '4,800-5,400' ? 'selected' : '' }}>4,800-5,400</option>
                            <option value="5,400-6,000" {{ old('monthly_salary', $job->monthly_salary) == '5,400-6,000' ? 'selected' : '' }}>5,400-6,000</option>
                            <option value="6,600-7,200" {{ old('monthly_salary', $job->monthly_salary) == '6,600-7,200' ? 'selected' : '' }}>6,600-7,200</option>
                            <option value="7,200-7,800" {{ old('monthly_salary', $job->monthly_salary) == '7,200-7,800' ? 'selected' : '' }}>7,200-7,800</option>
                            <option value="7,800-8,400" {{ old('monthly_salary', $job->monthly_salary) == '7,800-8,400' ? 'selected' : '' }}>7,800-8,400</option>
                            <option value="8,400-9,000" {{ old('monthly_salary', $job->monthly_salary) == '8,400-9,000' ? 'selected' : '' }}>8,400-9,000</option>
                            <option value="9,000-10,000" {{ old('monthly_salary', $job->monthly_salary) == '9,000-10,000' ? 'selected' : '' }}>9,000-10,000</option>
                            <option value="10,000-12,000" {{ old('monthly_salary', $job->monthly_salary) == '10,000-12,000' ? 'selected' : '' }}>10,000-12,000</option>
                            <option value="12,000-15,000" {{ old('monthly_salary', $job->monthly_salary) == '12,000-15,000' ? 'selected' : '' }}>12,000-15,000</option>
                            <option value="15,000-20,000" {{ old('monthly_salary', $job->monthly_salary) == '15,000-20,000' ? 'selected' : '' }}>15,000-20,000</option>
                            <option value="20,000-30,000" {{ old('monthly_salary', $job->monthly_salary) == '20,000-30,000' ? 'selected' : '' }}>20,000-30,000</option>
                            <option value="30,000-40,000" {{ old('monthly_salary', $job->monthly_salary) == '30,000-40,000' ? 'selected' : '' }}>30,000-40,000</option>
                            <option value="40,000-50,000" {{ old('monthly_salary', $job->monthly_salary) == '40,000-50,000' ? 'selected' : '' }}>40,000-50,000</option>
                            <option value="50,000-60,000" {{ old('monthly_salary', $job->monthly_salary) == '50,000-60,000' ? 'selected' : '' }}>50,000-60,000</option>
                            <option value="60,000-70,000" {{ old('monthly_salary', $job->monthly_salary) == '60,000-70,000' ? 'selected' : '' }}>60,000-70,000</option>
                            <option value="70,000-80,000" {{ old('monthly_salary', $job->monthly_salary) == '70,000-80,000' ? 'selected' : '' }}>70,000-80,000</option>
                            <option value="80,000-90,000" {{ old('monthly_salary', $job->monthly_salary) == '80,000-90,000' ? 'selected' : '' }}>80,000-90,000</option>
                            <option value="90,000-100,000" {{ old('monthly_salary', $job->monthly_salary) == '90,000-100,000' ? 'selected' : '' }}>90,000-100,000</option>
                            <option value="More-than-100,000" {{ old('monthly_salary', $job->monthly_salary) == 'over-100,000' ? 'selected' : '' }}>More-than-100,000</option>
                        </select>
                        @error('monthly_salary')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div> 
                </div>

                <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                    <div class="w-full md:w-1/3">
                        <label for="days_online" class="text-sm font-medium text-gray-700">Days Online (90 Days Limit)</label>
                        <select name="days_online" id="days_online" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                            @for ($i = 1; $i <= 90; $i++)
                                <option value="{{$i}}" {{ old('days_online', $job->days_online) == $i ? 'selected' : '' }}>{{$i}}</option>
                            @endfor  
                        </select>
                        @error('days_online')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="w-full md:w-1/3">
                        <label for="available_openings" class="text-sm font-medium text-gray-700">Available Openings</label>
                        <select name="available_openings" id="available_openings" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                            <option value="">Select...</option>
                            @for ($i = 1; $i <= 100; $i++)
                                <option value="{{$i}}" {{ old('available_openings', $job->available_openings) == $i ? 'selected' : '' }}>{{$i}}</option>
                            @endfor  
                        </select>
                        @error('available_openings')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div> 

                    <div class="w-full md:w-1/3">
                       
                    </div> 
                </div>

                <div class="w-full mb-3">
                    <label for="summary" class="text-sm font-medium text-gray-700">Job Summary</label>
                    <textarea name="summary" id="summary" cols="30" rows="5" class="w-full rounded-md">{{old('summary', $job->summary)}}</textarea>
                    @error('summary')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="w-full mb-3">
                    <label for="responsibilities" class="text-sm font-medium text-gray-700">Job Responsibilities</label>
                    <textarea name="responsibilities" id="responsibilities" cols="30" rows="5" class="w-full rounded-md">{{old('responsibilities', $job->responsibilities)}}</textarea>
                    @error('responsibilities')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="w-full mb-3">
                    <label for="requirements" class="text-sm font-medium text-gray-700">Job Requirements</label>
                    <textarea name="requirements" id="requirements" cols="30" rows="5" class="hidden w-full rounded-md">{{old('requirements', $job->requirements)}}</textarea>
                    <div id="content" class="bg-white">{!! old('requirements', $job->requirements) !!}</div>
                    @error('requirements')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="w-full flex justify-end">
                    <button type="submit" class="text-white bg-orange-600 hover:bg-orange-700 mt-4 px-8 py-2 rounded-md">
                        Update Job
                    </button>
                </div>
            </form>
        </div>
    </div>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js"></script>
    <script>
            tinymce.init({
                selector: 'textarea#responsibilities',
                menubar: false,
                plugins: 'code table lists image',
                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | table | image',
            });
    </script>
    
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        const quill = new Quill('#content', {
            theme: 'snow',
        });

        quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById("requirements").value = quill.root.innerHTML;
        });
    </script>
</x-app-layout>