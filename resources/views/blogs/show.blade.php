<x-app-layout>
    @section('content')
    <div class="container mx-auto">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h1 class="text-3xl font-semibold mb-8">Blog Details</h1>
                <div class="overflow-x-auto">
                    <table class="table-auto w-full border-collapse border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 text-left">Title</th>
                                <th class="px-4 py-2 text-left">Date</th>
                                <th class="px-4 py-2 text-left">Publish</th>
                                <th class="px-4 py-2 text-left">Content</th>
                                <th class="px-4 py-2 text-left">Edit</th>
                                <th class="px-4 py-2 text-left">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="border px-4 py-2">{{ $blog->title }}</td>
                                <td class="border px-4 py-2">{{ date('M d, Y', strtotime($blog->date)) }}</td>
                                <td class="border px-4 py-2">{{ $blog->ispublish ? 'Yes' : 'No' }}</td>
                                <td class="border px-4 py-2">{!! $blog->content !!}</td>
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
                    

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection
</x-app-layout>

