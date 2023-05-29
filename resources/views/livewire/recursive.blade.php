<div class="bg-slate-100 shadow-md p-3 m-3 ml-10 border border-indigo-500 shadow-indigo-500" x-data="{ open: false }">
    <x-button @click="open = ! open">
        Expand
    </x-button>

    <x-button wire:click="getData({{ $parent->id }})">
        {{ $parent->name }}
    </x-button>

    @if ($parent->children)
        <div x-show="open">
            @foreach ($parent->children as $parent)
                @livewire('recursive', ['parent' => $parent, key($parent->id)]) {{-- ! The key must be passed --}}
            @endforeach
        </div>
    @endif
</div>
