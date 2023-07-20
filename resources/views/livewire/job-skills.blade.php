<div class="bg-white p-5 border border-gray-200 rounded-lg mb-10">
    <h2 class="font-medium">Job Skills</h2>
    <p class="text-gray-500 italic mb-3">What are your areas of expertise?</p>
    <div class="mb-3">

        <x-job-skills-card :skillsCsv=$userJobSkills/>
    </div>
    <hr class="mb-2">

    <form wire:submit.prevent="storeSkill">
        <div class="py-4">       
            <input type="text" name="skill" wire:model.defer="skill" placeholder="Skill" class="border border-gray-200 w-full outline-none rounded-lg py-2 px-2">
        </div>

        <hr class="mb-2">

        <div class="flex justify-end mt-2">
            <button type="submit" class="flex space-x-2 text-gray-400 border border-gray-400 p-2 rounded-2xl">
                <span>Add</span> 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 border-b border-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>      
            </button>
        </div>
    </form>
</div>
