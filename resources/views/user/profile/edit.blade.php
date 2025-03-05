@extends('layouts.user.app')

@section('content')
    <section class="max-w-7xl mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Sidebar -->
            <x-user.profile.sidebar />

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
                        <button x-on:click="$store.workExpEditMode.toggle()"
                            :class="['flex', 'items-center', !$store.workExpEditMode.on ? 'text-indigo-600' : 'text-red-600', !
                                $store
                                .workExpEditMode.on ? 'hover:text-indigo-800' : 'hover:text-red-800'
                            ]">
                            <i x-show="!$store.workExpEditMode.on" class="fas fa-plus mr-2"></i><span
                                x-text="!$store.workExpEditMode.on ? 'Add Work Experience' : 'Close'"></span>
                        </button>
                    </div>

                    <div id="workExperienceSection" class="space-y-3" x-show="!$store.workExpEditMode.on">
                        @if ($work_exps->count() > 0)
                            @foreach ($work_exps as $work_exp)
                                <x-user.profile.work-exp-card :data="$work_exp" />
                            @endforeach
                        @else
                            <p id="no-workExp" class="text-center">No Data Found</p>
                        @endif
                    </div>

                    <template x-if="$store.workExpEditMode.on">
                        <x-user.profile.work-exp-form />
                    </template>
                </div>

                <!-- Education -->
                <div x-data class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold">Education</h2>
                        <button x-on:click="$store.education.toggle()"
                            :class="['flex', 'items-center', !$store.education.on ? 'text-indigo-600' : 'text-red-600', !$store
                                .education.on ? 'hover:text-indigo-800' : 'hover:text-red-800'
                            ]">
                            <i x-show="!$store.education.on" class="fas fa-plus mr-2"></i><span
                                x-text="!$store.education.on ? 'Add Education' : 'Close'"></span>
                        </button>
                    </div>


                    <div id="educatinSection" class="space-y-3" x-show="!$store.education.on">
                        @if ($educations->count() > 0)
                            @foreach ($educations as $education)
                                <x-user.profile.education-card :data="$education" />
                            @endforeach
                        @else
                            <p id="no-education" class="text-center">No Data Found</p>
                        @endif
                    </div>

                    <template x-if="$store.education.on">
                        <x-user.profile.education-form />
                    </template>
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

@section('script')
    <script>
        document.addEventListener('alpine:init', () => {
            // Work Experience
            Alpine.store('workExpEditMode', {
                on: false,
                toggle() {
                    this.on = !this.on
                }
            })

            // Education
            Alpine.store('education', {
                on: false,
                toggle() {
                    this.on = !this.on
                }
            })
        })

        function appendWorkExperience(res = null) {
            document.querySelector("#no-workExp").style.display = "none"
            document.querySelector("#workExperienceSection").innerHTML += res.view
            Alpine.store('workExpEditMode').toggle();
        }

        function appendEducation(res = null) {
            document.querySelector("#no-education").style.display = "none"
            document.querySelector("#educatinSection").innerHTML += res.view
            Alpine.store('education').toggle();
        }
    </script>
@endsection
