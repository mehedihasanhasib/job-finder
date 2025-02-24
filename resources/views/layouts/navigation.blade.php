<nav class="bg-white border-b border-gray-200 w-full z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-xl font-bold text-indigo-600">JobFinder</span>
                </div>
                <div class="hidden md:block ml-10">
                    <div class="flex items-baseline space-x-4">
                        <x-nav-link href="{{ route('home') }}" activeRoute="home" name="Home" />
                        <x-nav-link href="{{ route('jobs') }}" activeRoute="jobs" name="Jobs" />
                        {{-- <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-indigo-600 {{ request()->routeIs('home') ? 'text-indigo-600' : '' }}">Home</a>
                        <a href="{{ route('jobs') }}" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-indigo-600 {{ request()->routeIs('jobs') ? 'text-indigo-600' : '' }}">Jobs</a> --}}
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="flex items-center">
                    {{-- @guest
                        <a href="#" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-indigo-600">Sign In</a>
                        <a href="#" class="ml-4 px-5 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700 transition duration-150">Sign Up</a>
                    @else --}}
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ 'https://ui-avatars.com/api/?name=john' }}" alt="Profile picture">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                            <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                            <div class="border-t border-gray-100"></div>
                            <form method="POST" action="">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                    {{-- @endguest --}}
                </div>
            </div>
            <div class="md:hidden">
                <button class="text-gray-500 hover:text-indigo-600">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
