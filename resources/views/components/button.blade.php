<button type="{{ $type ?? 'button' }}"
    {{ $attributes->class('w-full bg-blue-600 text-white font-medium py-3 px-4 rounded-md hover:bg-blue-700 transition duration-150') }}>
    {{ $slot }}
</button>
