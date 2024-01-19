<x-app-layout>
    <div class="mx-auto w-11/12 xl:w-10/12 pb-20">
        <div class="w-3/4 border-2 rounded-lg p-8">
            <div class="flex gap-4 mb-9">
                <div class="w-1/2 flex justify-center ">
                    <img class="w-3/4 h-56 sm:h-72 md:h-80 lg:h-96 object-cover rounded-lg" src="{{ asset($post->image_full_path) }}" alt="">
                </div>
                <div class="w-1/2 break-words">
                    <button class="mb-4 primary-button break-all block">{{ $post->tag->tag_name }}</button>  
                    <h1 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold hover:underline transition duration-300 ease-in-out mb-1 md:mb-4">{{ $post->title }}</h1>
                </div>
            </div>
            <div>
                {!! $post->content !!}
            </div>
        </div>
    </div>
</x-app-layout>