<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table border-white table-bordered">
                        <thead class="text-center border border-dark">
                            <th  scope="col">Sr. No</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Project Type</th>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td class="bg-dark text-white" >
                                    <a href="{{ route('activities.show', $project->id) }}">{{$project->id}}</a>
                                </td> 
                                <td class="bg-dark text-white" >
                                    <a href="{{ route('activities.show', $project->id) }}">{{$project->name}}</a>
                                </td> 
                                <td class="bg-dark text-white" >
                                    <a href="{{ route('activities.show', $project->id) }}">{{$project->type}}</a>
                                </td>   
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    
                    <a href="{{ route('projects.create') }}" class="btn btn-primary"> Add New Project</a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
