@extends('layouts.user.app')

@section('content')
    <section class="py-10 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto mt-12 flex items-center justify-center animate-fadeIn">
                <div class="w-full">
                    <div class="max-w-4xl mx-auto">
                        <div class="bg-white rounded-lg shadow-lg border-0">
                            <div class="p-8">
                                <h2 class="text-center text-2xl font-bold mb-6">Create an Account</h2>
                                <form id="registrationForm" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Profile Picture Upload and Preview -->
                                    <div class="mb-6 flex flex-col items-center">
                                        <div class="w-24 h-24 rounded-full bg-gray-200 overflow-hidden mb-3 flex items-center justify-center" id="profilePreview">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Profile Picture</label>
                                        <div class="relative">
                                            <input type="file" name="profile_picture" id="profilePictureInput" class="hidden" accept="image/*" />
                                            <button type="button" onclick="document.getElementById('profilePictureInput').click()" class="px-4 py-2 bg-gray-100 border border-gray-300 rounded-md hover:bg-gray-200 text-sm font-medium text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 transition">
                                                Choose Image
                                            </button>
                                        </div>
                                        <span class="profile_picture text-red-500 text-sm errors mt-1"></span>
                                    </div>

                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                        <!-- Name Field -->
                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                            <div class="relative">
                                                <input class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition" name="name" type="text" value="{{ old('name') }}" placeholder="Enter your name" required />
                                            </div>
                                            <span class="name text-red-500 text-sm errors"></span>
                                        </div>

                                        <!-- Email Field -->
                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                            <div class="relative">
                                                <input class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition" name="email" type="email" value="{{ old('email') }}" placeholder="Enter your email" required />
                                            </div>
                                            <span class="email text-red-500 text-sm errors"></span>
                                        </div>

                                        <!-- Date of Birth Field -->
                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Date of Birth</label>
                                            <div class="relative">
                                                <input class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition" name="dob" type="date" value="{{ old('dob') }}" placeholder="Select Date of Birth" required />
                                            </div>
                                            <span class="dob text-red-500 text-sm errors"></span>
                                        </div>

                                        <!-- Phone Number Field -->
                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                            <div class="relative">
                                                <input class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition" name="phone" type="tel" value="{{ old('phone') }}" placeholder="Enter your phone number" required />
                                            </div>
                                            <span class="phone text-red-500 text-sm errors"></span>
                                        </div>

                                        <!-- Password Field -->
                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                                            <div class="relative">
                                                <input class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition" name="password" type="password" placeholder="Password" required />
                                            </div>
                                            <span class="password text-red-500 text-sm errors"></span>
                                        </div>

                                        <!-- Confirm Password Field -->
                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                                            <div class="relative">
                                                <input class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition" name="password_confirmation" type="password" placeholder="Confirm Password" required />
                                            </div>
                                            <span class="password_confirmation text-red-500 text-sm errors"></span>
                                        </div>
                                    </div>

                                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 px-4 rounded-md transition duration-150 mb-4">
                                        Sign Up
                                    </button>
                                </form>

                                <div class="text-center">
                                    <p class="text-sm text-gray-600">
                                        Already have an account?
                                        <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-700 font-medium">Sign in</a>
                                    </p>
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
        document.addEventListener('DOMContentLoaded', function() {
            const profileInput = document.getElementById('profilePictureInput');
            const previewContainer = document.getElementById('profilePreview');

            profileInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        previewContainer.innerHTML = '';
                        const img = document.createElement('img');
                        img.src = event.target.result;
                        img.classList.add('w-full', 'h-full', 'object-cover');
                        previewContainer.appendChild(img);
                    }

                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endsection
