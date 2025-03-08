<div class="space-y-6 border rounded-lg p-4">
    <div class="relative">
        {{-- <div class="absolute left-0 top-2 w-3 h-3 bg-blue-600 rounded-full"></div> --}}
        <div class="flex justify-between">
            <div>
                <h3 class="font-semibold text-lg">{{ $data->designation ?? '' }}</h3>
                <p class="text-blue-600">{{ $data->company }}</p>
                <p class="text-gray-600 text-sm">{{ $data->start_date }} - {{ $data->end_date ?? 'Present' }}</p>
                <p class="mt-2 text-gray-700">{{ $data->responsibilities }}</p>
            </div>
            <div class="flex items-center space-x-2">
                <button hx-get="{{ route('profile.work-exp.edit', ['work_exp' => $data->id]) }}" hx-target="#edit-modal-body" hx-trigger="click" hx-swap="innerHTML"
                    data-modal-target="edit-modal" data-modal-toggle="edit-modal" type="button"
                    class="text-blue-600 hover:text-blue-600">Edit</button>
                <form action="{{ route('profile.work-exp.destroy', ['work_exp' => $data->id]) }}" onsubmit="deleteResource(event)" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-red-600 hover:text-red-700">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
