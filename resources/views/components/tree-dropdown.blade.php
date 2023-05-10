<div x-data="{ open: false }" class="dark:text-white">
    <button @click="open = ! open" class="inline-flex items-center px-3 py-2">
        {{ $title }}
    </button>

    <div x-show="open" class="px-3 py-2 ml-10">
        {{ $content }}
    </div>
</div>