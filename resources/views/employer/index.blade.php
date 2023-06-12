<x-app-layout>
    <div class="w-full mt-16">

        <div class="rounded-lg bg-white p-4 shadow-xs">
            <div class="mb-8 w-full overflow-hidden rounded-lg border shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="border-b bg-gray-50 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                                <th class="px-4 py-3">Company Name</th>
                                <th class="px-4 py-3">Contact Person</th>
                                <th class="px-4 py-3">Phone Number</th>
                                <th class="px-4 py-3">Address</th>
                                <th class="px-4 py-3">Email</th>
                                <th class="px-4 py-3">Jobs Posted</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            @forelse($employers as $employer)
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 text-sm"><a href="#" class="hover:text-orange-600">{{$employer->company_name}}</a></td>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                       {{$employer->contact_person}} 
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{$employer->phone_number}}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                       {{$employer->address}}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{$employer->email}}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-center">
                                        {{$employer->jobs->count()}}
                                    </td>  
                                    <td class=" flex px-4 py-3 space-x-2 items-center">
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
                            @empty
                                <tr>
                                    <td class="px-4 py-3" colspan="4">No jobs found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
    
        </div>
    </div> 
</x-app-layout>