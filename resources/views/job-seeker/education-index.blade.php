<x-app-layout>
    <div class="mt-16 w-full bg-gray-50">
        <div class="w-11/12 mx-auto flex space-x-6 pt-10 pb-6">
            <div class="w-full lg:w-8/12">
                <div class="bg-white">
                    <h1 class="text-white bg-orange-500 px-3 py-5 rounded-t-sm">
                        Education
                    </h1>
                    <p class="text-gray-600 pl-3 py-5">List your qualifications here</p>
                    <hr>
                    @foreach ($educations as $education)
                        <div class="mt-2 pl-5">
                            <h2 class="text-gray-600 font-medium">{{$education->school_name}}</h2>
                            <div class="flex flex-col md:flex-row md:items-center md:space-x-3 text-gray-500 mb-3">
                                <p>: {{$education->description}}</p>
                                <span class="hidden md:inline-block h-3 border-r border-gray-500 border-1"></span>
                                <p>{{$education->start_month .' '. $education->start_year . ' - ' . $education->end_month .' '. $education->end_year}}</p>
                            </div>
                            <p>{{$education->description}}</p>
                        </div>
                        <hr class="">
                        <div x-cloak x-data="{isOpen: false}">
                            <div class="flex items-center justify-between px-3 py-2 border-b border-gray-300">
                                <div @click="isOpen = ! isOpen" class="border border-red-600 hover:bg-red-200 text-red-600 px-3 py-2 rounded-2xl cursor-pointer">
                                    Delete
                                </div>
    
                                <a href="{{route('education.edit', $education)}}" class="flex space-x-2 px-3 bg-orange-600 hover:bg-orange-500 text-white py-2 rounded-2xl">
                                    <span>Edit</span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 border-b border-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>      
                                </a>
                            </div>
                            <div x-show="isOpen" class="flex flex-col text-center space-y-5 items-center md:flex-row md:space-y-0 md:justify-between bg-gray-600 text-white py-5 px-5">
                                <span>Are you sure you want to delete this?</span>
                                <div class="flex flex-col space-y-3 md:flex-row md:space-y-0 md:space-x-5 items-center">
                                    <div @click="isOpen = false" class="border-2 border-white px-3 py-2 w-40 rounded-sm cursor-pointer">Cancel</div>
                                    <form action="{{route('education.destroy', $education)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-orange-600 px-3 py-2 rounded-sm w-40">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    @endforeach
                </div>
                <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row justify-between p-5 bg-white">
                    <a href="/job-seeker/profile" class="text-white text-center bg-gray-600 px-12 py-2 rounded-md uppercase">Back</a>
                    <a href="/job-seeker/education/create" class="text-white bg-blue-700 px-12 py-2 rounded-md uppercase">Add</a>
                </div>
                
            </div>

            <div class="hidden lg:w-4/12">

            </div>
        </div>
    </div>
</x-app-layout>