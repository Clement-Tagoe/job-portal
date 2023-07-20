<div>
    <div class="border-b border-gray-200">
        <ul class=" w-11/12  mx-auto flex flex-col justify-between space-y-2 md:space-y-0 md:flex-row text-gray-500 ">
            <li wire:click.prevent="setView('company-details')" class="border-b-4 {{$currentView == 'company-details' ? 'border-orange-500' : 'border-white'}} hover:border-b-4 hover:border-orange-500 cursor-pointer pb-3 uppercase">Company Details</li>
            <li wire:click.prevent="setView('personal-details')" class="border-b-4 {{$currentView == 'personal-details' ? 'border-orange-500' : 'border-white'}} hover:border-b-4 hover:border-orange-500 cursor-pointer pb-3 uppercase">Personal Details</li>
            <li wire:click.prevent="setView('email-details')" class="border-b-4 {{$currentView == 'email-details' ? 'border-orange-500' : 'border-white'}} hover:border-b-4 hover:border-orange-500 cursor-pointer pb-3 uppercase">Email Address</li>
            <li wire:click.prevent="setView('password-details')" class="border-b-4 {{$currentView == 'password-details' ? 'border-orange-500' : 'border-white'}} hover:border-b-4 hover:border-orange-500 cursor-pointer pb-3 uppercase">Password</li>
            <li wire:click.prevent="setView('company-logo-details')" class="border-b-4 {{$currentView == 'company-logo-details' ? 'border-orange-500' : 'border-white'}} hover:border-b-4 hover:border-orange-500 cursor-pointer pb-3 uppercase">Company Logo</li>
        </ul>
    </div>

    @if ($currentView == 'company-details')
    <form wire:submit.prevent="updateCompanyDetails">
        <div class="company-details rounded-lg w-11/12 lg:w-10/12 2xl:w-8/12 mx-auto my-8 border border-gray-200">
            <h2 class="bg-orange-500 text-white text-xl p-3 rounded-t-md">Company Details</h2>
            <div class="p-5">
                <div class="grid grid-cols-1 md:grid-cols-6 gap-x-10 gap-y-3 mb-3">
                    <span class="md:col-span-3">
                        <label for="company_name" class="font-medium text-gray-700">Company Name</label>
                        <input type="text" 
                            id="company_name"
                            name="company_name" 
                            wire:model.defer="company_name"
                            class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1"
                        >
                        @error('company_name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </span>
                    
                    <span class="md:col-span-3">
                        <label for="jobIndustry_id" class="font-medium text-gray-700">Industry</label>
                            <select name="jobIndustry_id" wire:model.defer="jobIndustry_id" id="jobIndustry_id" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1">
                                <option value="">Select</option>
                                @foreach ($industries as $industry)
                                    <option value="{{$industry->id}}" {{ old('jobIndustry_id') == $industry->id ? 'selected' : '' }}>{{$industry->name}}</option>
                                @endforeach
                            </select>
                            @error('jobIndustry_id')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-6 gap-x-10 gap-y-3 mb-3">
                    <span class="md:col-span-3">
                        <label for="number_of_employees" class="font-medium text-gray-700">Number of Employees</label>
                        <select name="number_of_employees" wire:model.defer="number_of_employees" id="number_of_employees" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1">
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
                    </span>
                    
                    <span class="md:col-span-3">
                        <label for="type_of_employer" class="font-medium text-gray-700">Type of Employer</label>
                        <select name="type_of_employer" wire:model.defer="type_of_employer" id="type_of_employer" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1">
                            <option value="">Select</option>
                            <option value="Direct-Employer" {{ old('type_of_employer') == 'Direct-Employer' ? 'selected' : '' }}>Direct-Employer</option>
                            <option value="Recruitment-Agency" {{ old('type_of_employer') == 'Recruitment-Agency' ? 'selected' : '' }}>Recruitment-Agency</option>
                        </select>
                        @error('type_of_employer')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </span>
                </div>

                <div class="grid grid-cols-1 gap-x-10 gap-y-3 mb-3">
                    <span class="">
                        <label for="website" class="font-medium text-gray-700">Website</label>
                        <input type="text"
                            id="website"
                            name="website" 
                            wire:model.defer="website"
                            class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1"
                        >
                        @error('website')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </span>
                </div>

                <div class="grid grid-cols-1 gap-x-10 gap-y-3 mb-3">
                    <span class="">
                        <label for="contact_person" class="font-medium text-gray-700">Contact Person</label>
                            <input type="text" 
                                id="contact_person"
                                name="contact_person" 
                                wire:model.defer="contact_person"
                                class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1"
                            >
                            @error('contact_person')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-6 gap-x-10 gap-y-3 mb-3">
                    <span class="md:col-span-3">
                        <label for="notification_email" class="font-medium text-gray-700">Notification Email</label>
                            <input type="text" 
                                id="notification_email"
                                name="notification_email" 
                                wire:model.defer="notification_email"
                                class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1"
                            >
                            @error('notification_email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                    </span>
                    
                    <span class="md:col-span-3">
                        <label for="application_notifications" class="font-medium text-gray-700">Receive Email Notification Upon Applications</label>
                        <select name="application_notifications" wire:model.defer="application_notifications" id="application_notifications" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1">
                            <option value="">Select</option>
                            <option value="Yes" {{ old('application_notifications') == 'Yes' ? 'selected' : '' }}>Yes</option>
                            <option value="No" {{ old('application_notifications') == 'No' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('application_notifications')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-6 gap-x-10 gap-y-3 mb-3">
                    <span class="md:col-span-2">
                        <label for="country_code" class="font-medium text-gray-700">Country Code</label>
                        <select name="country_code" wire:model.defer="country_code" id="country_code" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1">
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
                    </span>
                    
                    <span class="md:col-span-2">
                        <label for="phone_number" class="font-medium text-gray-700">Phone Number</label>
                        <input type="text"
                            id="phone_number" 
                            name="phone_number" 
                            wire:model.defer="phone_number"
                            class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1"
                        >
                        @error('phone_number')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </span>

                    <span class="md:col-span-2">
                        <label for="country" class="font-medium text-gray-700">Country</label>
                        <select name="country" wire:model.defer="country" id="country" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1">
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
                    </span>
                </div>

                <div class="grid grid-cols-1 gap-x-10 gap-y-3 mb-3">
                    <span class="">
                        <label for="address" class="font-medium text-gray-700">Address</label>
                        <textarea name="address" wire:model.defer="address" id="address" cols="30" rows="5" class="w-full border border-gray-300 hover:border-gray-600 text-gray-600 rounded-md mt-1 outline-none"></textarea>
                        @error('address')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </span>
                </div>

                <div class="flex md:justify-end">
                    <button type="submit" class="w-full md:w-3/12 text-white bg-orange-500 hover:bg-orange-600 px-3 py-2 rounded-md">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>

    @endif


    @if ($currentView == 'personal-details')
    
    <form wire:submit.prevent="updatePersonalDetails">
        <div class="personal-details rounded-lg w-11/12 lg:w-10/12 2xl:w-8/12 mx-auto my-8 border border-gray-200">
            <h2 class="bg-orange-500 text-white text-xl p-3 rounded-t-md">Person Details</h2>
            <div class="p-5">
                <div class="grid grid-cols-1 md:grid-cols-6 gap-x-10 gap-y-3 mb-3">
                    <span class="md:col-span-3">
                        <label for="username" class="font-medium text-gray-700">Username</label>
                        <input type="text" 
                            id="username"
                            name="username"
                            wire:model.defer="username"
                            class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1"
                        >
                        @error('username')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </span>
                    
                    <span class="md:col-span-3">
                        <label for="position" class="t font-medium text-gray-700">Position in Company</label>
                        <select name="position" id="position" wire:model.defer="position" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1">
                            <option value="">Select</option>
                            <option value="C-level: CEO / COO / CIO / CTO / CPO" {{ old('position') == 'C-level: CEO / COO / CIO / CTO / CPO' ? 'selected' : '' }}>C-level: CEO / COO / CIO / CTO / CPO</option>
                            <option value="Senior Management: Head of Department / Team Lead" {{ old('position') == 'Senior Management: Head of Department / Team Lead' ? 'selected' : '' }}>Senior Management: Head of Department / Team Lead</option>
                            <option value="Middle Management: Supervisor / Unit Head" {{ old('position') == 'Middle Management: Supervisor / Unit Head' ? 'selected' : '' }}>Middle Management: Supervisor / Unit Head</option>
                            <option value="Junior Level: Associate / Officer" {{ old('position') == 'Junior Level: Associate / Officer' ? 'selected' : '' }}>Junior Level: Associate / Officer</option>
                        </select>
                        @error('position')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-6 gap-x-10 gap-y-3 mb-3">
                    <span class="md:col-span-3">
                        <label for="first_name" class="font-medium text-gray-700">First Name</label>
                        <input type="text" 
                            id="first_name"
                            name="first_name" 
                            wire:model.defer="first_name"
                            class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1"
                        >
                        @error('first_name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </span>
                    
                    <span class="md:col-span-3">
                        <label for="last_name" class="font-medium text-gray-700">Last Name</label>
                        <input type="text" 
                            id="last_name"
                            name="last_name" 
                            wire:model.defer="last_name"
                            class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1"
                        >
                        @error('last_name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-6 gap-x-10 gap-y-3 mb-3">
                    <span class="md:col-span-3">
                        <label for="personal_country_code" class="font-medium text-gray-700">Country Code</label>
                        <select name="personal_country_code" wire:model.defer="personal_country_code" id="personal_country_code" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1">
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
                    </span>
                    
                    <span class="md:col-span-3">
                        <label for="personal_phone_number" class="font-medium text-gray-700">Mobile Number</label>
                        <input type="text" 
                            id="personal_phone_number"
                            name="personal_phone_number" 
                            wire:model.defer="personal_phone_number"
                            class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1"
                        >
                        @error('personal_phone_number')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </span>
                </div>

                <div class="flex md:justify-end">
                    <button type="submit" class="w-full md:w-3/12 text-white bg-orange-500 hover:bg-orange-600 px-3 py-2 rounded-md">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>

    @endif

    @if ($currentView == 'email-details')
    
    <form wire:submit.prevent="updateEmail">
        <div class="email-details rounded-lg w-11/12 lg:w-10/12 2xl:w-8/12 mx-auto my-8 border border-gray-200">
            <h2 class="bg-orange-500 text-white text-xl p-3 rounded-t-md">Email Address</h2>
            <div class="p-5">
                <div class="grid grid-cols-1 mb-3">
                    <label for="email" class="font-medium text-gray-700">Email</label>
                    <input type="text"
                        id="email"
                        name="email" 
                        wire:model.defer="email"
                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1"
                    >
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex md:justify-end">
                    <button type="submit" class="w-full md:w-3/12 text-white bg-orange-500 hover:bg-orange-600 px-3 py-2 rounded-md">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>

    @endif

    @if ($currentView == 'password-details')
        
    <form wire:submit.prevent="updatePasswordDetails">
        <div class="password-details rounded-lg w-11/12 lg:w-10/12 2xl:w-8/12 mx-auto my-8 border border-gray-200">
            <h2 class="bg-orange-500 text-white text-xl p-3 rounded-t-md">Change Password</h2>
            <div class="p-5">
                <div class="grid grid-cols-1 mb-5">
                    <label for="current_password" class="font-medium text-gray-700">Current Password</label>
                    <input type="password"
                        id="current_password"
                        name="current_password" 
                        wire:model.defer="current_password"
                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1"
                    >
                    @error('current_password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-6 gap-x-10 gap-y-3 mb-3">
                    <span class="md:col-span-3">
                        <label for="password" class="font-medium text-gray-700">New Password</label>
                        <div class="flex mb-2"> 
                            <div class="relative flex-1 col-span-4" x-data="{ show: true }">
                                <input class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1"
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
                    </span>
                    
                    <span class="md:col-span-3">
                        <label for="password_confirmation" class="font-medium text-gray-700">Confirm Password</label>
                        <input type="password" 
                            id="password_confirmation"
                            name="password_confirmation" 
                            wire:model.defer="password_confirmation"
                            class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-600 placeholder-gray-400 w-full block mt-1"
                        >
                        @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </span>
                </div>

                <div class="flex md:justify-end">
                    <button type="submit" class="w-full md:w-3/12 text-white bg-orange-500 hover:bg-orange-600 px-3 py-2 rounded-md">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>

    @endif

    @if ($currentView == 'company-logo-details')

    <form wire:submit.prevent="storeCompanyLogo" enctype="multipart/form-data">
        <div class="company-logo-details rounded-lg w-11/12 lg:w-10/12 2xl:w-8/12 mx-auto my-8 border border-gray-200">
            <h2 class="bg-orange-500 text-white text-xl p-3 rounded-t-md">Company Logo</h2>
            <div class="p-5">
                <div class="grid grid-cols-1 mb-5">
                    <p class="text-gray-500 mb-2">Current Logo</p>
                    @if (is_null($employer->company_logo)) 
                        <div class="w-full md:w-7/12 h-60 flex items-center justify-center border border-gray-200 mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-gray-700 p-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                            </svg> 
                        </div>
                    @elseif (!is_null($employer->company_logo))
                        <div class="w-full md:w-7/12 h-60 flex items-center justify-center border border-gray-200 mb-5">
                           <img class="w-52 h-52" src="{{ asset('storage/' . $employer->company_logo)}}" alt=""> 
                        </div>
                    @endif
                    <div class="mb-8">
                        <input type="file" name="company_logo" wire:model.defer="company_logo" id="updload{{$iteration}}">
                        @error('company_logo')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="text-gray-400">
                        <p>Maximum size 5MB for file types jpeg, gif, png, bmp. <br> Tip: Consider image with same dimensions and 300 X 300 px minimum.</p>
                    </div>
                </div>

                <div class="flex md:justify-end">
                    <button type="submit" class="w-full md:w-3/12 text-white bg-orange-500 hover:bg-orange-600 px-3 py-2 rounded-md">
                        Upload
                    </button>
                </div>
            </div>
        </div>
    </form>

    @endif
</div>
