<form class="space-y-4" action="{{ $route ?? route('profile.work-exp.store') }}"
    onsubmit="handleSubmit(event, appendWorkExperience)">
    <!-- Job Title -->
    <div>
        <x-label>Designation</x-label>
        <x-input name="designation" placeholder="e.g. Senior Software Engineer" :value="$work_exp->designation ?? ''" :required="true" />
    </div>

    <!-- Company Name -->
    <div>
        <x-label>Company Name</x-label>
        <x-input name="company_name" placeholder="e.g. Acme Inc." :required="true" :value="$work_exp->company_name ?? ''" />
    </div>

    <!-- Location -->
    <div>
        <x-label>Company Location</x-label>
        <x-input id="location" name="company_location" placeholder="e.g. New York, NY" :value="$work_exp->company_location ?? ''"
            :required="true" />
    </div>

    <!-- Employment Period -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <x-label>Start Date</x-label>
            <x-input type="date" name="start_date" :value="$work_exp->start_date ?? ''" :required="true" />
        </div>
        <div x-data="{ current_job: @json(isset($work_exp) ? true : false) }">
            <x-label>End Date</x-label>
            <x-input type="date" id="to" name="end_date" :value="$work_exp->end_date ?? ''" x-bind:disabled="current_job" />

            <div class="mt-2">
                <input x-on:change="current_job = !current_job" type="checkbox" id="current_job" name="current_job"
                    @isset($work_exp) @if ($work_exp->end_date == null) checked @endif @endisset
                    class="rounded text-blue-600 focus:ring-blue-500" />
                <label for="current_job" class="text-sm text-gray-700 ml-2">I currently work here</label>
            </div>
        </div>
    </div>

    <!-- Job Description -->
    <div>
        <x-label>Responsibilities</x-label>
        <x-textarea name="responsibilities" :value="$work_exp->responsibilities ?? ''"
            placeholder="Describe your responsibilities and achievements"></x-textarea>
    </div>

    <div class="flex justify-between gap-4">
        {{-- <button x-on:click="$store.workExpEditMode.toggle();" type="button"
            class="w-full bg-blue-600 text-white font-medium py-3 px-4 rounded-md hover:bg-blue-700 transition duration-150">Close</button> --}}
        <x-button type="submit">Save</x-button>
    </div>
</form>
