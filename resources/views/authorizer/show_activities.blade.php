<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class=" py-3">
                        <h1 class="fs-4 p-3 text-center bg-white text-dark"> Project:{{ $project->name }}</h1>
                    </div>
                    
                    

                    <table
                                class="table border-dark table-bordered">
                                <thead class="">
                                    <tr class="">
                                        <th scope="col" >SNo</th>
                                        <th scope="col" >Activity</th>
                                        <th scope="col">Length</th>
                                        <th scope="col">Width</th>
                                        <th scope="col">Height</th>
                                        <th scope="col">Volume</th>
                                        <th scope="col">Iron Weight</th>
                                        <th scope="col">No. of Components</th>
                                        {{-- <th scope="col">Completed till Now</th> --}}
                                        {{-- <th scope="col">Actions</th> --}}

                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($activities as $index =>$item)
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->length}}</td>
                                        <td>{{$item->width}}</td>
                                        <td>{{$item->height}}</td>
                                        <td>{{$item->total_volume}}</td>
                                        <td>{{$item->iron_weight}}</td>
                                        <td>{{$item->no_of_components}}</td>
                                        {{-- <td> 
                                            <form action="{{ route('activities.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this activity?');">Delete</button>
                                            </form>
                                        </td>  --}}
                                        
                    
                    
                    
                               
                                    </tr>
                                    @endforeach
                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="bg-secondary" colspan="5">Total</th>
                                        <th class="bg-secondary">{{ $totalVolume }}</th>
                                        <th class="bg-secondary">{{ $totalIronWeight }}</th>
                                        <th class="bg-secondary">{{ $totalComponents }}</th>
                                    </tr>
                                </tfoot>
                            </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
