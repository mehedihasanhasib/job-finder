<input id="{{ $id ?? '' }}" name="{{ $name ?? '' }}" type="{{ $type ?? 'text' }}" value="{{ $value ?? '' }}"
    placeholder="{{ $placeholder ?? '' }}" @required($required ?? false) {{ $attributes }}
    @isset($min) min="{{ $min }}" @endisset
    @isset($max) max="{{ $max }}" @endisset
    class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 placeholder-gray-400 focus:ring-blue-600 focus:border-blue-600 outline-none transition" />
<x-input-error :name="$name" />
