@extends('layouts.app')

@section('content')
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Filters Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-900 mb-6">Filter Jobs</h3>

                        <!-- Search by Keyword -->
                        <div class="mb-6">
                            <label for="keyword" class="block text-sm font-medium text-gray-700 mb-2">Keyword</label>
                            <input type="text" id="keyword" placeholder="e.g., Developer" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>

                        <!-- Location -->
                        <div class="mb-6">
                            <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Location</label>
                            <input type="text" id="location" placeholder="e.g., New York" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>

                        <!-- Job Type -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Job Type</label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2 text-gray-700">Full-time</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2 text-gray-700">Part-time</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2 text-gray-700">Remote</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2 text-gray-700">Contract</span>
                                </label>
                            </div>
                        </div>

                        <!-- Salary Range -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Salary Range</label>
                            <div class="flex space-x-4">
                                <input type="number" placeholder="Min" class="w-1/2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <input type="number" placeholder="Max" class="w-1/2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            </div>
                        </div>

                        <!-- Experience Level -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Experience Level</label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2 text-gray-700">Entry Level</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2 text-gray-700">Mid Level</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                                    <span class="ml-2 text-gray-700">Senior Level</span>
                                </label>
                            </div>
                        </div>

                        <!-- Reset and Apply Buttons -->
                        <div class="flex space-x-4">
                            <button class="w-1/2 px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">Reset</button>
                            <button class="w-1/2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Apply</button>
                        </div>
                    </div>
                </div>

                <!-- Job Listings -->
                <div class="lg:col-span-3">
                    <div class="space-y-6">
                        <!-- Job Listing 1 -->
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="flex flex-col md:flex-row md:items-center justify-between">
                                <div class="flex items-start">
                                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center overflow-hidden">
                                        <img src="https://logo.clearbit.com/google.com" alt="Google" class="w-full h-full object-contain">
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-semibold text-gray-900">Senior Frontend Developer</h3>
                                        <p class="text-sm text-indigo-600">Google Inc.</p>
                                        <div class="mt-2 flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs rounded-full">Full-time</span>
                                            <span class="px-3 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">Remote</span>
                                            <span class="px-3 py-1 bg-green-100 text-green-800 text-xs rounded-full">$120K-150K</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 md:mt-0">
                                    <a href="#" class="px-4 py-2 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 transition duration-150">Apply Now</a>
                                </div>
                            </div>
                        </div>

                        <!-- Job Listing 2 -->
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="flex flex-col md:flex-row md:items-center justify-between">
                                <div class="flex items-start">
                                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center overflow-hidden">
                                        <img src="https://logo.clearbit.com/amazon.com" alt="Amazon" class="w-full h-full object-contain">
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-semibold text-gray-900">Product Manager</h3>
                                        <p class="text-sm text-indigo-600">Amazon</p>
                                        <div class="mt-2 flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs rounded-full">Full-time</span>
                                            <span class="px-3 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">Seattle, WA</span>
                                            <span class="px-3 py-1 bg-green-100 text-green-800 text-xs rounded-full">$140K-180K</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 md:mt-0">
                                    <a href="#" class="px-4 py-2 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 transition duration-150">Apply Now</a>
                                </div>
                            </div>
                        </div>

                        <!-- Job Listing 3 -->
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="flex flex-col md:flex-row md:items-center justify-between">
                                <div class="flex items-start">
                                    <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center overflow-hidden">
                                        <img src="https://logo.clearbit.com/stripe.com" alt="Stripe" class="w-full h-full object-contain">
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-semibold text-gray-900">Full Stack Engineer</h3>
                                        <p class="text-sm text-indigo-600">Stripe</p>
                                        <div class="mt-2 flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs rounded-full">Full-time</span>
                                            <span class="px-3 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">Hybrid</span>
                                            <span class="px-3 py-1 bg-green-100 text-green-800 text-xs rounded-full">$130K-170K</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 md:mt-0">
                                    <a href="#" class="px-4 py-2 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 transition duration-150">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
