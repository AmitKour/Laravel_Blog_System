<x-app-layout>

    @section('content')
    <div class="flex justify-center mt-8 >
        <div class="w-2/3">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <form action="{{ route('blogs.create') }}" enctype="multipart/form-data" method="POST" class="p-4 ">
                @csrf
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        {{-- @include('shared.profile') --}}
                        <div class="col-span-full">
                            <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Blog
                                Image</label>
                            <div class="mt-2 flex items-center gap-x-3">
                                <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <input type="file" name="photo" id="photo" accept="image/*">
                                {{-- <button type="submit"
                                    class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Upload</button> --}}
                            </div>
                        </div>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="col-span-full">
                                <label for="title"
                                    class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                <div class="mt-2">
                                    <textarea id="title" name="title" rows="1"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Write a few words about title.</p>
                            </div>

                            <!-- Date -->
                            <div class="mt-4 ">
                                <x-input-label for="date" :value="__('Date')" />
                                <input id="date" class="block mt-1 w-full" type="date" name="date" required
                                    autocomplete="off" />
                                <x-input-error :messages="$errors->get('date')" class="mt-2" />
                            </div>

                            <script>
                                document.getElementById('date').addEventListener('keydown', function(event) {
                                    if (event.key === 'Enter') {
                                        event.preventDefault();
                                        var currentDate = new Date().toISOString().split('T')[0];
                                        this.value = currentDate;
                                    }
                                });
                            </script>

                            <!-- Publish -->
                            <div class="col-span-full">
                                <label for="publish" class="inline-block mt-2">{{ __('Publish') }}</label>
                                <input id="publish" class="inline-block mx-2" type="checkbox" name="ispublish"
                                    :checked="$ispublish ? 'checked' : ''" />
                                <x-input-error :messages="$errors->get('ispublish')" class="mt-2" />
                            </div>

                            <!-- Content -->
                            <div class="col-span-full">
                                <label for="content"
                                    class="block text-sm font-medium leading-6 text-gray-900">Content</label>
                                <div class="mt-2">
                                    <x-trix-input id="content" name="content"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></x-trix-input>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about the blog.
                                </p>
                            </div>
                            <div>
                                <label for="category" class="block text-sm font-medium text-gray-700">Select Category</label>
                                <select id="category" name="category_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" onclick="cancelAndRedirect()"
                        class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>

                    <script>
                        function cancelAndRedirect() {
                            // Redirect to the dashboard page
                            window.location.href = '/dashboard';
                        }
                    </script>

                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    @endsection
</x-app-layout>
