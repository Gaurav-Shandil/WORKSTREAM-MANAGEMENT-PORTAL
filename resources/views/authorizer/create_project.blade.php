<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form  action="{{ route('projects.store') }}" method="POST">
                        @csrf
                        <div class="row border border-white p-4">
                        <div class="col-md-4">
                        <label class="px-4" for="type">Project Type:</label>
                        <select class="bg-dark w-50"  name="type">
                            <option  value="building">Building</option>
                            <option value="hydro">Hydro Plant</option>
                            <option value="thermal">Thermal Plant</option>
                        </select>
                        </div>
                        <div class="col-md-4">
                        <label for="name">Project Name:</label>
                        <input class="bg-dark w-50" type="text" name="name">
                        </div>
                        <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
  
                        </div>


                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

