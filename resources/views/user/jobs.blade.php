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
                            <input type="text" id="keyword" placeholder="Keyword (e.g., Developer)" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 text-sm">
                        </div>

                        <!-- Location -->
                        <div class="mb-5">
                            <input type="text" id="location" placeholder="Location (e.g., New York)" class="w-full px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 text-sm">
                        </div>

                        <!-- Job Type -->
                        <div class="mb-5">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Job Type</label>
                            <div class="grid grid-cols-2 gap-2">
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2">Full-time</span>
                                </label>
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2">Part-time</span>
                                </label>
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2">Remote</span>
                                </label>
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2">Contract</span>
                                </label>
                            </div>
                        </div>

                        <!-- Salary Range -->
                        <div class="mb-5">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Salary Range</label>
                            <div class="flex space-x-2">
                                <input type="number" placeholder="Min" class="w-1/2 px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 text-sm">
                                <input type="number" placeholder="Max" class="w-1/2 px-3 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 text-sm">
                            </div>
                        </div>

                        <!-- Experience Level -->
                        <div class="mb-5">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Experience</label>
                            <div class="grid grid-cols-2 gap-2">
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2">Entry</span>
                                </label>
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2">Mid</span>
                                </label>
                                <label class="flex items-center text-sm">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2">Senior</span>
                                </label>
                            </div>
                        </div>

                        <!-- Reset and Apply Buttons -->
                        <div class="flex space-x-3">
                            <button class="w-1/2 px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 text-sm">Reset</button>
                            <button class="w-1/2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 text-sm">Apply</button>
                        </div>
                    </div>
                </div>

                <!-- Job Listings -->
                <div class="lg:col-span-3">
                    <div class="space-y-4">
                        <!-- Job Listing 1 -->
                        @for ($i = 0; $i < 50; $i++)
                            <div class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-start space-x-4">
                                        <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center overflow-hidden">
                                            <img src="https://logo.clearbit.com/google.com" alt="Google" class="w-8 h-8 object-contain">
                                        </div>
                                        <div>
                                            <h3 class="text-md font-semibold text-gray-900">Senior Frontend Developer</h3>
                                            <p class="text-sm text-gray-600">Google Inc.</p>
                                            <div class="mt-1 flex flex-wrap gap-1">
                                                <span class="px-2 py-1 bg-indigo-50 text-indigo-700 text-xs rounded-full">Full-time</span>
                                                <span class="px-2 py-1 bg-gray-50 text-gray-700 text-xs rounded-full">Remote</span>
                                                <span class="px-2 py-1 bg-green-50 text-green-700 text-xs rounded-full">$120K-150K</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 transition duration-150">Apply</a>
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
