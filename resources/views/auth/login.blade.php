<x-app-layout>
  <div class="w-full mt-24 mb-10">
        <div class="w-11/12 md:w-10/12 lg:w-8/12 mx-auto flex flex-col items-center justify-center md:flex-row h-140 rounded-lg border border-gray-300">
            <div class="w-full md:w-1/2">
                <div class="w-11/12 md:w-10/12 mx-auto">
                    <h1 class="font-semibold text-3xl text-gray-600 text-center py-10">Log In</h1>
                    <form action="/account/authenticate" method="POST">
                        @csrf
                        <input type="text" placeholder="Email Address" name="email" required
                            class="w-full h-10 py-3 px-2 mb-6 rounded-md block hover:border-gray-400 focus:border-gray-400 text-gray-700 outline-none placeholder-gray-400 border border-gray-300"
                        >
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror

                        <input type="password" placeholder="Password" name="password" required
                            class="w-full h-10 py-3 px-2 mb-6 rounded-md block hover:border-gray-400 focus:border-gray-400 text-gray-700 outline-none placeholder-gray-400 border border-gray-300"
                        > 
                        @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        <div class="mb-4">
                            <a href="" class="font-bold text-orange-600">
                                Forgot Password?    
                            </a>
                        </div>
                        
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="remember_me" name="remember_me" value="remember_me"
                                class="w-4 h-4 rounded border border-gray-300 transition duration ease-in-out cursor-pointer text-orange-600 focus:ring-orange-600"
                            >  
                            <label for="remember_me" class="text-gray-600">Keep me logged in</label>
                        </div>
                        <button type="submit" class="w-full bg-orange-600 hover:bg-orange-700 text-white rounded-md px-3 py-3 my-4">
                            Log in
                        </button>

                        <div class="w-full text-sm p-4 mt-3 mb-8 text-center text-gray-700 bg-gray-200">
                            <span>Don't have an account?</span>
                            <a href="/account/sign-up" class="text-orange-600">
                                Sign up
                            </a>
                        </div>
                    </form>    
                </div>
            </div>
            <div class="hidden md:flex md:w-1/2 h-full">
                <img class="w-full h-full rounded-r-lg" src="../images/office-1.jpg" alt="office-meeting">
            </div>
        </div>
  </div>
</x-app-layout>