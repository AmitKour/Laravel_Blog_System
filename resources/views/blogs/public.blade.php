<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<nav class="bg-blue-500 text-white p-4">
    <div class="container mx-auto flex justify-center">
        <a href="{{ route('blogs.public') }}" class="mr-6 hover:underline">Home</a>
        <a href="{{ route('blogs.about') }}" class="mr-6 hover:underline">About</a>
        <a href="{{ route('blogs.contact') }}" class="hover:underline">Contact</a>
    </div>
</nav>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-semibold mb-4 pl-20">Latest Blogs</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pl-20">
        @foreach($blogs as $blog)
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img src="{{ asset($blog->picture_url) }}" alt="Blog Image" class="w-full h-full object-cover" style="width: 490px; height: 200px;">
            <div class="px-6 py-4">
                <div class="text-gray-700 text-base"><span class="font-bold">Title:</span> {{ $blog->title }}</div>
                <p class="text-gray-700 text-base"><span class="font-bold">Date:</span> {{ $blog->date }}</p>
                <p class="text-gray-700 text-base mt-2"><span class="font-bold">Content:</span> {!! $blog->content !!}</p>
            </div>
        </div>
    @endforeach
    </div>
</div>

</body>
</html>
