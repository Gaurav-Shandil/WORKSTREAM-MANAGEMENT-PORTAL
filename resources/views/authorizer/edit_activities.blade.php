<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('activities.update', $activity->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="name">Activity Name:</label>
                        <input class="bg-dark" type="text" name="name" value="{{ $activity->name }}">
                        <label for="length">Length:</label>
                        <input class="bg-dark" type="text" name="length" value="{{ $activity->length }}">
                        <label for="width">Width:</label>
                        <input class="bg-dark" type="text" name="width" value="{{ $activity->width }}">
                        <label for="height">Height:</label>
                        <input class="bg-dark" type="text" name="height" value="{{ $activity->height }}">
                        <label for="no_of_components">No of Components:</label>
                        <input class="bg-dark" type="text" name="no_of_components" value="{{ $activity->no_of_components }}">
                        {{-- <button type="submit">Update Activity</button> --}}

                        <button type="submit" name="action" value="add_more">Add More Activities</button>
                        <button type="submit" name="action" value="finish">Finish and View All</button>
                    </form>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
