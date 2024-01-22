<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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



// Store appointments data
Route::post('/store-appointment', [Controller::class, 'store_appointments'])->name('store_appointments');
// ----------------------------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // -------------------------------
    Route::get('/', function () {
        $controller = app()->make(Controller::class);
        return $controller->day_picker(date('m'), Auth::user()->id);
    })->name('home');
    //select month route
    Route::get('/month/{month}', [Controller::class, 'day_picker'])->where('month', '[1-9]|1[0-2]');
    
    // Create appointment
    Route::get('/create-appointment', function(){
        return view('create_appointment');
    })->name('create');

});

require __DIR__.'/auth.php';
