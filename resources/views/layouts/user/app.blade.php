<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
    @yield('css')
</head>

<body class="font-sans antialiased bg-gray-50">

    @include('components.user.loading')

    <header>
        @include('layouts.user.navigation')
    </header>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-8">
        @include('layouts.user.footer')
    </footer>


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/submit.js') }}"></script>

    @yield('script')
</body>

</html>
