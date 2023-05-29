<div class="bg-slate-100 shadow-md p-3 m-3 ml-10 border border-indigo-500 shadow-indigo-500" x-data="{ open: false }">
    <x-button @click="open = ! open">
        {{ $parent->name }}
        {{ $parent->id }}
    </x-button>

    <x-button wire:click="getData({{ $parent->id }})">
        data
    </x-button>

    @if ($parent->children)
        <div x-show="open">
            @foreach ($parent->children as $parent)
                @livewire('recursive', ['parent' => $parent])
            @endforeach
        </div>
    @endif
</div>
