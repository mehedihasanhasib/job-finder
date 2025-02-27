<div class="space-y-6">
    <div class="relative pl-8 pb-6 border-b last:border-0">
        <div class="absolute left-0 top-2 w-4 h-4 bg-indigo-600 rounded-full"></div>
        <div class="flex justify-between">
            <div>
                <h3 class="font-semibold text-lg">{{ $data->designation ?? '' }}</h3>
                <p class="text-indigo-600">{{ $data->company }}</p>
                <p class="text-gray-600 text-sm">{{ $data->from }} - {{ $data->to }}</p>
                <p class="mt-2 text-gray-700">{{ $data->responsibilities }}</p>
            </div>
            <div class="flex space-x-2">
                <button class="text-indigo-600 hover:text-indigo-600">Edit</button>
                <button class="text-red-600 hover:text-red-700">Delete</button>
            </div>
        </div>
    </div>
</div>
