<div class="bg-white rounded shadow p-3">
    @foreach ($data->children as $root)
        <div class="bg-gray-100 shadow-lg rounded p-3 m-3" x-data="{ open: false }">
            <x-button x-on:click="open = ! open">
                {{ $root->name }}
            </x-button>

            <div x-show="open">
                @foreach ($root->children as $parent)
                    <div class="bg-gray-100 shadow-lg rounded p-3 m-3" x-data="{ open: false }">
                        <x-button x-on:click="open = ! open">
                            {{ $parent->name }}
                        </x-button>

                        <div x-show="open">
                            @foreach ($parent->children as $child)
                                <div class="bg-gray-100 shadow-lg rounded p-3 m-3" x-data="{ open: false }">
                                    <x-button x-on:click="open = ! open">
                                        {{ $child->name }}
                                    </x-button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
