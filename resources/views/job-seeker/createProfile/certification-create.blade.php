<x-app-layout>
    <div class="mt-16 w-full bg-gray-50">
        <div class="w-11/12 mx-auto flex space-x-6 pt-10">
            <div class="w-full lg:w-8/12">
                <div class="bg-white mb-6">
                    <h1 class="text-white bg-orange-500 px-3 py-3 rounded-t-sm">
                        Add Certificate or Award
                    </h1>
                    
                    <div class="p-5">
                        <form action="">
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="certificate-title" class="font-medium text-gray-700">Title</label>
                                    <input type="text"  id="certificate-title" name="certificate-title" placeholder="e.g. CPA"
                                        value="{{old('certificate-title')}}"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('certificate-title')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="role" class="font-medium text-gray-700">Type</label>
                                    <select name="month" wire:model="month" id="month" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Select...</option>
                                        <option value="January">Certificate</option>
                                        <option value="February">Award</option>
                                    </select>
                                    @error('month')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror    
                                </div> 
                            </div>

                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="certificate-title" class="font-medium text-gray-700">Year Received</label>
                                    <select name="year" wire:model="year" id="year" class="h-10 py-1 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-500 placeholder-gray-400 w-full block mt-1">
                                        <option value="">Year</option>
                                        @php
                                            $year = date('Y');
                                        @endphp
                                        @for ($x = 0; $x <=60; $x++)
                                            <option value="">{{$year - $x}}</option>
                                        @endfor  
                                    </select>
                                    @error('year')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                     
                                </div> 
                            </div>

                            <hr>

                            <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row justify-between p-5">
                                <button class="text-white bg-gray-600 px-12 py-2 rounded-md uppercase">Cancel</button>
                                <button class="text-white bg-blue-700 px-12 py-2 rounded-md uppercase">Save</button>
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