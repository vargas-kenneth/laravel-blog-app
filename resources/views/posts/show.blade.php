<x-app-layout>
    <!--Blog Post-->
    <div class="block md:flex gap-8 mx-auto w-11/12 xl:w-10/12 pb-20">
        <article class="w-full xl:w-9/12 border border-black dark:border-white rounded-xl shadow-lg p-6 xl:p-8">
            <div class="block lg:flex md:mb-4">
                <button class="block md:hidden primary-button mb-2">#tag</button>
                <figure class="w-full lg:w-2/5 mb-4">
                    <img class="h-56 sm:h-72 md:h-80 lg:h-96 w-full rounded-xl object-cover border border-black dark:border-2 dark:border-white" src="https://images.pexels.com/photos/9540382/pexels-photo-9540382.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                </figure>
                <header class="w-full lg:w-3/5 md:pl-6 md:pr-4">
                    <button class="mb-3 hidden md:block primary-button">#tag</button>
                    <time class="mb lg:mb-6 block" datetime="2022-09-13">September 12, 2022</time>
                    <span class="block lg:hidden mb-4 md:md-0">
                        <strong>Last update: </strong><time datetime="2022-09-13">September 13, 2022</time>
                    </span>
                    
                    <h2 class="text-xl md:text-2xl lg:text-4xl xl:text-5xl mb-4 lg:mb-6 font-bold hover:underline transition duration-300 ease-in-out">
                        The spectacle before us was indeed sublime
                    </h2>
                    <div class="flex justify-between items-center">
                        <address class="hidden lg:block">
                            <a class="" href="">
                                <img class="inline-block mr-1 w-10 h-12 rounded-full transition-transform hover:shadow-md hover:translate-x-[-2px] hover:translate-y-[-2px]" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" alt="">
                                <span class="inline-block align-baseline">Kenneth Vargas</span>
                            </a>
                        </address>
                        <span class="hidden lg:inline-block">
                            <strong>Last update: </strong><time datetime="2022-09-13">September 13, 2022</time>
                        </span>
                    </div>
                </header>
            </div>
            <!-- Content -->
            <div class="md:px-6 leading-relaxed">
                Lorem ipsum dolor
            </div>
        </article>
        <div class="w-full xl:w-3/12 hidden xl:block border-2">
            widgets like related stories etc
        </div>
    </div>
</x-app-layout>