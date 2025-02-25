@extends('layouts.user.app')

@section('content')
    <section class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Find Your Dream Job</h1>
                <p class="mt-4 text-lg text-gray-600">Search thousands of job opportunities across various industries.</p>
            </div>
            <div class="mt-8 max-w-2xl mx-auto">
                <form class="flex flex-col sm:flex-row gap-4">
                    <input type="text" placeholder="Search for jobs..." class="w-full px-5 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button type="submit" class="px-6 py-3 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 transition duration-150">Search</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Job Categories -->
    <section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <h2 class="text-xl font-semibold mb-6">Popular Categories</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="#" class="bg-white p-4 rounded-lg border hover:border-indigo-300 flex items-center space-x-3">
                    <i class="fas fa-laptop-code text-indigo-600"></i>
                    <span>Technology (2,341)</span>
                </a>
                <a href="#" class="bg-white p-4 rounded-lg border hover:border-indigo-300 flex items-center space-x-3">
                    <i class="fas fa-chart-line text-indigo-600"></i>
                    <span>Finance (1,253)</span>
                </a>
                <a href="#" class="bg-white p-4 rounded-lg border hover:border-indigo-300 flex items-center space-x-3">
                    <i class="fas fa-palette text-indigo-600"></i>
                    <span>Design (892)</span>
                </a>
                <a href="#" class="bg-white p-4 rounded-lg border hover:border-indigo-300 flex items-center space-x-3">
                    <i class="fas fa-bullhorn text-indigo-600"></i>
                    <span>Marketing (1,423)</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Jobs -->
    <section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <h2 class="text-xl font-semibold mb-6">Featured Jobs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Job Card 1 -->
                <div class="bg-white rounded-lg border hover:shadow-lg transition-shadow duration-200">
                    <div class="p-6">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                                <img src="https://logo.clearbit.com/google.com" alt="Google logo" class="w-8 h-8">
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg">Senior Frontend Developer</h3>
                                <p class="text-indigo-600">Google</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-map-marker-alt w-5"></i>
                                <span>New York, NY</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-dollar-sign w-5"></i>
                                <span>$120K-150K</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-clock w-5"></i>
                                <span>Full-time</span>
                            </div>
                        </div>
                        <div class="border-t pt-4">
                            <button class="w-full bg-gray-50 hover:bg-gray-100 text-indigo-600 font-medium py-2 rounded transition duration-150">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Job Card 2 -->
                <div class="bg-white rounded-lg border hover:shadow-lg transition-shadow duration-200">
                    <div class="p-6">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                                <img src="https://logo.clearbit.com/amazon.com" alt="Microsoft logo" class="w-8 h-8">
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg">Product Manager</h3>
                                <p class="text-indigo-600">Microsoft</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-map-marker-alt w-5"></i>
                                <span>Remote</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-dollar-sign w-5"></i>
                                <span>$140K-180K</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-clock w-5"></i>
                                <span>Full-time</span>
                            </div>
                        </div>
                        <div class="border-t pt-4">
                            <button class="w-full bg-gray-50 hover:bg-gray-100 text-indigo-600 font-medium py-2 rounded transition duration-150">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Job Card 3 -->
                <div class="bg-white rounded-lg border hover:shadow-lg transition-shadow duration-200">
                    <div class="p-6">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                                <img src="https://logo.clearbit.com/stripe.com" alt="Apple logo" class="w-8 h-8">
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg">UX Designer</h3>
                                <p class="text-indigo-600">Apple</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-map-marker-alt w-5"></i>
                                <span>San Francisco, CA</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-dollar-sign w-5"></i>
                                <span>$130K-160K</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-clock w-5"></i>
                                <span>Full-time</span>
                            </div>
                        </div>
                        <div class="border-t pt-4">
                            <button class="w-full bg-gray-50 hover:bg-gray-100 text-indigo-600 font-medium py-2 rounded transition duration-150">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Jobs -->
    <section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <h2 class="text-xl font-semibold mb-6">Latest Jobs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Job Card 1 -->
                <div class="bg-white rounded-lg border hover:shadow-lg transition-shadow duration-200">
                    <div class="p-6">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                                <img src="https://logo.clearbit.com/stripe.com" alt="Amazon logo" class="w-8 h-8">
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg">Software Engineer</h3>
                                <p class="text-indigo-600">Amazon</p>
                            </div>
                        </div>
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-map-marker-alt w-5"></i>
                                <span>Seattle, WA</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-dollar-sign w-5"></i>
                                <span>$140K-180K</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-clock w-5"></i>
                                <span>Full-time</span>
                            </div>
                        </div>
                        <div class="border-t pt-4">
                            <button class="w-full bg-gray-50 hover:bg-gray-100 text-indigo-600 font-medium py-2 rounded transition duration-150">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Additional job cards can be added here following the same pattern -->
            </div>
        </div>
    </section>
@endsection
