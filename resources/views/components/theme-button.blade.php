<button x-data="{
    toggle: () => {
        if (localStorage.theme === 'dark') {
            localStorage.theme = 'light';
            document.documentElement.classList.remove('dark');
        } else {
            localStorage.theme = 'dark';
            document.documentElement.classList.add('dark');
        }
    },
}" @click="toggle">
    Toggle Theme
</button>
