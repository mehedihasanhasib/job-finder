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

                                <!-- Profile Picture Upload -->
                                <div class="relative mb-5 w-full flex justify-center">
                                    <img src="{{ asset('images/default-avatar.jpg') }}" alt="Profile Picture" class="w-[165px] h-[165px] rounded-full object-cover border-4 border-indigo-600 transition-all duration-300">
                                    <label for="profile_picture" class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-[200%] h-10 bg-white/60 border-b-4 border-white rounded-full cursor-pointer flex items-center justify-center transition-all duration-300 overflow-hidden pt-1.5 hover:bg-white/80">
                                        <div class="relative overflow-hidden w-full h-full flex items-center justify-center">
                                            <i class="fas fa-camera text-lg -mt-4 transition-all duration-300 group-hover:scale-110"></i>
                                            <div class="absolute top-0 -left-full w-full h-full bg-gradient-to-r from-transparent via-white/60 to-transparent transition-all duration-500"></div>
                                        </div>
                                    </label>
                                    <input type="file" id="profile_picture" name="profile_picture" class="hidden text-sm mt-2.5">
                                </div>

                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                    <!-- Name Field -->
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                        <div class="relative">
                                            <input class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition"
                                                   name="name"
                                                   type="text"
                                                   value="{{ old('name') }}"
                                                   placeholder="Enter your name"
                                                   required />
                                        </div>
                                        <span class="name text-red-500 text-sm errors"></span>
                                    </div>

                                    <!-- Email Field -->
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                        <div class="relative">
                                            <input class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition"
                                                   name="email"
                                                   type="email"
                                                   value="{{ old('email') }}"
                                                   placeholder="Enter your email"
                                                   required />
                                        </div>
                                        <span class="email text-red-500 text-sm errors"></span>
                                    </div>

                                    <!-- Date of Birth Field -->
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Date of Birth</label>
                                        <div class="relative">
                                            <input class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition"
                                                   name="dob"
                                                   type="date"
                                                   value="{{ old('dob') }}"
                                                   placeholder="Select Date of Birth"
                                                   required />
                                        </div>
                                        <span class="dob text-red-500 text-sm errors"></span>
                                    </div>

                                    <!-- Phone Number Field -->
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                        <div class="relative">
                                            <input class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition"
                                                   name="phone"
                                                   type="tel"
                                                   value="{{ old('phone') }}"
                                                   placeholder="Enter your phone number"
                                                   required />
                                        </div>
                                        <span class="phone text-red-500 text-sm errors"></span>
                                    </div>

                                    <!-- Password Field -->
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                                        <div class="relative">
                                            <input class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition"
                                                   name="password"
                                                   type="password"
                                                   placeholder="Password"
                                                   required />
                                        </div>
                                        <span class="password text-red-500 text-sm errors"></span>
                                    </div>

                                    <!-- Confirm Password Field -->
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                                        <div class="relative">
                                            <input class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition"
                                                   name="password_confirmation"
                                                   type="password"
                                                   placeholder="Confirm Password"
                                                   required />
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
