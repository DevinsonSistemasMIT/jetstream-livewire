<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Insert data --}}

                @livewire('tree-view')

                {{-- @for ($i = 0; $i < 1; $i++)
                    <x-tree-view>
                        <x-slot name="title">
                            Super Parent @php echo $i + 1 @endphp
                        </x-slot>
                        <x-slot name="content">
                            @for ($j = 0; $j < 3; $j++)
                                <x-tree-view>
                                    <x-slot name="title">
                                        Parent @php echo $j + 1 @endphp
                                    </x-slot>
                                    <x-slot name="content">
                                        @for ($k = 0; $k < 5; $k++)
                                            <x-tree-view>
                                                <x-slot name="title">
                                                    Child @php echo $k + 1 @endphp
                                                </x-slot>
                                                <x-slot name="content">
                                                    ...content
                                                </x-slot>
                                            </x-tree-view>
                                        @endfor
                                    </x-slot>
                                </x-tree-view>
                            @endfor
                        </x-slot>
                    </x-tree-view>
                @endfor --}}
            </div>
        </div>
    </div>
</x-app-layout>
