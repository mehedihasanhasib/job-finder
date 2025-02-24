@extends('layouts.app')

@section('content')
    <section class="max-w-7xl mx-auto px-4 py-8">
        <!-- Profile Header -->
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Left Sidebar -->
            <div class="w-full md:w-1/3">
                <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="bg-indigo-600 h-32 relative">
                        <img src="/placeholder-cover.jpg" alt="Cover photo" class="w-full h-full object-cover opacity-50">
                        <div class="absolute -bottom-12 left-1/2 transform -translate-x-1/2">
                            <div class="relative">
                                <img src="/placeholder-avatar.jpg" alt="Profile photo" class="w-24 h-24 rounded-full border-4 border-white object-cover">
                                <button class="absolute bottom-0 right-0 bg-indigo-600 text-white rounded-full p-2 shadow-lg">
                                    <i class="fas fa-camera"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="pt-16 pb-6 px-6 text-center">
                        <h1 class="text-2xl font-bold">John Doe</h1>
                        <p class="text-indigo-600">Senior Frontend Developer</p>
                        <p class="text-gray-600 mt-1"><i class="fas fa-map-marker-alt mr-2"></i>New York, NY</p>
                    </div>
                    <div class="border-t px-6 py-4">
                        <h3 class="font-semibold mb-2">Contact Information</h3>
                        <div class="space-y-2">
                            <p class="flex items-center text-gray-600">
                                <i class="fas fa-envelope w-6"></i>
                                <span>john.doe@example.com</span>
                            </p>
                            <p class="flex items-center text-gray-600">
                                <i class="fas fa-phone w-6"></i>
                                <span>+1 (555) 123-4567</span>
                            </p>
                            <p class="flex items-center text-gray-600">
                                <i class="fab fa-linkedin w-6"></i>
                                <a href="#" class="text-indigo-600 hover:text-indigo-800">linkedin.com/in/johndoe</a>
                            </p>
                            <p class="flex items-center text-gray-600">
                                <i class="fas fa-globe w-6"></i>
                                <a href="#" class="text-indigo-600 hover:text-indigo-800">johndoe.dev</a>
                            </p>
                        </div>
                    </div>
                    <div class="border-t px-6 py-4">
                        <h3 class="font-semibold mb-2">Skills</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full text-sm">JavaScript</span>
                            <span class="bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full text-sm">React</span>
                            <span class="bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full text-sm">Vue.js</span>
                            <span class="bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full text-sm">TypeScript</span>
                            <span class="bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full text-sm">HTML5</span>
                            <span class="bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full text-sm">CSS3</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="w-full md:w-2/3 space-y-6">
                <!-- About Me -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold">About Me</h2>
                        <button class="text-gray-600 hover:text-indigo-600">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                    <p class="text-gray-700">Passionate frontend developer with 5+ years of experience building responsive and user-friendly web applications. Specialized in modern JavaScript frameworks and performance optimization.</p>
                </div>

                <!-- Work Experience -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold">Work Experience</h2>
                        <button class="flex items-center text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-plus mr-2"></i>Add Experience
                        </button>
                    </div>
                    <div class="space-y-6">
                        <div class="relative pl-8 pb-6 border-b last:border-0">
                            <div class="absolute left-0 top-2 w-4 h-4 bg-indigo-600 rounded-full"></div>
                            <div class="flex justify-between">
                                <div>
                                    <h3 class="font-semibold text-lg">Senior Frontend Developer</h3>
                                    <p class="text-indigo-600">Tech Corp Inc.</p>
                                    <p class="text-gray-600 text-sm">Jan 2020 - Present</p>
                                    <p class="mt-2 text-gray-700">Led frontend development for multiple high-impact projects, improving site performance by 40%.</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-gray-400 hover:text-indigo-600"><i class="fas fa-edit"></i></button>
                                    <button class="text-gray-400 hover:text-red-600"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Education -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold">Education</h2>
                        <button class="flex items-center text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-plus mr-2"></i>Add Education
                        </button>
                    </div>
                    <div class="space-y-6">
                        <div class="relative pl-8 pb-6 border-b last:border-0">
                            <div class="absolute left-0 top-2 w-4 h-4 bg-indigo-600 rounded-full"></div>
                            <div class="flex justify-between">
                                <div>
                                    <h3 class="font-semibold text-lg">Bachelor of Science in Computer Science</h3>
                                    <p class="text-indigo-600">University of Technology</p>
                                    <p class="text-gray-600 text-sm">2015 - 2019</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-gray-400 hover:text-indigo-600"><i class="fas fa-edit"></i></button>
                                    <button class="text-gray-400 hover:text-red-600"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Certifications -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold">Certifications</h2>
                        <button class="flex items-center text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-plus mr-2"></i>Add Certification
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border rounded-lg p-4">
                            <div class="flex justify-between">
                                <div>
                                    <h3 class="font-semibold">AWS Certified Developer</h3>
                                    <p class="text-indigo-600">Amazon Web Services</p>
                                    <p class="text-gray-600 text-sm">Issued: Jan 2023 • Expires: Jan 2026</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-gray-400 hover:text-indigo-600"><i class="fas fa-edit"></i></button>
                                    <button class="text-gray-400 hover:text-red-600"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projects -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold">Projects</h2>
                        <button class="flex items-center text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-plus mr-2"></i>Add Project
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border rounded-lg p-4">
                            <div class="flex justify-between">
                                <div>
                                    <h3 class="font-semibold">E-commerce Platform Redesign</h3>
                                    <p class="text-gray-600 text-sm">2022</p>
                                    <p class="mt-2 text-gray-700">Led the frontend development of a complete e-commerce platform redesign.</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-gray-400 hover:text-indigo-600"><i class="fas fa-edit"></i></button>
                                    <button class="text-gray-400 hover:text-red-600"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
