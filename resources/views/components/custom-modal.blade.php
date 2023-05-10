<div x-data="{ 'showModal': false }" x-on:keydown.escape="showModal = false">
    {{-- Trigger for Modal --}}
    <a href="#" x-on:click="showModal = true">{{ $button }}</a>

    {{-- Modal --}}
    <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto" x-show="showModal" x-transition.enter>
        {{-- Modal inner --}}
        <div class="max-w-3xl px-6 py-4 mx-auto text-left bg-white rounded shadow-lg" x-on:click.away="showModal = false">
            {{-- Title / Close --}}
            <div class="flex items-center justify-between">
                <h5 class="mr-3 text-black max-w-none text-xl font-bold">Title</h5>

                <button type="button" class="z-50 cursor-pointer" x-on:click="showModal = false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{-- Content --}}
            <div class="mt-5">
                {{ $content }}
            </div>
        </div>
    </div>
</div>
