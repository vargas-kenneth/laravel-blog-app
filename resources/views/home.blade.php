<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @include('script.constants')
    </head>
    <body class="bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white font-sans transition-colors">

        @include('layouts.navigation')
        <!--Blog Post List -->
        <div class="mx-auto flex flex-col items-center justify-center text-white w-11/12 md:w-full pb-20">
            @foreach($posts as $post)
                <x-posts.post-card :$post></x-posts.post-card>
            @endforeach
        </div>

        @stack('scripts')
    </body>
</html>
