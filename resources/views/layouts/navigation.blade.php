<!-- Navigation Bar -->
<nav class="w-full bg-blue-500 dark:bg-blue-800 p-4 mb-12">
    <div class="container mx-auto flex justify-between items-center">

        <!-- Logo -->
        <a href="#" class="text-white font-bold text-lg">Logo</a>

        <div class="flex items-center">

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-burger" class="text-white hover:text-gray-300 focus:outline-none lg:hidden p-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <!-- Navigation Links (Hidden on Mobile) -->
            <div class="hidden lg:flex space-x-4">
                <a href="#" class="text-white hover:text-gray-300">Home</a>
                <a href="#" class="text-white hover:text-gray-300">About</a>
                <a href="#" class="text-white hover:text-gray-300">Services</a>
                <a href="#" class="text-white hover:text-gray-300">Contact</a>
            </div>

            <!-- Toggle Dark Mode -->
            <div class="pl-3 hidden lg:block">
                <label class="dark-mode-switch float-right">
                    <input type="checkbox" id="dark-mode-switch">
                    <span class="dark-mode-switch-slider"></span>
                </label>
            </div>

        </div>
    </div>
</nav>

<!-- Mobile Menu (Hidden on Large Screens) -->
<div id="mobileMenu" class="lg:hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 hidden">
    <div class="flex justify-end p-4">
        <button id="close-mobile-menu" class="text-white p-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div class="flex flex-col items-center">
        <a href="#" class="text-white py-2 hover:bg-gray-700">Home</a>
        <a href="#" class="text-white py-2 hover:bg-gray-700">About</a>
        <a href="#" class="text-white py-2 hover:bg-gray-700">Services</a>
        <a href="#" class="text-white py-2 hover:bg-gray-700">Contact</a>
    </div>
</div>