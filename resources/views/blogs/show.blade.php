<x-app-layout>
    @section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-3xl font-semibold">Blog Details</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="max-w-full rounded overflow-hidden shadow-lg relative aspect-w-16 aspect-h-9">
                <img src="{{ asset($blog->picture_url) }}" alt="Blog Image" class="w-full h-full object-cover" style="height: 100%; width: 100%;">
            </div>
            <div class="px-6 py-4">
                <p class="text-gray-700 text-base"><span class="font-bold">Title:</span> {{ $blog->title }}</p>
                <p class="text-gray-700 text-base"><span class="font-bold">Date:</span> {{ $blog->date }}</p>
                <p class="text-gray-700 text-base"><span class="font-bold">Category:</span> {{ $blog->category->name }}</p>
                <p class="text-gray-700 text-base"><span class="font-bold">Content:</span> {!! $blog->content !!}</p>
            </div>
        </div>

    </div>
    <div class="flex justify-start ml-6 mt-4">
        <h2 class="bg-blue-500 text-white text-xl font-semibold">Related Blogs...</h2>
    </div>
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach($blogs as $relatedBlog)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset($relatedBlog->picture_url) }}" alt="Related Blog Image" class="w-full h-full object-cover">
                </div>
                <div class="px-6 py-4">
                    <p class="text-gray-700 text-base"><span class="font-bold">Title:</span> {{ $relatedBlog->title }}</p>
                    <p class="text-gray-700 text-base"><span class="font-bold">Date:</span> {{ $relatedBlog->date }}</p>
                    <p class="text-gray-700 text-base"><span class="font-bold">Category:</span> {{ $relatedBlog->category->name }}</p>
                    <p class="text-gray-700 text-base"><span class="font-bold">Content:</span> {{ strip_tags($relatedBlog->content) }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    @endsection
</x-app-layout>

