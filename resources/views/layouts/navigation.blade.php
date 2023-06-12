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
            <div class="hidden lg:flex lg:items-center lg:ml-6">
                <a href="/account/login" class="text-sm mx-3 text-gray-500 cursor-pointer lg:mx-4">
                    Log In
                </a>
                
                <span class="h-3 border-r bprder-gray=300 border-1"></span>

                <a href="{{route('sign-up')}}"  class="text-sm mx-3 text-gray-500 cursor-pointer lg:mx-4">
                    Sign Up
                </a>
                
                <a href="/account/login" class="px-6 py-3 lg:py-2 bg-orange-600  hover:bg-orange-700 rounded-md font-medium text-white">
                    Post A Job
                </a>
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
            {{-- <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div> --}}

            <div class="mt-3 mx-2 space-y-1">
                
                <div class="flex space-x-2">
                    <x-responsive-nav-link class="px-6 py-4 lg:py-2 border-l-4 border border-orange-600 bg-orange-600 hover:bg-orange-700 cursor-pointer rounded-md text-white font-medium text-center">
                        {{__('Log In')}}
                    </x-responsive-nav-link>
    
                    <x-responsive-nav-link href="{{route('sign-up')}}" class="px-6 py-4 lg:py-2 border-l-4 rounded-md font-medium text-orange-600 hover:bg-orange-100 cursor-pointer text-center border border-orange-500">
                        {{__('Sign Up')}}
                    </x-responsive-nav-link>
                </div>
                
                <x-responsive-nav-link class="flex items-center cursor-pointer pt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>
                    {{__('Post A Job')}}
                </x-responsive-nav-link>

                <x-responsive-nav-link class="flex items-center cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                      </svg>                      
                    {{__('Find A Job')}}
                </x-responsive-nav-link>


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
                <!-- Authentication -->
                {{-- <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form> --}}
            </div>
        </div>
    </div>
</nav>