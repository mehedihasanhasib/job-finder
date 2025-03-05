<form class="space-y-4" action="{{ route('profile.education.store') }}" onsubmit="handleSubmit(event, appendEducation)">
    <!-- Degree -->
    <div>
        <x-label>Degree/Level</x-label>
        <x-input name="degree" placeholder="e.g. Bachelor of Science" />
    </div>

    <!-- Exam/Certification -->
    <div>
        <x-label>Exam/Certification</x-label>
        <x-input name="exam" placeholder="e.g. Computer Science" />
    </div>

    <!-- Institute -->
    <div>
        <x-label>Institute/University</x-label>
        <x-input name="institute" placeholder="e.g. University of Technology" />
    </div>

    <!-- Passing Year and Group in a grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <xlabel>Passing Year</xlabel>
            <x-input name="passing_year" placeholder="e.g. 2019" />
        </div>
        <div>
            <x-label>Group/Major</x-label>
            <x-input name="group" placeholder="e.g. Science" />
        </div>
    </div>

    <!-- CGPA and Scale in a grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <x-label>CGPA/Grade</x-label>
            <x-input name="cgpa" placeholder="e.g. 3.8" />
        </div>
        <div>
            <x-label>Scale</x-label>
            <x-input name="scale" placeholder="e.g 5.0" />
        </div>
    </div>

    <!-- Modal footer with actions -->
    <div class="flex justify-between gap-4">
        <x-button type="submit">
            Save
        </x-button>
    </div>
</form>
