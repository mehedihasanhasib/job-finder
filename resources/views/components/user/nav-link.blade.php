<a href="{{ $href }}"
    class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 {{ request()->routeIs($activeRoute) ? 'text-blue-600 underline underline-offset-8' : '' }}">{{ $name }}</a>
