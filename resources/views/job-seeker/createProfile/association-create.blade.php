<x-app-layout>
    <div class="mt-16 w-full bg-gray-50">
        <div class="w-11/12 mx-auto flex space-x-6 pt-10">
            <div class="w-full lg:w-8/12">
                <div class="bg-white mb-6">
                    <h1 class="text-white bg-orange-500 px-3 py-3 rounded-t-sm">
                        Add Association
                    </h1>
                    
                    <div class="p-5">
                        <form action="">
                            <div class="w-full flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-6 mb-3">
                                <div class="w-full md:w-1/2">
                                    <label for="association" class="font-medium text-gray-700">Association</label>
                                    <input type="text"  id="association" name="association" placeholder="e.g. CPA"
                                        value="{{old('association')}}"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('association')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
        
                                <div class="w-full md:w-1/2">
                                    <label for="role" class="font-medium text-gray-700">Role</label>
                                    <input type="text"  id="role" name="role" placeholder="e.g. Member or Chairman"
                                        value="{{old('role')}}"
                                        class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                    >
                                    @error('role')
                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
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