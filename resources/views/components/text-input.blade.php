<input
    name="{{$name ?? ""}}"
    type="{{$type ?? 'text'}}"
    value="{{ old($name ?? '') }}"
    placeholder="{{$placeholder ?? ""}}"
    @required($required ?? false)
    class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none transition"
 />
 <span class="{{$name ?? ''}} text-red-500 text-sm validationErrors block"></span>
