<x-app-layout>
    <div class="mt-16 w-full bg-gray-50">

        <!--For small Screens-->
        <div class="w-11/12 mx-auto md:hidden">
            <a href="/account/login" class="inline-block text-center w-full mt-5 px-3 py-3 text-white font-semibold bg-orange-600 hover:bg-orange-700 rounded-md">
                Log In and Apply
            </a>
        </div>
    
        <!--For medium and large screens-->
        <div class="hidden md:flex w-full bg-orange-100 py-6 md:py-auto md:mt-8">
            <div class="w-11/12 mx-auto">
                <form action="" class="flex flex-col items-center md:flex-row w-full">
                    <div class="text-gray-600 mr-5 whitespace-nowrap">Find a job</div>
                    <select class="w-full h-10 pl-2 text-gray-500 rounded-md border border-gray-300 hover:border-gray-400 focus:border-gray-400 placeholder-gray-400 focus:placeholder-gray-900 mb-3 w-full md:mb-0 md:mr-3" name="" id="">
                        <option value="">All Job Functions</option>
                        @foreach ($functions as $function)
                            <option value="{{$function->id}}">{{$function->name}}</option>
                        @endforeach
                    </select>
                    <select class="w-full h-10 pl-2 text-gray-500 rounded-md border border-gray-300 hover:border-gray-400 focus:border-gray-400 placeholder-gray-400 focus:placeholder-gray-900 mb-3 w-full md:mb-0 md:mr-3" name="" id="">
                        <option value="">All Industries</option>
                        @foreach ($industries as $industry)
                            <option value="{{$industry->id}}">{{$industry->name}}</option>
                        @endforeach
                    </select>
                    <select class="w-full h-10 pl-2 text-gray-500 rounded-md border border-gray-300 hover:border-gray-400 focus:border-gray-400 placeholder-gray-400 focus:placeholder-gray-900 mb-3 w-full md:mb-0 md:mr-3" name="" id="">
                        <option value="">All Locations</option>
                        @foreach ($locations as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach
                    </select>
                    <button class="flex items-center justify-center appearance-none font-medium text-center rounded-md text-base py-3 lg:py-2 px-6 bg-orange-600 text-white  hover:bg-orange-700 w-full lg:w-1/2">
                        Search
                    </button>
                </form>
            </div>  
        </div>


    <div>
</x-app-layout>