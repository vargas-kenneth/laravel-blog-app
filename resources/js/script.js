// toggle dark mode switch 
const darkModeSwitch = document.querySelector('#dark-mode-switch');

const toggleDarkMode = () => {
    const htmlTag = document.querySelector('html');
    // did not use classlist.toggle cause it ui glictch when internet is slow
    htmlTag.classList.add('dark');
    if (!darkModeSwitch.checked) {
        htmlTag.classList.remove('dark');
    }
};

toggleDarkMode();

darkModeSwitch.addEventListener('change', (event) => {
    toggleDarkMode();
}); 

// toggle mobile menu
const mobileMenuBurger = document.querySelector('#mobile-menu-burger');
// close mobile menu
const closeMobileMenu = document.querySelector('#close-mobile-menu');

mobileMenuBurger.addEventListener('click', (event) => {
    toggleMobileMenu();
});

closeMobileMenu.addEventListener('click', (event) => {
    toggleMobileMenu();
});

const toggleMobileMenu = () => {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenuBurger.classList.toggle('opacity-0');
    mobileMenu.classList.toggle('hidden');
};

