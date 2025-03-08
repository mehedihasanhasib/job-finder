<!-- Work Experience -->
<div x-data class="bg-white rounded-xl shadow-sm p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">Work Experience</h2>
        <button x-on:click="$store.workExpEditMode.toggle()"
            :class="['flex', 'items-center', !$store.workExpEditMode.on ? 'text-blue-600' : 'text-red-600', !
                $store
                .workExpEditMode.on ? 'hover:text-blue-800' : 'hover:text-red-800'
            ]">
            <i x-show="!$store.workExpEditMode.on" class="fas fa-plus mr-2"></i><span
                x-text="!$store.workExpEditMode.on ? 'Add Work Experience' : 'Close'"></span>
        </button>
    </div>

    <div id="workExperienceSection" class="space-y-3" x-show="!$store.workExpEditMode.on">
        @if ($work_exps->count() > 0)
            @foreach ($work_exps as $work_exp)
                <x-user.profile.work.card :data="$work_exp" />
            @endforeach
        @else
            <p id="no-workExp" class="text-center">No Data Found</p>
        @endif
    </div>

    <template x-if="$store.workExpEditMode.on">
        <x-user.profile.work.form />
    </template>
</div>
