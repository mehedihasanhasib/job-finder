<textarea id="{{ $id ?? '' }}" name="{{ $name ?? '' }}" rows="{{ $rows ?? 4 }}"
    placeholder="{{ $placeholder ?? '' }}"
    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">{{ $slot }}</textarea>
<x-input-error :name="$name ?? ''" />
