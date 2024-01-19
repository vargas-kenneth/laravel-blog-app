<x-app-layout>
    <x-slot name="tinymceScript">
        <x-head.tinymce-config/>
    </x-slot>

        <div class="mx-auto w-11/12 xl:w-10/12 pb-20">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl">Edit Blog</h1>
            <div class="p-6 md:p-8">
                <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block" for="title">Title:</label>
                        <x-posts.form.input-text 
                        class="w-full" 
                        id="title" 
                        name="title" 
                        value="{{ old('title', $post->title) }}"
                        placeholder="title"/>
                    </div>
                    
                    <div class="mb-4">
                        <label for="content">Content</label>
                        <x-posts.form.textarea-tinymce 
                        name="content" 
                        id="content" 
                        cols="30" 
                        rows="10"
                        value="{{ old('title', $post->content) }}" />
                    </div>

                    <div class="mb-4">
                        <label for="tag">Tag:</label>
                        <x-posts.form.input-text 
                        id="tag" 
                        name="tag" 
                        value="{{ old('tag', $post->tag->tag_name) }}" 
                        placeholder="tag" />
                    </div>

                    <div>
                        <label for="image">Upload Image:</label>
                        <x-posts.form.file id="image" name="image"/>
                    </div>

                    <div class="flex justify-end">
                        <x-posts.form.submit-button value="Update"></x-posts.form.submit-button>
                    </div>
                </form>
            </div>
        </div>
</x-app-layout>