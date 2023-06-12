<x-app-layout>
    <div class="w-full mt-16 flex flex-col">
        <header class="border-b border-gray-200 p-5 mb-8 bg-orange-100">
            <h1 class="text-3xl font-bold text-gray-700">Dashboard</h1>
            <p class="text-gray-500">Manage Job postings</p>
        </header>
        
        <div class="w-full mx-auto">
            <div class="flex flex-col md:flex-row items-center space-x-4 w-11/12 mx-auto mb-8">
                <div class="h-36 w-36 border border-gray-300 rounded-full bg-gray-200 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-gray-700 p-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                    </svg>                      
                </div>
                <div>
                    <h2 class="font-semibold text-gray-700 text-xl">{{$employer->company_name}}</h2>
                    <p class="text-gray-500">{{$employer->address}}</p>
                </div>
            </div>

            <hr class="border-1 border-gray-200">

            <div class="w-11/12 mx-auto">
                <div class="rounded-lg bg-white p-4 shadow-xs">
                    <div class="mb-8 w-full overflow-hidden rounded-lg border shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="table-fixed w-full whitespace-no-wrap">
                                <thead>
                                    <tr class="border-b bg-gray-50 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                                        <th class="px-4 py-3">Job Title</th>
                                        <th class="px-4 py-3">Date Posted</th>
                                        <th class="px-4 py-3">Number of Applicants</th>
                                        <th class="px-4 py-3 text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y">
                                   
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 text-sm"><a href="#" class="hover:text-orange-600">Financial Analyst</a></td>
                                            <td class="px-4 py-3 text-sm">
                    
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                
                                            </td>
                                            <td class=" flex px-4 py-3 space-x-2 items-center justify-center">
                                                <a class="inline-block bg-purple-600 rounded-lg border-2 border-transparent  px-4 py-1 text-center text-sm font-medium leading-5 text-white transition-colors duration-150 hover:bg-purple-700 focus:outline-none focus:ring active:bg-purple-600" href="#">
                                                    {{ __('Edit') }}
                                                </a>
                                                <form action="#" method="POST" class="inline-block bg-red-600 rounded-lg border-2 border-transparent  px-4 py-1 text-center text-sm font-medium leading-5 text-white transition-colors duration-150 hover:bg-red-700 focus:outline-none focus:ring active:bg-red-600">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button>
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            
                </div>
            </div>
            
            
        </div>
    </div>
</x-app-layout>