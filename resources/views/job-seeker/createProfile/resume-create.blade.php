<x-app-layout>
    <div class="mt-16 w-full bg-gray-50">
        <div class="w-11/12 mx-auto flex space-x-6 pt-10">
            <div class="w-full lg:w-8/12">
                <div class="bg-white mb-6">
                    <h1 class="text-white bg-orange-500 px-3 py-3 rounded-t-sm">
                        Add your CV
                    </h1>
                    <p class="text-gray-500 px-3 py-3">Upload and save your CV to our system. You can use your uploaded CV to quickly apply for a job.</p>
                    
                    <div class="p-5">
                        <form action="">
                            <div class="w-full mb-5">
                                <label for="title" class="font-medium text-gray-700">Title</label>
                                <input type="text"  id="title" name="title" placeholder="Title"
                                    value="{{old('title')}}"
                                    class="h-10 py-3 px-2 rounded-md border border-gray-300 hover:border-gray-400 outline-none text-gray-700 placeholder-gray-400 w-full block mt-1"
                                >
                                @error('title')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div>
                                <input type="file" >
                                @error('title')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror

                                <span class="block text-sm text-gray-400 mt-5">Optionally upload a CV no larger than 10MB for file types .pdf .doc .docx .rtf</span>

                                <span class="block text-sm text-orange-600 mt-5">Uploading a new CV will overwrite your current one.</span>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row justify-between p-5">
                        <button class="text-white bg-gray-600 px-12 py-2 rounded-md uppercase">Cancel</button>

                        <button class="text-white bg-blue-700 px-12 py-2 rounded-md uppercase">Save</button>
                    </div>
                </div>
                
            </div>

            <div class="hidden lg:w-4/12">

            </div>
        </div>
    </div>
</x-app-layout>