<x-app-layout>
    <div class="w-full mt-16 flex flex-col">
        <header class="border-b border-gray-200 p-5 mb-8 bg-orange-100">
            <h1 class="text-3xl font-bold text-gray-700 py-5">Dashboard</h1>
        </header>

        @livewire('employer-edit', ['employer' => $employer])
    </div>
</x-app-layout>