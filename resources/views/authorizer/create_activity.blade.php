<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('activities.store', $project->id) }}" method="POST">
                        @csrf
                        <div class="row border border-white p-4">
                            <div class="col-md-4">
                                <label for="name">Activity Name:</label>
                                <input class="bg-dark w-70" type="text" name="name">
                            </div>
                        </div>
                            <div class="row border border-white p-4">

                            <div class="col-md-4">
                                <label for="length">Length:</label>
                                <input class="bg-dark" type="text" name="length">
                            </div>
                            <div class="col-md-4">
                                <label for="width">Width:</label>
                                <input class="bg-dark" type="text" name="width">
                            </div>
                            <div class="col-md-4">
                                <label for="height">Height:</label>
                                <input class="bg-dark" type="text" name="height">
                            </div>
                        </div>
                        <div class="row border border-white p-4">
                            
                            <div class="col-md-4">
                                <label for="iron_weight">Iron weight:</label>
                                <input class="bg-dark" type="text" name="iron_weight">
                            </div>
                            <div class="col-md-4">
                                <label for="no_of_components">No of Components:</label>
                                <input class="bg-dark" type="text" name="no_of_components">
                            </div>
                        </div>
                        <div class="p-3 justify-content-center ">
                        <button class="btn btn-primary" type="submit" name="action" value="add_more">Add More Activities</button>
                        <button class="btn btn-info" type="submit" name="action" value="finish">Finish and View All</button>
                    </div>
                    </form>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
