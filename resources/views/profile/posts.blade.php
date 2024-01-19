<x-app-layout>
    <div class="mx-auto flex flex-col items-center justify-center text-white w-11/12 md:w-full pb-20">
        @foreach($posts as $post)
            <x-posts.post-card :$post></x-posts.post-card>
        @endforeach
    </div>
</x-app-layout>