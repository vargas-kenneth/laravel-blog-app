@props(['post'])
<article class="mb-4 md:mb-6 block sm:flex gap-x-8 w-full max-w-5xl sm:w-11/12 lg:w-9/12 xl:w-8/12 p-4 border border-gray-400 dark:border-0 shadow-xl bg-lightBlue dark:bg-darkBlue rounded-xl">
    
    <figure class="w-full md:w-2/5 overflow-hidden rounded-xl">
        <img class="h-56 sm:h-72 md:h-80 lg:h-96 w-full rounded-xl object-cover transition-transform ease-in duration-300 hover:scale-125" src="{{ asset($post->img_full_path) }}" alt="{{ $post->postImage->image_alt }}">
    </figure>
    
    <div class="w-full md:w-3/5 py-3">
        <header>
            <div class="mb-2 sm:mb-6 md:mb-4 lg:mb-6 flex flex-wrap items-center gap-y-2">
                <button class="primary-button break-all">{{ $post->tag->tag_name }}</button>
                <time class="ml-4" datetime="2022-08-13">{{ $post->time_posted }}</time>
            </div>
            <div class="mb-3 sm:mb-8 md:mb-6 lg:mb-8">
                <a href="">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold hover:underline transition duration-300 ease-in-out mb-1 md:mb-4">
                        {{ Str::of($post->title)->limit(35) }}
                    </h2>
                </a>
                <p class="leading-relaxed">{!! Str::of($post->content)->limit(200) !!}</p>
            </div>
        </header>                    
        
        <footer class="flex flex-col sm:flex-row items-start md:justify-between md:items-center pr-4">
            <button class="primary-button">Continue Reading <span class="text-xl">&#8594;</span></button>
            <div>
                <address class="hidden md:block">
                    <a href="">
                        <img class="inline-block w-10 h-12 rounded-full transition-transform hover:shadow-md hover:translate-x-[-2px] hover:translate-y-[-2px]" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" alt="">
                        <span class="inline-block align-baseline">{{ $post->user->name }}</span>
                    </a>
                </address>
            </div>
        </footer>                    
    </div>
</article>