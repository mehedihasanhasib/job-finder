<form class="space-y-4 p-6">
    <!-- Degree -->
    <div>
        <label for="degree" class="block text-sm font-medium text-gray-700 mb-1">Degree/Level</label>
        <input type="text" id="degree" name="degree" placeholder="e.g. Bachelor of Science"
            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
    </div>

    <!-- Exam/Certification -->
    <div>
        <label for="exam" class="block text-sm font-medium text-gray-700 mb-1">Exam/Certification</label>
        <input type="text" id="exam" name="exam" placeholder="e.g. Computer Science"
            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
    </div>

    <!-- Institute -->
    <div>
        <label for="institute" class="block text-sm font-medium text-gray-700 mb-1">Institute/University</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-university text-gray-400"></i>
            </div>
            <input type="text" id="institute" name="institute" placeholder="e.g. University of Technology"
                class="w-full pl-10 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
        </div>
    </div>

    <!-- Passing Year and Group in a grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="passing_year" class="block text-sm font-medium text-gray-700 mb-1">Passing Year</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="far fa-calendar-alt text-gray-400"></i>
                </div>
                <input type="text" id="passing_year" name="passing_year" placeholder="e.g. 2019"
                    class="w-full pl-10 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
            </div>
        </div>
        <div>
            <label for="group" class="block text-sm font-medium text-gray-700 mb-1">Group/Major</label>
            <input type="text" id="group" name="group" placeholder="e.g. Science"
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
        </div>
    </div>

    <!-- CGPA and Scale in a grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="cgpa" class="block text-sm font-medium text-gray-700 mb-1">CGPA/Grade</label>
            <input type="text" id="cgpa" name="cgpa" placeholder="e.g. 3.8"
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
        </div>
        <div>
            <label for="scale" class="block text-sm font-medium text-gray-700 mb-1">Scale</label>
            <select id="scale" name="scale"
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                <option value="4.0">4.0</option>
                <option value="5.0">5.0</option>
                <option value="10.0">10.0</option>
                <option value="100">100</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div>

    <!-- Modal footer with actions -->
    <div>
        <x-button type="submit">Save Education</x-button>
    </div>
</form>
