<input
    id="{{$id ?? ""}}"
    name="{{$name ?? ""}}"
    type="{{$type ?? 'text'}}"
    value="{{ old($name ?? '') }}"
    placeholder="{{$placeholder ?? ""}}"
    @required($required ?? false)
    {{ $attributes }}
    @isset($min) min="{{ $min }}" @endisset
    @isset($max) max="{{ $max }}" @endisset
    
    class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition"
 />
<x-input-error :name="$name" />
