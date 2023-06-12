<div class="w-11/12 mx-auto mt-20 flex flex-col items-center justify-center">
    <div class="text-center py-2">
        <h1 class="font-semibold text-3xl">Create an Employer Account</h1>
        <p>Reach top talent and find the right candidate today</p>
    </div>
    
    <form wire:submit.prevent="storeEmployer">

        {{-- STEP 1 --}}

        @if($currentStep == 1)

            <div class="step-one">
                <div class="text-center py-2">
                    <span class="font-semibold text-3xl">STEP 1 of 2</span>
                </div>
        
                <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-3 border border-gray-200 hover:border-gray-400 bg-orange-200 rounded-lg p-5 mb-8">
                    <div class="md:w-3/12 flex flex-col">
                        <h2 class="text-lg font-medium text-gray-700 mb-2">Company Representative</h2>
                        <p class="text-gray-500 mb-2">This is information pertaining to you as a representative of the company.</p>
                    </div>
            
                    <div class="md:w-9/12 bg-white border border-gray-200 hover:border-gray-400 rounded-lg px-5">
                        <div class="py-6">
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="first_name" class="text-sm font-medium text-gray-700">First Name</label>
                                    <input type="text" 
                                        id="first_name"
                                        name="first_name" 
                                        value="{{old('first_name')}}"
                                        wire:model="first_name"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('first_name')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="last_name" class="text-sm font-medium text-gray-700">Last Name</label>
                                    <input type="text" 
                                        id="last_name"
                                        name="last_name" 
                                        value="{{old('last_name')}}"
                                        wire:model="last_name"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('last_name')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>
        
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6">
                                <div class="w-full md:w-1/2">
                                    <label for="email" class="text-sm font-medium text-gray-700">Work Email</label>
                                    <input type="text" placeholder="you@example.com"
                                        id="email"
                                        name="email" 
                                        value="{{old('email')}}"
                                        wire:model="email"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="position" class="text-sm font-medium text-gray-700">Position in Company</label>
                                    <select name="position" id="position" wire:model="position" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        <option value="C-level: CEO / COO / CIO / CTO / CPO" {{ old('position') == 'C-level: CEO / COO / CIO / CTO / CPO' ? 'selected' : '' }}>C-level: CEO / COO / CIO / CTO / CPO</option>
                                        <option value="Senior Management: Head of Department / Team Lead" {{ old('position') == 'Senior Management: Head of Department / Team Lead' ? 'selected' : '' }}>Senior Management: Head of Department / Team Lead</option>
                                        <option value="Middle Management: Supervisor / Unit Head" {{ old('position') == 'Middle Management: Supervisor / Unit Head' ? 'selected' : '' }}>Middle Management: Supervisor / Unit Head</option>
                                        <option value="Junior Level: Associate / Officer" {{ old('position') == 'Junior Level: Associate / Officer' ? 'selected' : '' }}>Junior Level: Associate / Officer</option>
                                    </select>
                                    @error('position')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>
        
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mt-4">
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
        
                                <div class="w-full md:w-1/2">
                                    <label for="password_confirmation" class="text-sm font-medium text-gray-700">Confirm Password</label>
                                    <input type="password" 
                                        id="password_confirmation"
                                        name="password_confirmation" 
                                        value="{{old('password_confirmation')}}"
                                        wire:model="passwordConfirmation"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('passwordConfirmation')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>
        
                        </div>    
                            
                        <hr class="border-1 border-gray-200">
            
                        <div class="mt-6 mb-2">
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="personal_country_code" class="text-sm font-medium text-gray-700">Country Code</label>
                                    <select name="personal_country_code" wire:model="personal_country_code" id="personal_country_code" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        <option value="Ghana (+233)" {{ old('personal_country_code') == 'Ghana (+233)' ? 'selected' : '' }}>Ghana (+233)</option>
                                        <option value="Afghanistan (+93)" {{ old('personal_country_code') == 'Afghanistan (+93)' ? 'selected' : '' }}>Afghanistan (+93)</option>
                                        <option value="Algeria (+213)" {{ old('personal_country_code') == 'Algeria (+213)' ? 'selected' : '' }}>Algeria (+213)</option>
                                        <option value="Angola (+244)" {{ old('personal_country_code') == 'Angola (+244)' ? 'selected' : '' }}>Angola (+244)</option>
                                        <option value="Gabon (+241)" {{ old('personal_country_code') == 'Gabon (+241)' ? 'selected' : '' }}>Gabon (+241)</option>
                                        <option value="Gambia (+220)" {{ old('personal_country_code') == 'Gambia (+220)' ? 'selected' : '' }}>Gambia (+220)</option>
                                        <option value="Nigeria (+234)" {{ old('personal_country_code') == 'Nigeria (+234)' ? 'selected' : '' }}>Nigeria (+234)</option>
                                        <option value="Niger (+277)" {{ old('personal_country_code') == 'Niger (+277)' ? 'selected' : '' }}>Niger (+277)</option>
                                        <option value="Togo (+228)" {{ old('personal_country_code') == 'Togo (+228)' ? 'selected' : '' }}>Togo (+228)</option>
                                        <option value="Sierra Leone (+232)" {{ old('personal_country_code') == 'Sierra Leone (+232)' ? 'selected' : '' }}>Sierra Leone (+232)</option>
                                        <option value="Senegal (+221)" {{ old('personal_country_code') == 'Senegal (+221)' ? 'selected' : '' }}>Senegal (+221)</option>
                                        <option value="Zimbabwe (+263)" {{ old('personal_country_code') == 'Zimbabwe (+263)' ? 'selected' : '' }}>Zimbabwe (+263)</option>
                                    </select>
                                    @error('personal_country_code')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="personal_phone_number" class="text-sm font-medium text-gray-700">Mobile Number</label>
                                    <input type="text" 
                                        id="personal_phone_number"
                                        name="personal_phone_number" 
                                        value="{{old('personal_phone_number')}}"
                                        wire:model="personal_phone_number"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('personal_phone_number')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>
                        </div>
                        
                        <div class="flex space-x-2 mb-4">
                            <span class="text-gray-500">Already have an account?</span>
                            <a href="/account/login" class="text-orange-600">Log in</a>
                        </div>
                    </div>
                </div>
            </div>

        @endif
        
        {{-- STEP 2--}}
    
        @if($currentStep == 2)

            <div class="step-two">
                <div class="text-center py-2">
                    <span class="font-semibold text-3xl">STEP 2 of 2</span>
                </div>
                
                <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-3 border border-gray-200 hover:border-gray-400 bg-orange-200 rounded-lg p-5 mb-8">
                    <div class="md:w-3/12 flex flex-col">
                        <h2 class="text-lg font-medium text-gray-700 mb-2">Company Information</h2>
                        <p class="text-gray-500 mb-2">This is information pertains to your company</p>
                    </div>
            
                    <div class="md:w-9/12 bg-white border border-gray-200 hover:border-gray-400 rounded-lg px-5">
                        <div class="py-6">
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="company_name" class="text-sm font-medium text-gray-700">Company Name</label>
                                    <input type="text" 
                                        id="company_name"
                                        name="company_name" 
                                        value="{{old('company_name')}}"
                                        wire:model="company_name"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('company_name')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="jobIndustry_id" class="text-sm font-medium text-gray-700">Industry</label>
                                    <select name="jobIndustry_id" wire:model="jobIndustry_id" id="jobIndustry_id" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        @foreach ($industries as $industry)
                                            <option value="{{$industry->id}}" {{ old('jobIndustry_id') == $industry->id ? 'selected' : '' }}>{{$industry->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('jobIndustry_id')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>
        
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6">
                                <div class="w-full md:w-1/2">
                                    <label for="number_of_employees" class="text-sm font-medium text-gray-700">Number of Employees</label>
                                    <select name="number_of_employees" wire:model="number_of_employees" id="number_of_employees" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        <option value="1-4" {{ old('number_of_employees') == '1-4' ? 'selected' : '' }}>1-4</option>
                                        <option value="5-10" {{ old('number_of_employees') == '5-10' ? 'selected' : '' }}>5-10</option>
                                        <option value="11-25" {{ old('number_of_employees') == '11-25' ? 'selected' : '' }}>11-25</option>
                                        <option value="26-50" {{ old('number_of_employees') == '26-50' ? 'selected' : '' }}>26-50</option>
                                        <option value="51-100" {{ old('number_of_employees') == '51-100' ? 'selected' : '' }}>51-100</option>
                                        <option value="101-200" {{ old('number_of_employees') == '101-200' ? 'selected' : '' }}>101-200</option>
                                        <option value="201-500" {{ old('number_of_employees') == '201-500' ? 'selected' : '' }}>201-500</option>
                                        <option value="501-1000" {{ old('number_of_employees') == '501-1000' ? 'selected' : '' }}>501-1000</option>
                                        <option value="1001+" {{ old('number_of_employees') == '1001+' ? 'selected' : '' }}>1001+</option>
                                    </select>
                                    @error('number_of_employees')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="type_of_employer" class="text-sm font-medium text-gray-700">Type of Employer</label>
                                    <select name="type_of_employer" wire:model="type_of_employer" id="type_of_employer" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        <option value="Direct-Employer" {{ old('type_of_employer') == 'Direct-Employer' ? 'selected' : '' }}>Direct-Employer</option>
                                        <option value="Recruitment-Agency" {{ old('type_of_employer') == 'Recruitment-Agency' ? 'selected' : '' }}>Recruitment-Agency</option>
                                    </select>
                                    @error('type_of_employer')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>
                        </div>    
            
                        <hr class="border-1 border-gray-200">
            
                        <div class="py-6">
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="website" class="text-sm font-medium text-gray-700">Website</label>
                                    <input type="text"
                                        id="website"
                                        name="website" 
                                        value="{{old('website')}}"
                                        wire:model="website"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('website')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="contact_person" class="text-sm font-medium text-gray-700">Contact Person</label>
                                    <input type="text" 
                                        id="contact_person"
                                        name="contact_person" 
                                        value="{{old('contact_person')}}"
                                        wire:model="contact_person"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('contact_person')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6">
                                <div class="w-full md:w-1/2">
                                    <label for="notification_email" class="text-sm font-medium text-gray-700">Notification Email</label>
                                    <input type="text" 
                                        id="notification_email"
                                        name="notification_email" 
                                        value="{{old('notification_email')}}"
                                        wire:model="notification_email"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('notification_email')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    
                                </div> 
                            </div>
                        </div>    
                                
                        <hr class="border-1 border-gray-200">
            
                        <div class="mt-6 mb-2">
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/3">
                                    <label for="country_code" class="text-sm font-medium text-gray-700">Country Code</label>
                                    <select name="country_code" wire:model="country_code" id="country_code" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        <option value="Ghana (+233)" {{ old('country_code') == 'Ghana (+233)' ? 'selected' : '' }}>Ghana (+233)</option>
                                        <option value="Afghanistan (+93)" {{ old('country_code') == 'Afghanistan (+93)' ? 'selected' : '' }}>Afghanistan (+93)</option>
                                        <option value="Algeria (+213)" {{ old('country_code') == 'Algeria (+213)' ? 'selected' : '' }}>Algeria (+213)</option>
                                        <option value="Angola (+244)" {{ old('country_code') == 'Angola (+244)' ? 'selected' : '' }}>Angola (+244)</option>
                                        <option value="Gabon (+241)" {{ old('country_code') == 'Gabon (+241)' ? 'selected' : '' }}>Gabon (+241)</option>
                                        <option value="Gambia (+220)" {{ old('country_code') == 'Gambia (+220)' ? 'selected' : '' }}>Gambia (+220)</option>
                                        <option value="Nigeria (+234)" {{ old('country_code') == 'Nigeria (+234)' ? 'selected' : '' }}>Nigeria (+234)</option>
                                        <option value="Niger (+277)" {{ old('country_code') == 'Niger (+277)' ? 'selected' : '' }}>Niger (+277)</option>
                                        <option value="Togo (+228)" {{ old('country_code') == 'Togo (+228)' ? 'selected' : '' }}>Togo (+228)</option>
                                        <option value="Sierra Leone (+232)" {{ old('country_code') == 'Sierra Leone (+232)' ? 'selected' : '' }}>Sierra Leone (+232)</option>
                                        <option value="Senegal (+221)" {{ old('country_code') == 'Senegal (+221)' ? 'selected' : '' }}>Senegal (+221)</option>
                                        <option value="Zimbabwe (+263)" {{ old('country_code') == 'Zimbabwe (+263)' ? 'selected' : '' }}>Zimbabwe (+263)</option>
                                    </select>
                                    @error('country_code')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/3">
                                    <label for="phone_number" class="text-sm font-medium text-gray-700">Phone Number</label>
                                    <input type="text"
                                        id="phone_number" 
                                        name="phone_number" 
                                        value="{{old('phone_number')}}"
                                        wire:model="phone_number"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('phone_number')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 

                                <div class="w-full md:w-1/3">
                                    <label for="country" class="text-sm font-medium text-gray-700">Country</label>
                                    <select name="country" wire:model="country" id="country" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-400 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select</option>
                                        <option value="Ghana" {{ old('country') == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                                        <option value="Afghanistan" {{ old('country') == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                                        <option value="Algeria" {{ old('country') == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                                        <option value="Angola" {{ old('country') == 'Angola' ? 'selected' : '' }}>Angola</option>
                                        <option value="Gabon" {{ old('country') == 'Gabon' ? 'selected' : '' }}>Gabon</option>
                                        <option value="Gambia" {{ old('country') == 'Gambia' ? 'selected' : '' }}>Gambia</option>
                                        <option value="Nigeria" {{ old('country') == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                                        <option value="Niger" {{ old('country') == 'Niger' ? 'selected' : '' }}>Niger</option>
                                        <option value="Togo" {{ old('country') == 'Togo' ? 'selected' : '' }}>Togo</option>
                                        <option value="Sierra" {{ old('country') == 'Sierra' ? 'selected' : '' }}>Sierra</option>
                                        <option value="Senegal" {{ old('country') == 'Senegal' ? 'selected' : '' }}>Senegal</option>
                                        <option value="Zimbabwe" {{ old('country') == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>
                                    </select>
                                    @error('country')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div> 
                            </div>

                            <div class="w-full mb-3">
                                <label for="address" class="text-sm font-medium text-gray-700">Address</label>
                                <textarea name="address" wire:model="address" id="address" cols="30" rows="5" class="w-full border border-gray-300 rounded-md mt-1"></textarea>
                                @error('address')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="action-buttons flex md:justify-between space-x-2 md:space-x-0 mb-8">

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


{{-- <p class="text-gray-700">By clicking "Create Your Account", you agree to our <a href="" class="text-orange-600">Terms & Conditions</a> and <a href="" class="text-orange-600">Privacy Policy</a></p> --}}