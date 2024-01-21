<?php
use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    $controller = app()->make(Controller::class);
    return $controller->day_picker(1);
})->name('home');


Route::get('/month/{month}', [Controller::class, 'day_picker'])->where('month', '[1-9]|1[0-2]');

// Create appointment
Route::get('/create-appointment', function(){
    return view('create_appointment');
})->name('create');