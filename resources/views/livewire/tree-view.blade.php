<div class="bg-white rounded shadow p-3">
    <div class="grid grid-cols-2 gap-2">
        <div class="bg-slate-100 shadow-md p-3 m-3 border border-indigo-500 shadow-indigo-500" x-data="{ open: false }">
            @foreach ($families as $family)
                <x-button @click="open = ! open">
                    {{ $family->name }}
                </x-button>
                <div x-show="open">
                    @foreach ($family->children as $parent)
                        @livewire('recursive', ['parent' => $parent])
                    @endforeach
                </div>
            @endforeach
        </div>
        @livewire('family-data')
    </div>
</div>
