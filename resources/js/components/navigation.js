// toggle dark mode switch 
const darkModeSwitch = document.querySelector('#dark-mode-switch');

const toggleDarkMode = (event) => {
    const htmlTag = document.querySelector('html');
    // did not use classlist.toggle cause it ui glictch when internet is slow
    htmlTag.classList.add('dark');

    if (!darkModeSwitch.checked) {
        htmlTag.classList.remove('dark');
    }
};

toggleDarkMode();

// toggle mobile menu
const mobileMenuBurger = document.querySelector('#mobile-menu-burger');
// close mobile menu
const closeMobileMenu = document.querySelector('#close-mobile-menu');

const toggleMobileMenu = (event) => {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenuBurger.classList.toggle('opacity-0');
    mobileMenu.classList.toggle('hidden');
};

darkModeSwitch.addEventListener('change', toggleDarkMode); 
mobileMenuBurger.addEventListener('click', toggleMobileMenu);
closeMobileMenu.addEventListener('click', toggleMobileMenu);

// toggle user-menu-dropdown-btn
if (ISUSERLOGGEDIN) {
    const userMenuDropdownBtn = document.querySelector('#user-menu-dropdown-btn');
    const userMenuDropdownItems = document.querySelector('#user-menu-dropdown-items');
    const upArrowIcon = document.querySelector('#user-menu-dropdown-btn [class*="icon-[bxs--up-arrow]"]');
    const downArrowIcon = document.querySelector('#user-menu-dropdown-btn [class*="icon-[bxs--down-arrow]"]');

    const toggleUserMenu = (event) => {
        event.stopPropagation();
        userMenuDropdownItems.classList.toggle('hidden');
        // Add a click event listener to the document to hide the user menu dropdown when clicking outside
        document.addEventListener('click', clickOutsideHideUserMenuDropdown);

        upArrowIcon.classList.toggle('hidden');
        downArrowIcon.classList.toggle('hidden');
    };

    const clickOutsideHideUserMenuDropdown = (event) => {
        // Check if the click occurred outside the user menu dropdown and button
        if (!userMenuDropdownItems.contains(event.target) && event.target !== userMenuDropdownBtn) {
            userMenuDropdownItems.classList.add('hidden');
            upArrowIcon.classList.add('hidden');
            downArrowIcon.classList.remove('hidden');
        }

        if (userMenuDropdownItems.classList.contains('hidden')) {
            document.removeEventListener('click', clickOutsideHideUserMenuDropdown);
        }     
    }

    userMenuDropdownBtn.addEventListener('click', toggleUserMenu);
    document.addEventListener('click', clickOutsideHideUserMenuDropdown);
}