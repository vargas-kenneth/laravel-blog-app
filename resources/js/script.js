// Check if dark mode is enabled
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    const htmlTag = document.querySelector('html');
    htmlTag.classList.add('dark');
}
