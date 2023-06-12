<x-app-layout>
    <div class="mt-20 w-11/12 md:w-9/12  mx-auto flex flex-col items-center justify-center">
        <h1 class="font-semibold text-center text-3xl pt-5">Create your Account</h1>
        <div class="w-full flex flex-col space-y-6 md:space-y-0 md:flex-row md:space-x-6 my-10">
            <div class="md:w-1/2 flex flex-col items-center justify-center border border-gray-300 hover:border-gray-400 rounded-lg py-12">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-28 h-28 mb-4 text-white bg-orange-400 rounded-full">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <h2 class="text-center text-3xl font-medium mb-4">Job Seeker</h2>
                <p class="text-center text-gray-500 mb-4">
                    Are you looking for your dream job?
                    <br>
                    Create a unique career profile with Jobberman
                </p>
                <a href="{{route('job-seeker.sign-up')}}" class="px-6 py-2 rounded-md bg-orange-600 text-white hover:bg-orange-700">
                    Sign-up as seeker
                </a>
            </div>
            <div class="md:w-1/2 flex flex-col items-center justify-center border border-gray-300 hover:border-gray-400 rounded-lg py-12">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-28 h-28 mb-4 text-white bg-orange-400 rounded-full">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                </svg>
                <h2 class="text-center text-3xl font-medium mb-4">Employer</h2>
                <p class="text-center text-gray-500 mb-4">
                    Are you looking for quality candidates?
                    <br>
                    Advertise and search with Jobberman
                </p>
                <a href="{{route('employer.sign-up')}}" class="px-6 py-2 rounded-md bg-orange-600 text-white hover:bg-orange-700">
                    Sign-up as employer
                </a>
            </div>
        </div>
    </div>  
</x-app-layout>