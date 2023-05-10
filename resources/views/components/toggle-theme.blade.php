<div x-data="{
    toggle: () => {
        if (localStorage.theme === 'dark') {
            localStorage.theme = 'light';
            document.documentElement.classList.remove('dark');
        } else {
            localStorage.theme = 'dark';
            document.documentElement.classList.add('dark');
        }
    }
}" @click="toggle">
    {{ $slot }}
</div>

{{-- Set dark o light theme according to the OS --}}
<script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
