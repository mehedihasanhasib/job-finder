<div class="w-full md:w-1/4">
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <!-- Profile Header -->
        <div class="px-6 py-5 text-center">
            <div class="mb-4">
                <img src="https://i.pravatar.cc/40?img=2" alt="Profile photo"
                    class="w-20 h-20 rounded-full border-2 border-white object-cover mx-auto shadow">
            </div>
            <h1 class="text-xl font-bold">{{ Auth::user()->name }}</h1>
        </div>

        <!-- Contact Information -->
        <div class="border-t px-6 py-4">
            <h3 class="font-medium text-gray-700 mb-3">Contact</h3>
            <div class="space-y-2 text-sm">
                <p class="flex items-center text-gray-600">
                    <i class="fas fa-envelope mr-3 text-gray-400"></i>
                    <span>john.doe@example.com</span>
                </p>
                <p class="flex items-center text-gray-600">
                    <i class="fas fa-phone mr-3 text-gray-400"></i>
                    <span>+1 (555) 123-4567</span>
                </p>
                <p class="flex items-center text-gray-600">
                    <i class="fab fa-linkedin mr-3 text-gray-400"></i>
                    <a href="#" class="text-indigo-600 hover:underline">linkedin.com/in/johndoe</a>
                </p>
                <p class="flex items-center text-gray-600">
                    <i class="fas fa-globe mr-3 text-gray-400"></i>
                    <a href="#" class="text-indigo-600 hover:underline">johndoe.dev</a>
                </p>
            </div>
        </div>

        <!-- Skills -->
        <div class="border-t px-6 py-4">
            <h3 class="font-medium text-gray-700 mb-3">Skills</h3>
            <div class="flex flex-wrap gap-2">
                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">JavaScript</span>
                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">React</span>
                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Vue.js</span>
                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">TypeScript</span>
                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">HTML5</span>
                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">CSS3</span>
            </div>
        </div>
    </div>
</div>
