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
                @if (Auth::check())
                    <a href="#" class="text-white hover:text-gray-300">Create Post</a>
                @endif
            </div>

            @if (Auth::check())
            <div class="hidden lg:block text-white ml-2">
                <div class="relative">
                    <div id="user-menu-dropdown-btn" class="flex items-center px-2 border border-transparent hover:border-white transition duration-150 ease-out hover:ease-in">
                        <span>{{ $firstName }}</span>
                        <span class="icon-[bxs--down-arrow] ml-2"></span>
                        <span class="icon-[bxs--up-arrow] ml-2 hidden"></span>
                    </div>
                    <div id="user-menu-dropdown-items" class="hidden w-36 absolute right-0 border border-white bg-blue-500 dark:bg-blue-800">
                        <ul class="list-none">
                            <li class="border-b p-2 hover:font-bold">
                                <a href="#">Profile</a>
                            </li>
                            <li class="border-b p-2 hover:font-bold">
                                <a href="#">Post</a>
                            </li>
                            <li class="border-b p-2 hover:font-bold">
                                <div class="flex items-center gap-2">
                                    <label for="dark-mode-switch">Darkmode:</label>
                                    <label class="dark-mode-switch float-right">
                                        <input type="checkbox" id="dark-mode-switch">
                                        <span class="dark-mode-switch-slider"></span>
                                    </label>
                                </div>
                            </li>
                            <li class="p-2 hover:font-bold">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" 
                                        onclick="event.preventDefault(); 
                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            @endif
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