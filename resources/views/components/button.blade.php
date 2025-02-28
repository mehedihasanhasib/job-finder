<button type="{{ $type ?? 'button' }}" {{ $attributes->class("w-full bg-indigo-600 text-white font-medium py-3 px-4 rounded-md hover:bg-indigo-700 transition duration-150") }}>
    {{ $slot }}
</button>
