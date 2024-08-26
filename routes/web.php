<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\VendorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');
// Authorizer routes 
Route::middleware(['auth','authorizer'])->group(function(){

    // Route::get('/demo', [ProjectController::class,'demo'])->name('demo');
    // Route::get('/projects/index', [ProjectController::class,'index'])->name('projects.index');
    Route::resource('projects', ProjectController::class);
    Route::get('projects/{project}/activities/create', [ActivityController::class, 'create'])->name('activities.create');
    Route::post('projects/{project}/activities', [ActivityController::class, 'store'])->name('activities.store');
    Route::get('projects/{project}/activities/show', [ActivityController::class, 'show'])->name('activities.show');
    Route::delete('/activities/{activity}', [ActivityController::class, 'destroy'])->name('activities.destroy');
    // Route::get('/activities/{activity}/edit', [ActivityController::class, 'edit'])->name('activities.edit');
    // Route::put('/activities/{activity}', [ActivityController::class, 'update'])->name('activities.update');
    // Route to show the edit form
// Route::get('/activities/{activity}/edit', [ActivityController::class, 'edit'])->name('activities.edit');

// Route to handle the update request
// Route::put('/activities/{activity}', [ActivityController::class, 'update'])->name('activities.update');
});

//vendor routes

Route::middleware(['auth', 'vendor'])->group(function(){
    Route::get('vendor/index',[VendorController::class,'index'])->name('vendor.index');
    // Route::get('vendor/index')
    Route::get('vendor/{project}/show', [VendorController::class, 'show'])->name('vendor.activities.show');
    Route::post('/vendor/projects/{project}/activities/{activity}/update', [VendorController::class, 'updateActivity'])->name('vendor.activities.update');


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



