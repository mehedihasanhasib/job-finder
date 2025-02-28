@extends('layouts.user.app')

@section('content')
    <section class="max-w-7xl mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Sidebar -->
            <div class="w-full md:w-1/4">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <!-- Profile Header -->
                    <div class="px-6 py-5 text-center">
                        <div class="mb-4">
                            <img src="https://i.pravatar.cc/40?img=2" alt="Profile photo"
                                class="w-20 h-20 rounded-full border-2 border-white object-cover mx-auto shadow">
                        </div>
                        <h1 class="text-xl font-bold">John Doe</h1>
                        <p class="text-indigo-600 text-sm">Senior Frontend Developer</p>
                        <p class="text-gray-500 text-sm mt-1">
                            <i class="fas fa-map-marker-alt mr-1"></i>New York, NY
                        </p>
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

            <!-- Main Content -->
            <div class="w-full md:w-3/4 space-y-6">
                <!-- About Me -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold">About Me</h2>
                        <button class="text-gray-600 hover:text-indigo-600">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                    <p class="text-gray-700">Passionate frontend developer with 5+ years of experience building responsive
                        and user-friendly web applications. Specialized in modern JavaScript frameworks and performance
                        optimization.</p>
                </div>

                <!-- Work Experience -->
                <div x-data class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold">Work Experience</h2>
                        <button x-show="!$store.workExpEditMode.on" x-on:click="$store.workExpEditMode.toggle();"
                            class="flex items-center text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-plus mr-2"></i>Add Experience
                        </button>
                    </div>

                    <div id="workExperienceSection" x-show="!$store.workExpEditMode.on">
                        @if ($work_exps->count() > 0)
                            @foreach ($work_exps as $work_exp)
                                <x-user.profile.work-exp-card :data="$work_exp" />
                            @endforeach
                        @else
                            <p class="text-center">No Data Found</p>
                        @endif
                    </div>

                    <template x-if="$store.workExpEditMode.on">
                        <x-user.profile.work-exp-form />
                    </template>
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
                                    <p class="mt-2 text-gray-700">Led the frontend development of a complete e-commerce
                                        platform redesign.</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-gray-400 hover:text-indigo-600"><i
                                            class="fas fa-edit"></i></button>
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

@section('script')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('workExpEditMode', {
                on: false,
                toggle() {
                    this.on = !this.on
                }
            })
        })

        function appendWorkExperience(res = null) {
            console.log(res)
            document.querySelector("#workExperienceSection").innerHTML += res.view
            Alpine.store('workExpEditMode').toggle();
        }
    </script>
@endsection
