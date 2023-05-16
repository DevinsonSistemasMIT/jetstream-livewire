<div class="bg-slate-100 shadow-md p-3 m-3 ml-10 border border-indigo-500 shadow-indigo-500" x-data="{ open: false }">
    <x-button @click="open = ! open">
        {{ $children->name }}
    </x-button>

    @if ($children->parents)
        <div x-show="open">
            @foreach ($children->parents as $children)
                @include('components.recursive', ['children' => $children])
            @endforeach
        </div>
    @endif
</div>
