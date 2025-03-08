@extends('layouts.user.app')

@section('content')
    <section class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <!-- Filters Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-white p-5 rounded-lg shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-5">Filters</h3>

                        <!-- Search by Keyword -->
                        <div class="mb-5">
                            <input type="text" id="keyword" placeholder="Keyword (e.g., Developer)"
                                class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm">
                        </div>

                        <!-- Location -->
                        <div class="mb-5">
                            <input type="text" id="location" placeholder="Location (e.g., New York)"
                                class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm">
                        </div>

                        <!-- Job Type -->
                        <div class="mb-5">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Job Type</label>
                            <div class="grid grid-cols-2 gap-2">
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                    <span class="ml-2">Full-time</span>
                                </label>
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                    <span class="ml-2">Part-time</span>
                                </label>
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                    <span class="ml-2">Remote</span>
                                </label>
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                    <span class="ml-2">Contract</span>
                                </label>
                            </div>
                        </div>

                        <!-- Salary Range -->
                        <div class="mb-5">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Salary Range</label>
                            <div class="flex space-x-2">
                                <input type="number" placeholder="Min"
                                    class="w-1/2 px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm">
                                <input type="number" placeholder="Max"
                                    class="w-1/2 px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm">
                            </div>
                        </div>

                        <!-- Experience Level -->
                        <div class="mb-5">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Experience</label>
                            <div class="grid grid-cols-2 gap-2">
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                    <span class="ml-2">Entry</span>
                                </label>
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                    <span class="ml-2">Mid</span>
                                </label>
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                    <span class="ml-2">Senior</span>
                                </label>
                            </div>
                        </div>

                        <!-- Reset and Apply Buttons -->
                        <div class="flex space-x-3">
                            <button
                                class="w-1/2 px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 text-sm">Reset</button>
                            <button
                                class="w-1/2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 text-sm">Apply</button>
                        </div>
                    </div>
                </div>

                <!-- Job Listings -->
                <div class="lg:col-span-3">
                    <div class="space-y-4">
                        <!-- Job Listing 1 -->
                        @for ($i = 0; $i < 7; $i++)
                            <div class="bg-white rounded-lg border border-gray-200 p-4 shadow-sm">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-green-700 font-medium text-lg">Executive/ Sr. Executive, Product
                                            Development (RnD)</h3>
                                        <p class="text-gray-800 font-medium mt-1">Akij Food & Beverage Ltd.</p>

                                        <div class="flex items-center mt-2">
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-5 h-5 text-gray-600 mr-1">
                                                <path fill-rule="evenodd"
                                                    d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                                    clip-rule="evenodd" />
                                            </svg> --}}
                                            <i class="fa-solid fa-location-dot mr-4"></i>
                                            <span class="text-gray-600">Dhamrai</span>
                                        </div>

                                        <div class="flex items-center mt-2">
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-5 h-5 text-gray-600 mr-1">
                                                <path
                                                    d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z" />
                                                <path
                                                    d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z" />
                                                <path
                                                    d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z" />
                                            </svg> --}}
                                            <i class="fa-solid fa-graduation-cap mr-2"></i>
                                            <span class="text-gray-600">Master of Chemistry/ Applied Chemistry/
                                                Biochemistry/ Food & Nutrition Science/ Food Engineering</span>
                                        </div>

                                        <div class="flex items-center mt-2">
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                                class="w-5 h-5 text-gray-600 mr-1">
                                                <path fill-rule="evenodd"
                                                    d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                                    clip-rule="evenodd" />
                                                <path
                                                    d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" />
                                            </svg> --}}
                                            <i class="fa-solid fa-briefcase mr-3"></i>
                                            <span class="text-gray-600">At least 2 year(s)</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between h-full items-end">
                                        <img src="https://yt3.googleusercontent.com/K8WVrQAQHTTwsHEtisMYcNai7p7XIlyEAdZg86qYw78ye57r5DRemHQ9Te4PcD_v98HB-ZvQjQ=s900-c-k-c0x00ffffff-no-rj"
                                            alt="AFBL Logo" class="w-16 h-16">

                                        <div class="flex items-center mt-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                class="w-4 h-4">
                                                <path fill-rule="evenodd"
                                                    d="M4.5 2A2.5 2.5 0 002 4.5v11A2.5 2.5 0 004.5 18h11a2.5 2.5 0 002.5-2.5v-11A2.5 2.5 0 0016.5 2h-11zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 5a1 1 0 100 2h8a1 1 0 100-2H6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span class="text-gray-600">Deadline: <span class="font-medium">31 Mar
                                                    2025</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
