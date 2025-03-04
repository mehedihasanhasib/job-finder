<button x-on:click="$state.toggle()"
    :class="['flex', 'items-center', !$state.on ? 'text-indigo-600' : 'text-red-600', !$state.on ? 'hover:text-indigo-800' : 'hover:text-red-800'
    ]">
    <i x-show="!$state.on" class="fas fa-plus mr-2"></i><span
        x-text="!$state.on ? 'Add Education' : 'Close'"></span>
</button>
