<div>
    @foreach ($families->where('parent_id', null) as $grandfather)
        <x-tree-dropdown>
            <x-slot name="title">
                <p>{{ $grandfather->title }}</p>
                <br>
            </x-slot>

            <x-slot name="content">
                @foreach ($families->where('parent_id', $grandfather->id) as $superFather)
                    <x-tree-dropdown>
                        <x-slot name="title">
                            <p>{{ $superFather->title }}</p>
                        </x-slot>

                        <x-slot name="content">
                            @foreach ($families->where('parent_id', $superFather->id) as $father)
                                <x-tree-dropdown>
                                    <x-slot name="title">
                                        <p>{{ $father->title }}</p>
                                    </x-slot>

                                    <x-slot name="content">
                                        @foreach ($families->where('parent_id', $father->id) as $son)
                                            <x-tree-dropdown>
                                                <x-slot name="title">
                                                    <p>{{ $son->title }}</p>
                                                </x-slot>

                                                <x-slot name="content">
                                                    @foreach ($families->where('parent_id', $son->id) as $grandson)
                                                        <x-tree-dropdown>
                                                            <x-slot name="title">
                                                                <p>{{ $grandson->title }}</p>
                                                            </x-slot>

                                                            <x-slot name="content">
                                                                grandsons...
                                                            </x-slot>
                                                        </x-tree-dropdown>
                                                    @endforeach
                                                </x-slot>
                                            </x-tree-view>
                                        @endforeach
                                    </x-slot>
                                </x-tree-view>
                            @endforeach
                        </x-slot>
                    </x-tree-view>
                @endforeach
            </x-slot>
        </x-tree-view>
    @endforeach
</div>
