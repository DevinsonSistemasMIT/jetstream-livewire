<div class="dark:text-white" x-data="{ open: false }">
    <button class="inline-flex items-center px-3 py-2" x-on:click="open = ! open">
        {{ $title }}
    </button>

    <div class="px-3 py-2 ml-10" x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90">
        {{ $content }}
    </div>
</div>
