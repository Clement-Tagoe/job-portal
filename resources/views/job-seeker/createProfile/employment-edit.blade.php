<x-app-layout>
    <div class="mt-16 w-full bg-gray-50">
        <div class="w-11/12 mx-auto flex space-x-6 pt-10">
            <div class="w-full lg:w-8/12">
                <div class="bg-white mb-6">
                    <h1 class="text-white bg-orange-500 px-3 py-3 rounded-t-sm">
                        Employment & Availability
                    </h1>
                    <p class="text-gray-500 px-3 py-3"> Keeping this section up to date will help employers & recruiters find you. They will know the field you are in, what your preferred industries are and if you are actively looking.</p>
                    <hr>
                    <form action="/job-seeker/employment-availability" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col space-y-4 md:flex-row md:h-64 p-5">
                            <div class="w-full md:w-1/2 flex items-center justify-center">
                                <div class="relative h-44 w-44 border border-gray-300 rounded-full bg-gray-200 flex items-center justify-center">
                                    @if(!is_null($user->photo))
                                        <img class="w-44 h-44 rounded-full absolute z-5" src="{{ asset('storage/' . $user->photo)}}" alt="">
                                    @endif
                                    @if(is_null($user->photo) || !is_null($user->photo))
                                        <img class="w-44 h-44 rounded-full absolute z-8" id="tempPhoto" src="" alt="">
                                    @endif
                                    <div id="svgDiv" class="{{!is_null($user->photo ? 'hidden' : '')}}" >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-28 h-28 text-gray-700 p-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 flex flex-col justify-center space-y-4 p-5">
                                <div>
                                    <input type="file" id="photo" name="photo" style="display: none;" />
                                    <input type="button" value="Upload Photo" onclick="document.getElementById('photo').click();" class="w-full text-white uppercase bg-blue-700 py-2 rounded-md hover:bg-blue-500 cursor-pointer"/>
                                </div>
                                <div>
                                    <p id="fileOutput" class="text-gray-500">
                                        Upload an image no larger than 5MB for file types .jpg .gif .png .bmp
                                    </p>
                                </div>
                                @error('photo')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <hr>

                
                        <div class="p-5">
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="professional_headline" class="font-medium text-gray-700">Professional Headline</label>
                                    <input type="text"  id="professional_headline" name="professional_headline" 
                                        value="{{old('professional_headline', $user->professional_headline)}}"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('professional_headline')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="highest_qualification" class="font-medium text-gray-700">Highest Qualification</label>
                                    <select name="highest_qualification" id="highest_qualification" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        <option value="Degree" {{ old('highest_qualification', $user->highest_qualification) == 'Degree' ? 'selected' : '' }}>Degree</option>
                                        <option value="Diploma" {{ old('highest_qualification', $user->highest_qualification) == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                                        <option value="High-School (S.S.C.E)" {{ old('highest_qualification', $user->highest_qualification) == 'High-School (S.S.C.E)' ? 'selected' : '' }}>High-School (S.S.C.E)</option>
                                        <option value="HND" {{ old('highest_qualification', $user->highest_qualification) == 'HND' ? 'selected' : '' }}>HND</option>
                                        <option value="MBA/MSC" {{ old('highest_qualification', $user->highest_qualification) == 'MBA/MSC' ? 'selected' : '' }}>MBA/MSC</option>
                                        <option value="MBBS" {{ old('highest_qualification', $user->highest_qualification) == 'MBBS' ? 'selected' : '' }}>MBBS</option>
                                        <option value="MPhil" {{ old('highest_qualification', $user->highest_qualification) == 'MPhil' ? 'selected' : '' }}>MPhil</option>
                                        <option value="Vocational" {{ old('highest_qualification', $user->highest_qualification) == 'Vocational' ? 'selected' : '' }}>Vocational</option>
                                        <option value="Others" {{ old('highest_qualification', $user->highest_qualification) == 'Others' ? 'selected' : '' }}>Others</option> 
                                    </select>
                                    @error('highest_qualification')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>
    
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="current_jobFunction_id" class="font-medium text-gray-700">Current Job Function</label>
                                    <select name="current_jobFunction_id" id="current_jobFunction_id" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        @foreach ($functions as $function)
                                            <option value="{{$function->id}}" {{ old('current_jobFunction_id', $user->current_jobFunction_id) == $function->id ? 'selected' : '' }}>{{$function->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('current_jobFunction_id')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="preferred_jobFunction_id" class="font-medium text-gray-700">Preferred Job Function</label>
                                    <select name="preferred_jobFunction_id" id="preferred_jobFunction_id" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        @foreach ($functions as $function)
                                            <option value="{{$function->id}}" {{ old('preferred_jobFunction_id', $user->preferred_jobFunction_id) == $function->id ? 'selected' : '' }}>{{$function->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('preferred_jobFunction_id')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="location_id" class="font-medium text-gray-700">Location</label>
                                    <select name="location_id" id="location_id" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        @foreach ($locations as $location)
                                            <option value="{{$location->id}}" {{ old('location_id', $user->location_id) == $location->id ? 'selected' : '' }}>{{$location->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('location_id')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="preferred_jobLocation_id" class="font-medium text-gray-700">Preferred Job Locations</label>
                                    <select name="preferred_jobLocation_id" id="preferred_jobLocation_id" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        @foreach ($locations as $location)
                                            <option value="{{$location->id}}" {{ old('preferred_jobLocation_id', $user->preferred_jobLocation_id) == $location->id ? 'selected' : '' }}>{{$location->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('preferred_jobLocation_id')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="experience" class="font-medium text-gray-700">Years of Experience</label>
                                    <select name="experience" id="experience" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        <option value="No-Experience/Less-than-1-year" {{ old('experience', $user->experience) == 'No-Experience/Less-than-1-year' ? 'selected' : '' }}>No-Experience/Less-than-1-year</option>
                                        <option value="1-year" {{ old('experience', $user->experience) == '1-year' ? 'selected' : '' }}>1-year</option>
                                        <option value="2-years" {{ old('experience', $user->experience) == '2-years' ? 'selected' : '' }}>2-years</option>
                                        <option value="3-years" {{ old('experience', $user->experience) == '3-years' ? 'selected' : '' }}>3-years</option>
                                        <option value="4-years" {{ old('experience', $user->experience) == '4-years' ? 'selected' : '' }}>4-years</option>
                                        <option value="5-years" {{ old('experience', $user->experience) == '5-years' ? 'selected' : '' }}>5-years</option>
                                        <option value="6-years" {{ old('experience', $user->experience) == '6-years' ? 'selected' : '' }}>6-years</option>
                                        <option value="7-years" {{ old('experience', $user->experience) == '7-years' ? 'selected' : '' }}>7-years</option>
                                        <option value="8-years" {{ old('experience', $user->experience) == '8-years' ? 'selected' : '' }}>8-years</option>
                                        <option value="9-years" {{ old('experience', $user->experience) == '9-years' ? 'selected' : '' }}>9-years</option>
                                        <option value="10-years" {{ old('experience', $user->experience) == '10-years' ? 'selected' : '' }}>10-years</option>
                                        <option value="11-years" {{ old('experience', $user->experience) == '11-years' ? 'selected' : '' }}>11-years</option>
                                        <option value="12-years" {{ old('experience', $user->experience) == '12-years' ? 'selected' : '' }}>12-years</option>
                                        <option value="13-years" {{ old('experience', $user->experience) == '13-years' ? 'selected' : '' }}>13-years</option>
                                        <option value="14-years" {{ old('experience', $user->experience) == '14-years' ? 'selected' : '' }}>14-years</option>
                                        <option value="15-years" {{ old('experience', $user->experience) == '15-years' ? 'selected' : '' }}>15-years</option>
                                        <option value="16-years" {{ old('experience', $user->experience) == '16-years' ? 'selected' : '' }}>16-years</option>
                                        <option value="17-years" {{ old('experience', $user->experience) == '17-years' ? 'selected' : '' }}>17-years</option>
                                        <option value="18-years" {{ old('experience', $user->experience) == '18-years' ? 'selected' : '' }}>18-years</option>
                                        <option value="19-years" {{ old('experience', $user->experience) == '19-years' ? 'selected' : '' }}>19-years</option>
                                        <option value="20-years" {{ old('experience', $user->experience) == '20-years' ? 'selected' : '' }}>20-years</option>
                                        <option value="More-than-20-years" {{ old('experience', $user->experience) == 'More-than-20-years' ? 'selected' : '' }}>More-than-20-years</option>
                                    </select>
                                    @error('experience')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="work_type" class="font-medium text-gray-700">Work Type</label>
                                    <select name="work_type" id="work_type" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        <option value="Full-Time" {{ old('work_type', $user->work_type) == 'Full-Time' ? 'selected' : '' }}>Full-Time</option>
                                        <option value="Part-Time" {{ old('work_type', $user->work_type) == 'Part-Time' ? 'selected' : '' }}>Part-Time</option>
                                        <option value="Contract" {{ old('work_type', $user->work_type) == 'Contract' ? 'selected' : '' }}>Contract</option>
                                        <option value="Remote" {{ old('work_type', $user->work_type) == 'Remote' ? 'selected' : '' }}>Remote</option>
                                        <option value="Internship/Graduate" {{ old('work_type', $user->work_type) == "Internship/Graduate" ? 'selected' : '' }}>Internship/Graduate</option>
                                    </select>
                                    @error('work_type')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="availability" class="font-medium text-gray-700">Availability</label>
                                    <select name="availability" id="availability" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        <option value="Immediately" {{ old('availability', $user->availability) == 'Immediately' ? 'selected' : '' }}>Immediately</option>
                                        <option value="1-Week" {{ old('availability', $user->availability) == '1-Week' ? 'selected' : '' }}>1-Week</option>
                                        <option value="2-Weeks" {{ old('availability', $user->availability) == '2-Weeks' ? 'selected' : '' }}>2-Weeks</option>
                                        <option value="3-Weeks" {{ old('availability', $user->availability) == '3-Weeks' ? 'selected' : '' }}>3-Weeks</option>
                                        <option value="1-Month" {{ old('availability', $user->availability) == '1-Month' ? 'selected' : '' }}>1-Month</option>
                                        <option value="2-Months" {{ old('availability', $user->availability) == '2-Months' ? 'selected' : '' }}>2-Months</option>
                                        <option value="More than 3-Months" {{ old('availability', $user->availability) == 'More than 3-Months' ? 'selected' : '' }}>More than 3-Months</option>
                                    </select>
                                    @error('availability')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="monthly_salary_expectation" class="font-medium text-gray-700">Monthly Salary Expectation (Gross)</label>
                                    <div class="flex space-x-2">
                                        <div class="w-1/3">
                                            <select name="salary_currency" id="salary_currency" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                                <option value="">Select...</option>
                                                <option value="GHS" {{ old('salary_currency', $user->salary_currency) == 'GHS' ? 'selected' : '' }}>GHS</option>
                                                <option value="USD" {{ old('salary_currency', $user->salary_currency) == 'USD' ? 'selected' : '' }}>USD</option>
                                            </select>
                                            @error('salary_currency')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="w-2/3">
                                            <input type="number"  id="salary_amount" name="salary_amount" 
                                                    value="{{old('salary_amount', $user->salary_amount)}}"
                                                    class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1"
                                                    >
                                            @error('salary_amount')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full flex-col text-gray-600 font-medium">
                                <label for="preferences">Preferences</label>
                                <div class="flex space-x-3">
                                    <input type="checkbox" name="actively_looking_for_job" @checked(old('actively_looking_for_job', $user->actively_looking_for_job))>
                                    <label for="actively_looking_for_job">I am actively looking for a job</label>
                                    @error('actively_looking_for_job')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="flex space-x-3">
                                    <input type="checkbox" name="display_profile" @checked(old('display_profile', $user->display_profile))>
                                    <label for="display_profile">Display my profile to potential employers</label>
                                    @error('display_profile')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="flex space-x-3">
                                    <input type="checkbox" name="willing_to_relocate" @checked(old('willing_to_relocate', $user->willing_to_relocate))>
                                    <label for="willing_to_relocate">Willing to relocate</label>
                                    @error('willing_to_relocate')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row justify-between p-5">
                            <a href="{{route('job-seeker.profile')}}" class="text-white bg-gray-600 px-12 py-2 rounded-md uppercase">Cancel</a>
                            <button type="submit" class="text-white bg-blue-700 px-12 py-2 rounded-md uppercase">Save</button>
                        </div>
                    </form>
                </div>
                
            </div>

            <div class="hidden lg:w-4/12">

            </div>
        </div>
    </div>

    

    <script>
        const fileSelector = document.getElementById('photo');
        fileSelector.addEventListener('change', (event) => {
          const fileName = event.target.files[0].name;
          const fileSize = event.target.files[0].size;
          document.getElementById('fileOutput').innerHTML = `File name: ${fileName}, file size: ${fileSize * 0.001}KB`;
          document.getElementById('tempPhoto').src = URL.createObjectURL(event.target.files[0]);
          document.getElementById('svgDiv').classList.add("hidden");
        });
      </script>
</x-app-layout>