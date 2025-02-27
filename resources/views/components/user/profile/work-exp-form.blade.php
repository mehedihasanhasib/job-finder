<!-- Work Experience Form -->
<form class="space-y-4 p-6">
    <!-- Job Title -->
    <div>
        <label for="job_title" class="block text-sm font-medium text-gray-700 mb-1">Job Title</label>
        <input type="text" id="job_title" name="job_title" placeholder="e.g. Senior Frontend Developer"
            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
    </div>

    <!-- Company Name -->
    <div>
        <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Company</label>
        <input type="text" id="company" name="company" placeholder="e.g. Acme Inc."
            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
    </div>

    <!-- Location -->
    <div>
        <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Location</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-map-marker-alt text-gray-400"></i>
            </div>
            <input type="text" id="location" name="location" placeholder="e.g. New York, NY"
                class="w-full pl-10 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
        </div>
    </div>

    <!-- Employment Period -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">Start
                Date</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="far fa-calendar-alt text-gray-400"></i>
                </div>
                <input type="month" id="start_date" name="start_date"
                    class="w-full pl-10 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
            </div>
        </div>
        <div>
            <label for="end_date" class="block text-sm font-medium text-gray-700 mb-1">End Date</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="far fa-calendar-alt text-gray-400"></i>
                </div>
                <input type="month" id="end_date" name="end_date"
                    class="w-full pl-10 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
            </div>
            <div class="mt-2">
                <input type="checkbox" id="current_job" name="current_job"
                    class="rounded text-indigo-600 focus:ring-indigo-500" />
                <label for="current_job" class="text-sm text-gray-700 ml-2">I currently work
                    here</label>
            </div>
        </div>
    </div>

    <!-- Job Description -->
    <div>
        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <textarea id="description" name="description" rows="4"
            placeholder="Describe your responsibilities and achievements"
            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
        <p class="mt-1 text-xs text-gray-500">Tip: Use bullet points to highlight key accomplishments
        </p>
    </div>
</form>

<!-- Modal footer with actions -->
<div class="bg-gray-50 px-6 py-4 border-t border-gray-200 flex items-center justify-end space-x-3">
    <button type="button" x-on:click="showModal = false"
        class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors">
        Cancel
    </button>
    <button type="submit"
        class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
        Save Experience
    </button>
</div>
