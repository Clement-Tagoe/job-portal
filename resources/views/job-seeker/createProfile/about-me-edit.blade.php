<x-app-layout>
    <div class="mt-16 w-full bg-gray-50">
        <div class="w-11/12 mx-auto flex space-x-6 pt-10">
            <div class="w-full lg:w-8/12">
                <div class="bg-white mb-6">
                    <h1 class="text-white bg-orange-500 px-3 py-3 rounded-t-sm">
                        About Me
                    </h1>
                    <p class="text-gray-500 px-3 py-3">Give a shore overview of your career history and skills.</p>
                    <form action="/job-seeker/about-me/update" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="p-5">
                            <textarea name="about_me" id="about_me" cols="60" rows="12" placeholder="Max. 2000 characters" class="border border-gray-200 w-full outline-none focus:border-gray-400">{{old('about_me', $user->about_me)}}</textarea>
                            @error('about_me')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <hr>
                        <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row justify-between p-5">
                            <a href="/job-seeker/profile" class="text-white bg-gray-600 px-12 py-2 rounded-md uppercase">Cancel</a>
                            <button type="submit" class="text-white bg-blue-700 px-12 py-2 rounded-md uppercase">Save</button>
                        </div>
                    </form>
                </div>
                
            </div>

            <div class="hidden lg:w-4/12">

            </div>
        </div>
    </div>
</x-app-layout>