<div x-data="{ open: false }">
    {{-- Toggle --}}
    <a href="#" x-on:click="open = ! open">
        {{ $title }}
    </a>

    {{-- Content --}}
    <div x-show="open">
        {{ $content }}
    </div>
</div>