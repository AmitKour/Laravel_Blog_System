<x-app-layout>
    @section('content')

        <x-slot name="header">
            <!-- Add your header content here if needed -->
        </x-slot>

        <div class="py-12">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Total Count of Blogs Card -->
                    <div class="bg-red-200 rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold mb-2">Total Count of Blogs</h3>
                        <p class="text-xl font-bold">{{ $totalBlogs }}</p>
                    </div>

                    <!-- Number of Active Blogs Card -->
                    <div class="bg-blue-200 rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold mb-2">Number of Active Blogs</h3>
                        <p class="text-xl font-bold">{{ $activeBlogs }}</p>
                    </div>

                    <!-- Total Number of Users Card -->
                    <div class="bg-green-200 rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold mb-2">Total Number of Users</h3>
                        <p class="text-xl font-bold">{{ $totalUsers }}</p>
                    </div>
                </div>

                <!-- Last 5 Blogs -->
                <div class="container mx-auto">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="p-6">
                            <h1 class="text-3xl font-semibold mb-8">Last 5 Blogs</h1>
                            <div class="overflow-x-auto">
                                <table class="table-auto w-full border-collapse border border-gray-200">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="px-4 py-2 text-left">Title</th>
                                            <th class="px-4 py-2 text-left">Date</th>
                                            <th class="px-4 py-2 text-left">Publish</th>
                                            <th class="px-4 py-2 text-left">Edit</th>
                                            <th class="px-4 py-2 text-left">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lastFiveBlogs as $blog)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $blog['title'] }}</td>
                                            <td class="border px-4 py-2">{{ $blog['date'] }}</td>
                                            <td class="border px-4 py-2">{{ $blog->ispublish ? 'Yes' : 'No' }}</td>
                                            <td class="border px-4 py-2">
                                                <a href="{{ route('blogs.edit', $blog->id) }}" class="text-indigo-600 hover:text-indigo-900">
                                                    <i class="fa-solid fa-pencil"></i>
                                                </a>
                                            </td>
                                            <td class="border px-4 py-2">
                                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button onclick="deleteBlogPost({{ $blog->id }})" class="delete-button bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-full text-xs">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endsection

</x-app-layout>

