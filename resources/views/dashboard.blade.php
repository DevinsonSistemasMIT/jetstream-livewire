<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-xl sm:rounded-lg">
                @livewire('tree-view')
                <details>
                    <summary>Hola Mundo</summary>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste repellat est magnam minima nulla
                        rem distinctio, deleniti dolore commodi consequatur id facilis numquam odio rerum repudiandae
                        fuga libero voluptate mollitia.</p>
                </details>

                <x-custom-modal>
                    <x-slot name="button">
                        <x-button>Abrir</x-button>
                    </x-slot>
                    <x-slot name="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam consequuntur aperiam reiciendis ipsum velit magnam id est sunt delectus facere, explicabo dolorum consectetur dolores ratione itaque nostrum doloribus voluptatibus labore!</p>
                    </x-slot>
                </x-custom-modal>
            </div>
        </div>
    </div>
</x-app-layout>
