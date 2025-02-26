@extends('layouts.user.app')

@section('content')
    <section class="py-10 bg-gray-50">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="py-6 px-8">
                    <div class="text-center mb-6">
                        <h1 class="text-2xl font-bold text-gray-900">Create Account</h1>
                        {{-- <p class="mt-2 text-sm text-gray-600">Enter your credentials to access your account</p> --}}
                    </div>

                    <form class="space-y-6" action="{{ route('register') }}" onsubmit="handleSubmit(event)">

                        <!-- Name -->
                        <div>
                            <x-label for="name">Name</x-label>
                            <x-input type="text" id="name" name="name" placeholder="Your Name" />
                        </div>

                        <!-- Email Field -->
                        <div>
                            <x-label for="email">Email</x-label>
                            <x-input type="email" id="email" name="email" placeholder="your@email.com" />
                        </div>

                        <!-- Password Field -->
                        <div>
                            <x-label for="password">Password</x-label>
                            <x-input type="password" id="password" name="password" placeholder="••••••••" />
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <x-label>Confirm Password</x-label>
                            <x-input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••" />
                        </div>

                        <!-- Submit Button -->

                        <x-button type="submit">Sign up</x-button>
                    </form>

                    <!-- Separator -->
                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">Or continue with</span>
                        </div>
                    </div>

                    <!-- Social Login Options -->
                    <div class="grid grid-cols-2 gap-4">
                        <button class="flex justify-center items-center py-2 px-4 border border-gray-300 rounded-md hover:bg-gray-50 transition duration-150">
                            <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4" />
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853" />
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05" />
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335" />
                            </svg>
                            Google
                        </button>
                        <button class="flex justify-center items-center py-2 px-4 border border-gray-300 rounded-md hover:bg-gray-50 transition duration-150">
                            <svg class="w-5 h-5 mr-2 text-[#1877F2]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                            Facebook
                        </button>
                    </div>

                    <!-- Sign Up Link -->
                    <div class="text-center mt-6">
                        <p class="text-sm text-gray-600">
                            Already have account?
                            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Sign in</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
