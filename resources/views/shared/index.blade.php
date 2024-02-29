<x-app-layout>

    <form action="{{route('blogs.create')}}" method="POST" class="p-4">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- Date -->
        <div class="mt-4">
            <x-input-label for="date" :value="__('Date')" />
            <input id="date" class="block mt-1 w-full" type="date" name="date" required autocomplete="off" />
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
        <div class="mt-4">
            <label for="publish" class="inline-block mt-2">{{ __('Publish') }}</label>
            <input id="publish" class="inline-block mx-2" type="checkbox" name="ispublish" :checked="$ispublish ? 'checked' : ''" />
            <x-input-error :messages="$errors->get('ispublish')" class="mt-2" />
        </div>


        <!-- Blog Content -->
        <div class="mt-4">
            <x-input-label for="content" :value="__('Content')" />
            <textarea id="content" class="block mt-1 w-full" name="content" rows="5" required>{{ old('content') }}</textarea>
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">


            <x-primary-button class="ms-4">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>

</x-app-layout>
