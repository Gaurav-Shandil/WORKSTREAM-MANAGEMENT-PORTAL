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
                    <table class="table border-white table-bordered">
                        <thead class="text-center">
                            <th scope="col">Sr. No</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Project Type</th>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td class="bg-dark text-white" >
                                    <a href="{{ route('vendor.activities.show', $project->id) }}">{{$project->id}}</a>
                                </td> 
                                <td class="bg-dark text-white" >
                                    <a href="{{ route('vendor.activities.show', $project->id) }}">{{$project->name}}</a>
                                </td> 
                                <td class="bg-dark text-white" >
                                    <a href="{{ route('vendor.activities.show', $project->id) }}">{{$project->type}}</a>
                                </td>   
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    {{-- @foreach($projects as $project)
                    <a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a>
                    @endforeach --}}
                    {{-- <a href="{{ route('projects.create') }}" class="btn btn-primary"> Add New Project</a> --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
