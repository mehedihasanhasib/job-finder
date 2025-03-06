<div x-data class="bg-white rounded-xl shadow-sm p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">Education</h2>
        <button x-on:click="$store.education.toggle()"
            :class="['flex', 'items-center', !$store.education.on ? 'text-indigo-600' : 'text-red-600', !$store
                .education.on ? 'hover:text-indigo-800' : 'hover:text-red-800'
            ]">
            <i x-show="!$store.education.on" class="fas fa-plus mr-2"></i><span
                x-text="!$store.education.on ? 'Add Education' : 'Close'"></span>
        </button>
    </div>


    <div id="educatinSection" class="space-y-3" x-show="!$store.education.on">
        @if ($educations->count() > 0)
            @foreach ($educations as $education)
                <x-user.profile.education.card :data="$education" />
            @endforeach
        @else
            <p id="no-education" class="text-center">No Data Found</p>
        @endif
    </div>

    <template x-if="$store.education.on">
        <x-user.profile.education.form />
    </template>
</div>
