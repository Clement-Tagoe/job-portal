<x-app-layout>
    <div class="mt-16 w-full bg-gray-50">
        <div class="w-11/12 mx-auto flex space-x-6 pt-10">
            <div class="w-full lg:w-8/12">
                <div class="bg-white mb-6">
                    <h1 class="text-white bg-orange-500 px-3 py-3 rounded-t-sm">
                        Add Education
                    </h1>
                    
                    <div class="p-5">
                        <form action="{{route('education.update', $education)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="school_name" class="font-medium text-gray-700">Name of Educational Institution/School/etc.</label>
                                    <input type="text"  id="school_name" name="school_name" placeholder="Name"
                                        value="{{old('school_name', $education->school_name)}}"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('school_name')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="minimum_qualification" class="text-sm font-medium text-gray-700">Minimum Qualification</label>
                                    <select name="minimum_qualification" id="minimum_qualification" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        <option value="Degree" {{ old('minimum_qualification', $education->minimum_qualification) == 'Degree' ? 'selected' : '' }}>Degree</option>
                                        <option value="Diploma" {{ old('minimum_qualification', $education->minimum_qualification) == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                                        <option value="High-School (S.S.C.E)" {{ old('minimum_qualification', $education->minimum_qualification) == 'High-School (S.S.C.E)' ? 'selected' : '' }}>High-School (S.S.C.E)</option>
                                        <option value="HND" {{ old('minimum_qualification', $education->minimum_qualification) == 'HND' ? 'selected' : '' }}>HND</option>
                                        <option value="MBA/MSC" {{ old('minimum_qualification', $education->minimum_qualification) == 'MBA/MSC' ? 'selected' : '' }}>MBA/MSC</option>
                                        <option value="MBBS" {{ old('minimum_qualification', $education->minimum_qualification) == 'MBBS' ? 'selected' : '' }}>MBBS</option>
                                        <option value="MPhil" {{ old('minimum_qualification', $education->minimum_qualification) == 'MPhil' ? 'selected' : '' }}>MPhil</option>
                                        <option value="Vocational" {{ old('minimum_qualification', $education->minimum_qualification) == 'Vocational' ? 'selected' : '' }}>Vocational</option>
                                        <option value="Others" {{ old('minimum_qualification', $education->minimum_qualification) == 'Others' ? 'selected' : '' }}>Others</option> 
                                    </select>
                                    @error('minimum_qualification')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>
    
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="qualification" class="font-medium text-gray-700">Qualification</label>
                                    <input type="text"  id="qualification" name="qualification" placeholder="Qualification"
                                        value="{{old('qualification', $education->qualification)}}"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('qualification')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="start_date" class="font-medium text-gray-700">Start date</label>
                                    <div class="flex flex-col md:flex-row md:space-x-2">
                                        <div class="w-full md:w-1/2">
                                            <select name="start_month" id="start_month" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                                <option value="">Month</option>
                                                <option value="January" {{ old('start_month', $education->start_month) == 'January' ? 'selected' : '' }}>January</option>
                                                <option value="February" {{ old('start_month', $education->start_month) == 'February' ? 'selected' : '' }}>February</option>
                                                <option value="March" {{ old('start_month', $education->start_month) == 'March' ? 'selected' : '' }}>March</option>
                                                <option value="April" {{ old('start_month', $education->start_month) == 'April' ? 'selected' : '' }}>April</option>
                                                <option value="May" {{ old('start_month', $education->start_month) == 'May' ? 'selected' : '' }}>May</option>
                                                <option value="June" {{ old('start_month', $education->start_month) == 'June' ? 'selected' : '' }}>June</option>
                                                <option value="July" {{ old('start_month', $education->start_month) == 'July' ? 'selected' : '' }}>July</option>
                                                <option value="August" {{ old('start_month', $education->start_month) == 'August' ? 'selected' : '' }}>August</option>
                                                <option value="September" {{ old('start_month', $education->start_month) == 'September' ? 'selected' : '' }}>September</option>
                                                <option value="October" {{ old('start_month', $education->start_month) == 'October' ? 'selected' : '' }}>October</option>
                                                <option value="November"{{ old('start_month', $education->start_month) == 'November' ? 'selected' : '' }}>November</option>
                                                <option value="December" {{ old('start_month', $education->start_month) == 'December' ? 'selected' : '' }}>December</option>
                                            </select>
                                            @error('start_month')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror    
                                        </div>
                                        
                                        <div class="w-full md:w-1/2">
                                            <select name="start_year" id="start_year" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                                <option value="">Year</option>
                                                @php
                                                    $year = date('Y');
                                                @endphp
                                                @for ($x = 0; $x <=50; $x++)
                                                    <option value="{{$year - $x}}" {{old('start_year', $education->start_year) == $year - $x ? 'selected' : ''}}>{{$year - $x}}</option>
                                                @endfor  
                                            </select>
                                            @error('start_year')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <div class="flex space-x-3 text-gray-600 mb-3">
                                        <input type="checkbox" name="still_studying_this" @checked(old('still_studying_this'))">
                                        <label for="still_studying_this">I am still studying this</label>
                                    </div>
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="end_date" class="font-medium text-gray-700">End date</label>
                                    <div class="flex flex-col md:flex-row md:space-x-2">
                                        <div class="w-full md:w-1/2">
                                            <select name="end_month" id="end_month" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                                <option value="">Month</option>
                                                <option value="January" {{ old('end_month', $education->end_month) == 'January' ? 'selected' : '' }}>January</option>
                                                <option value="February" {{ old('end_month', $education->end_month) == 'February' ? 'selected' : '' }}>February</option>
                                                <option value="March" {{ old('end_month', $education->end_month) == 'March' ? 'selected' : '' }}>March</option>
                                                <option value="April" {{ old('end_month', $education->end_month) == 'April' ? 'selected' : '' }}>April</option>
                                                <option value="May" {{ old('end_month', $education->end_month) == 'May' ? 'selected' : '' }}>May</option>
                                                <option value="June" {{ old('end_month', $education->end_month) == 'June' ? 'selected' : '' }}>June</option>
                                                <option value="July" {{ old('end_month', $education->end_month) == 'July' ? 'selected' : '' }}>July</option>
                                                <option value="August" {{ old('end_month', $education->end_month) == 'August' ? 'selected' : '' }}>August</option>
                                                <option value="September" {{ old('end_month', $education->end_month) == 'September' ? 'selected' : '' }}>September</option>
                                                <option value="October" {{ old('end_month', $education->end_month) == 'October' ? 'selected' : '' }}>October</option>
                                                <option value="November"{{ old('end_month', $education->end_month) == 'November' ? 'selected' : '' }}>November</option>
                                                <option value="December" {{ old('end_month', $education->end_month) == 'December' ? 'selected' : '' }}>December</option>
                                            </select>
                                            @error('end_month')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror    
                                        </div>
                                        
                                        <div class="w-full md:w-1/2">
                                            <select name="end_year" id="end_year" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                                <option value="">Year</option>
                                                @php
                                                    $year = date('Y');
                                                @endphp
                                                @for ($x = 0; $x <=50; $x++)
                                                    <option value="{{$year - $x}}" {{old('end_year', $education->end_year) == $year - $x ? 'selected' : ''}}>{{$year - $x}}</option>
                                                @endfor  
                                            </select>
                                            @error('end_year')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full">
                                    <label for="description" class="font-medium text-gray-700">Description</label>
                                    @error('description')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p> 
                                    @enderror
                                    <textarea name="description" id="description" cols="60" rows="12" placeholder="Max. 1000 characters" class="border border-gray-200 w-full outline-none focus:border-gray-400 text-gray-500">{{old('description', $education->description)}}</textarea>
                                    
                                </div>
                            </div>

                            <hr>

                            <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row justify-between p-5">
                                <a href="/job-seeker/profile" class="text-white bg-gray-600 px-12 py-2 rounded-md uppercase">Cancel</a>
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
</x-app-layout>