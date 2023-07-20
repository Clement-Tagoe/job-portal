<nav x-data="{ open: false }" class="fixed top-0 w-full z-10 bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="/" class="italic font-bold text-orange-600">
                    Job Portal
                </a>
            </div>

            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden lg:flex lg:items-center lg:ml-10">                
                    <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center py-6 hover:border-b-2 hover:text-orange-600 hover:border-orange-600 leading-4 text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ __('Job Seekers') }}</div>
        
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
        
                            <x-slot name="content">
                                <x-dropdown-link :href="route('jobs.index')" class="border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                    {{ __('Job Vacancies') }}
                                </x-dropdown-link>
        
                                <x-dropdown-link class="border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                    {{ __('CV Review Services') }}
                                </x-dropdown-link>

                                <x-dropdown-link class="border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                    {{ __('Job Search Advice') }}
                                </x-dropdown-link>
                            </x-slot>
                    </x-dropdown>
                    
            
                    <x-dropdown align="left" width="48" marginLeft="ml-12">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center ml-12 py-6 hover:border-b-2 hover:text-orange-600 hover:border-orange-600 leading-4 text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ __('Career') }}</div>
    
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <x-dropdown-link class="border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                {{ __('Career Development') }}
                            </x-dropdown-link>
    
                            <x-dropdown-link class="border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                {{ __('Life At Work') }}
                            </x-dropdown-link>

                            <x-dropdown-link class="border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                {{ __('Job Market News') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>

                    <x-dropdown align="left" width="48" marginLeft="ml-12">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center ml-12 py-6 hover:border-b-2 hover:text-orange-600 hover:border-orange-600 leading-4 text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ __('Employers') }}</div>
    
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <x-dropdown-link class="border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                {{ __('Best Match') }}
                            </x-dropdown-link>
    
                            <x-dropdown-link class="border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                {{ __('Skills Assesments') }}
                            </x-dropdown-link>

                            <x-dropdown-link class="border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                {{ __('Business Training') }}
                            </x-dropdown-link>

                            <x-dropdown-link class="border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                {{ __('Employers Corner') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>


                    <x-dropdown align="left" width="48" marginLeft="ml-12">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center ml-12 py-6 hover:border-b-2 hover:text-orange-600 hover:border-orange-600 leading-4 text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ __('Help Center') }}</div>
    
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <x-dropdown-link class="border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                {{ __('Frequently Asked Questions') }}
                            </x-dropdown-link>
    
                            <x-dropdown-link class="border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                {{ __('Contact Us') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Authorization -->
            <div class="hidden lg:relative lg:flex lg:items-center lg:justify-center lg:ml-6 lg:space-x-3">
                @if(Auth::guard('employer')->check())
                    <x-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <div class="text-orange-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>                                
                            </div>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link href="{{route('employers.dashboard')}}" class="flex border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                                </svg>
                                {{ __('Your Dashboard') }}
                            </x-dropdown-link>

                            <div class="block w-full px-4 py-2 text-left leading-5 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out border-b border-gray-200 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                <form method="POST" action="/account/logout">
                                    @csrf
                                    <button type="sumbit" class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                        </svg>
                                        {{ __('Logout') }}
                                    </button>
                                </form>
                            </div>
                        </x-slot>
                    </x-dropdown>

                    <div class="text-orange-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                        </svg>     
                    </div>

                    <a href="{{route('jobs.create')}}" class="px-6 py-3 lg:py-2 bg-white border border-orange-600 hover:bg-orange-200 rounded-md font-medium text-orange-600 ">
                        Post A Job
                    </a>
                @elseif(Auth::guard('web')->check())
                    <div x-cloak x-data="{ isOpen: false }" class="flex space-x-4 items-center">
                        
                        <div x-show="!isOpen" @click="isOpen = true" class="flex space-x-2 items-center px-4 py-3 lg:py-2 bg-white border border-orange-600 hover:bg-orange-200 rounded-md font-medium text-orange-600 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                            <span>Find a Job</span>
                        </div>
                        
                        <div x-show="isOpen" >
                            <form action="" @click.outside="isOpen = false">
                                <div class="flex border border-orange-600 rounded-md pl-1">
                                    <input type="text" class="px-4 py-2 border-none" placeholder="Keyword Search">
                                    <button class="px-6 bg-orange-600 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                        </svg>
                                    </button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                        
                    <div class="text-orange-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                        </svg>     
                    </div>
                
                    
                    <div x-cloak x-data="{isOpen: false}" class="relative">
                        <div @click="isOpen = ! isOpen" class="text-orange-600 hover:text-orange-400 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>   
                        <div x-show="isOpen" @click.outside="isOpen = false" class="authentication-dropdown absolute flex flex-col bg-white z-8 top-12 -right-10 w-68 h-screen border border-gray-200">
                            <div class="flex space-x-3 pl-3 py-3 items-center border-b border-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <div class="font-medium text-lg text-gray-500">
                                    {{Auth::user()->first_name .' '. Auth::user()->last_name}}     
                                </div>                         
                            </div>
                            <a href="{{route('job-seeker.dashboard')}}" class="flex items-center pl-3 py-2 text-gray-500 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                                </svg>
                                {{ __('My Dashboard') }}
                            </a>

                            <a href="{{route('job-seeker.profile')}}" class="flex items-center pl-3 py-2 text-gray-500 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                </svg> 
                                {{ __('Career Profile') }}
                            </a>

                            <div class="pl-3 py-2 text-gray-500 hover:text-orange-600 hover:bg-orange-200 cursor-pointer">
                                <form method="POST" action="/account/logout">
                                    @csrf
                                    <button type="sumbit" class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                        </svg>
                                        {{ __('Logout') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>        
                @else    
                    <a href="{{route('login')}}" class="text-sm mx-3 text-gray-500 cursor-pointer lg:mx-4">
                        Log In
                    </a>
                    
                    <span class="h-3 border-r border-gray-300 border-1"></span>

                    <a href="{{route('sign-up')}}"  class="text-sm mx-3 text-gray-500 cursor-pointer lg:mx-4">
                        Sign Up
                    </a>
                    
                    <a href="{{route('login')}}" class="px-6 py-3 lg:py-2 bg-orange-600  hover:bg-orange-700 rounded-md font-medium text-white">
                        Post A Job
                    </a>
                @endif
                
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">

        <!-- Responsive Settings Options -->
        <div class="pt-1 pb-1 text-gray-500 z-5 overflow-y-scroll h-134">

            <div class="mt-3 mx-2 space-y-1">
                @if(Auth::guard('employer')->check())
                    <div class="flex flex-col space-y-2">
                        <div class="flex space-x-3 pl-3 pb-1 items-center border-b border-gray-200 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-orange-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div class="font-medium text-xl text-gray-500">
                                {{Auth::guard('employer')->user()->company_name}}     
                            </div>                         
                        </div>
                        <x-responsive-nav-link href="{{route('jobs.create')}}" class="px-6 py-4 lg:py-2 border-l-4 border border-orange-600 bg-orange-600 hover:bg-orange-700 cursor-pointer rounded-md text-white font-medium text-center">
                            {{__('Post A Job')}}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link href="{{route('employers.dashboard')}}" class="flex px-6 py-4 lg:py-2 hover:bg-orange-200 cursor-pointer rounded-md text-gray-500 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                            </svg>
                            {{__('Your Dashboard')}}
                        </x-responsive-nav-link>
        
                        <div class="pl-3 pr-6 py-4 lg:py-2 hover:bg-orange-200 cursor-pointer rounded-md text-gray-500 font-medium">
                            <form method="POST" action="/account/logout">
                                @csrf
                                <button type="sumbit" class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                    {{ __('Logout') }}
                                </button>
                            </form>
                        </div>
                    </div>
                @elseif(Auth::guard('web')->check())
                    <div class="flex flex-col space-y-2">
                        <div class="flex space-x-3 pl-3 pb-1 items-center border-b border-gray-200 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-orange-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div class="font-medium text-xl text-gray-500">
                                {{Auth::user()->first_name .' '. Auth::user()->last_name}}     
                            </div>                         
                        </div>
                        <x-responsive-nav-link href="{{route('jobs.create')}}" class="px-6 py-4 lg:py-2 border-l-4 border border-orange-600 bg-orange-600 hover:bg-orange-700 cursor-pointer rounded-md text-white font-medium text-center">
                            {{__('Post A Job')}}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link href="{{route('job-seeker.dashboard')}}" class="flex px-6 py-4 lg:py-2 hover:bg-orange-200 cursor-pointer rounded-md text-gray-500 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                            </svg>
                            {{__('Your Dashboard')}}
                        </x-responsive-nav-link>
        
                        <x-responsive-nav-link href="{{route('job-seeker.profile')}}" class="flex px-6 py-4 lg:py-2 hover:bg-orange-200 cursor-pointer rounded-md text-gray-500 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                            </svg>
                            {{__('Career Profile')}}
                        </x-responsive-nav-link>
        
                        <div class="pl-3 pr-6 py-4 lg:py-2 hover:bg-orange-200 cursor-pointer rounded-md text-gray-500 font-medium">
                            <form method="POST" action="/account/logout">
                                @csrf
                                <button type="sumbit" class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                    {{ __('Logout') }}
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="flex space-x-2">
                        <x-responsive-nav-link href="{{route('login')}}" class="px-6 py-4 lg:py-2 border-l-4 border border-orange-600 bg-orange-600 hover:bg-orange-700 cursor-pointer rounded-md text-white font-medium text-center">
                            {{__('Log In')}}
                        </x-responsive-nav-link>
        
                        <x-responsive-nav-link href="{{route('sign-up')}}" class="px-6 py-4 lg:py-2 border-l-4 rounded-md font-medium text-orange-600 hover:bg-orange-100 cursor-pointer text-center border border-orange-500">
                            {{__('Sign Up')}}
                        </x-responsive-nav-link>
                    </div>
                    
                    <x-responsive-nav-link href="{{route('sign-up')}}" class="flex items-center cursor-pointer pt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                        {{__('Post A Job')}}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{route('jobs.index')}}" class="flex items-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>                      
                        {{__('Find A Job')}}
                    </x-responsive-nav-link>
                @endif

                <x-responsive-nav-link class="text-orange-600 text-lg">
                    {{__('Job Seekers')}}
                </x-responsive-nav-link>
                    <div class="border-l-4 ml-3">
                        <x-responsive-nav-link class="pl-3">
                            {{__('Job Vacancies')}}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link class="pl-3">
                            {{__('CV Review Services')}}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link class="pl-3">
                            {{__('Job Search Advice')}}
                        </x-responsive-nav-link>
                    </div>
                
                    <x-responsive-nav-link class="text-orange-600 text-lg">
                        {{__('Career')}}
                    </x-responsive-nav-link>
                        <div class="border-l-4 ml-3">
                            <x-responsive-nav-link class="pl-3">
                                {{__('Career Development')}}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link class="pl-3">
                                {{__('Life At Work')}}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link class="pl-3">
                                {{__('Job Market News')}}
                            </x-responsive-nav-link>
                        </div>
                    
                    <x-responsive-nav-link class="text-orange-600 text-lg">
                        {{__('Employers')}}
                    </x-responsive-nav-link>
                        <div class="border-l-4 ml-3">
                            <x-responsive-nav-link class="pl-3">
                                {{__('Skills Assessments')}}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link class="pl-3">
                                {{__('Employers Corner')}}
                            </x-responsive-nav-link>
                        </div>
                
                    <x-responsive-nav-link class="text-orange-600 text-lg">
                        {{__('Help Center')}}
                    </x-responsive-nav-link>
                        <div class="border-l-4 ml-3">
                            <x-responsive-nav-link class="pl-3">
                                {{__('Frequently Asked Questions')}}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link class="pl-3">
                                {{__('Contact Us')}}
                            </x-responsive-nav-link>
                        </div>
            </div>
        </div>
    </div>
</nav>