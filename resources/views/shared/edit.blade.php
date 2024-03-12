<x-app-layout>
    @section('content')
    <div class="container mx-auto">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h1 class="text-3xl font-semibold mb-8">Edit Blog</h1>
                <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="p-4">
                    @csrf
                    @method('PUT')
                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <input id="title" name="title" type="text" value="{{ $blog->title }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <!-- Date -->
                    <div class="mt-4">
                        <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                        <input id="date" name="date" type="date" value="{{ $blog->date }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <!-- Publish -->
                    <div class="mt-4">
                        <label for="publish" class="block text-sm font-medium leading-6 text-gray-900">Publish</label>
                        <input id="publish" name="publish" type="checkbox" {{ $blog->ispublish ? 'checked' : '' }} class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <!-- Content -->

                    <div class="mt-4">
                        <label for="content" class="block text-sm font-medium leading-6 text-gray-900">Content</label>
                        <input id="content" name="content" type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ strip_tags($blog->content) }}">
                    </div>

                     <!-- Category -->

                     <div class="mt-4">
                        <label for="category" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                        <select id="category" name="category" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <option value="">Select a category</option> <!-- Default option -->
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == optional($blog)->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" onclick="cancelAndRedirect()" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <script>
                            function cancelAndRedirect() {
                                // Redirect to the dashboard page
                                window.location.href = '/dashboard';
                            }
                        </script>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>
