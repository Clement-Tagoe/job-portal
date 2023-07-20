<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://kit.fontawesome.com/d142341c64.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet" />
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white flex flex-col">
            @include('layouts.navigation')


            <!-- Page Content -->
            <main class="grow">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <div class="w-full bg-white border-t-2 border-gray-200">
                <div class="w-11/12 mx-auto flex flex-col pt-6">
                    <div class="flex flex-col flex-wrap justify-between items-center w-full md:flex-row">
                        <a class="text-sm text-orange-600 py-2" href="">About</a>
                        <span class="hidden text-gray-300 md:block">|</span>
                        <a class="text-sm text-orange-600 py-2" href="">Companies Hiring</a>
                        <span class="hidden text-gray-300 md:block">|</span>
                        <a class="text-sm text-orange-600 py-2" href="">Privacy Policy</a>
                        <span class="hidden text-gray-300 md:block">|</span>
                        <a class="text-sm text-orange-600 py-2" href="">Terms</a>
                        <span class="hidden text-gray-300 md:block">|</span>
                        <a class="text-sm text-orange-600 py-2" href="">CV Review Services</a>
                        <span class="hidden text-gray-300 md:block">|</span>
                        <a class="text-sm text-orange-600 py-2" href="">Skills Assessments</a>
                        <span class="hidden text-gray-300 md:block">|</span>
                        <a class="text-sm text-orange-600 py-2" href="">Banner Rate Card</a>
                    </div>
            
                    <div class="flex flex-row justify-center md:justify-start">
                        <span class="pt-3 text-sm text-gray-700">Follow us On: </span>
                    </div>
            
                    <div class="flex flex-row justify-center md:justify-start items-centre py-3 w-full">
                        <a class="mr-6" href="">
                            <img src="../../images/twitter.png" alt="twitter" class="w-6 h-6">
                        </a>
                        <a class="mr-6" href="">
                            <img src="../../images/youtube.png" alt="youtube" class="w-6 h-6">
                        </a>
                        <a class="mr-6" href="">
                            <img src="../../images/instagram.png" alt="instagram" class="w-6 h-6">
                        </a>
                        <a class="mr-6" href="">
                            <img src="../../images/facebook.png" alt="facebook" class="w-6 h-6">
                        </a>
                        <a class="mr-6" href="">
                            <img src="../../images/linkedin.png" alt="linkedin" class="w-6 h-6">
                        </a>
                        <a class="mr-6" href="">
                            <img src="../../images/playstore.png" alt="playstore" class="w-6 h-6">
                        </a>
                    </div>
            
                    <div class="flex flex-row justify-center items-center py-2 w-full border-t-2 border-gray-300">
                        <span class="pr-2">
                            <img src="../../images/copyright.png" alt="copyright" class="w-4 h-4">
                        </span>
                        <span class="font-medium">
                            ctagoe
                        </span>
                    </div>
                </div>
            </div>
        </div>

       
        <x-notification-status />

        @if(session()->has('success_message'))
            <x-notification-status 
                redirect="true"
                messageToDisplay="{{ (session('success_message')) }}"
            />
        @endif
        @livewireScripts
    </body>
</html>