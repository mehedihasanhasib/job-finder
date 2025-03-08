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
                        <button class="text-gray-600 hover:text-blue-600">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                    <p class="text-gray-700">Passionate frontend developer with 5+ years of experience building responsive
                        and user-friendly web applications. Specialized in modern JavaScript frameworks and performance
                        optimization.</p>
                </div>

                <!-- Work Experience -->
                @include('components.user.profile.work.main')

                <!-- Education -->
                @include('components.user.profile.education.main')

                <!-- Certifications -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-semibold">Certifications</h2>
                        <button class="flex items-center text-blue-600 hover:text-blue-800">
                            <i class="fas fa-plus mr-2"></i>Add Certification
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border rounded-lg p-4">
                            <div class="flex justify-between">
                                <div>
                                    <h3 class="font-semibold">AWS Certified Developer</h3>
                                    <p class="text-blue-600">Amazon Web Services</p>
                                    <p class="text-gray-600 text-sm">Issued: Jan 2023 • Expires: Jan 2026</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-gray-400 hover:text-blue-600"><i class="fas fa-edit"></i></button>
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
                        <button class="flex items-center text-blue-600 hover:text-blue-800">
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
                                    <button class="text-gray-400 hover:text-blue-600"><i class="fas fa-edit"></i></button>
                                    <button class="text-gray-400 hover:text-red-600"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Edit modal -->
    <div id="edit-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="edit-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div id="edit-modal-body" class="p-4 md:p-5 space-y-4"></div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure? <br> You won't be
                        able to recover it.</h3>
                    <button data-modal-hide="popup-modal" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Yes, I'm sure
                    </button>
                    <button data-modal-hide="popup-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                        cancel</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/htmx.min.js') }}"></script>
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
            console.log(res)
            document.querySelector("#no-workExp").style.display = "none"
            document.querySelector("#workExperienceSection").innerHTML += res.view
            Alpine.store('workExpEditMode').toggle();
        }

        function appendEducation(res = null) {
            document.querySelector("#no-education").style.display = "none"
            document.querySelector("#educatinSection").innerHTML += res.view
            Alpine.store('education').toggle();
        }

        function deleteResource(event) {
            event.preventDefault();
            const isConfirmed = confirm('Are You Sure?');

            if (isConfirmed) {
                event.target.submit();
            }
        }
    </script>
@endsection
