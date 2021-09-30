<?php

use App\Http\Controllers\SadminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\EmployeeController;
use App\Http\Livewire\Animal;
use App\Http\Livewire\Sadmin;
use App\Models\Employee;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [ShowController::class, 'index']);

Route::get('/', [ShowController::class, 'cari']);


Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::group(['middleware' => 'authadmin'], function () {
    Route::resource('posts', EmployeeController::class);
});
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/Admin', Animal::class, function () {
    return view('posts');
})->name('posts');;



Route::get('delete/{id}', [
    'middleware' => 'authadmin',
    'uses' => 'App\Http\Controllers\EmployeeController@delete'
]);

Route::post('importexcel', [
    'middleware' => 'authadmin',
    'uses' => 'App\Http\Controllers\EmployeeController@importexcel'
]);

Route::get('import-form', [
    'middleware' => 'authadmin',
    'uses' => 'App\Http\Controllers\EmployeeController@importForm'
]);

Route::get('exportexcel', [
    'middleware' => 'authadmin',
    'uses' => 'App\Http\Controllers\EmployeeController@exportexcel'
]);

Route::get('exportformat', [
    'middleware' => 'authadmin',
    'uses' => 'App\Http\Controllers\EmployeeController@exportformat'
]);

Route::get('/download', function () {
    $file = public_path() . "/29676585.pdf";
    $headers = array(
        'Content-Type: application/pdf',
    );
    return response()->download($file, "Manual-Book.pdf", $headers);
});


Route::group(['middleware' => 'authsadmin'], function () {
    Route::resource('sadmin', SadminController::class);
});

Route::middleware(['auth:sanctum', 'verified', 'authsadmin'])->get('/Superadmin', Sadmin::class, function () {
    return view('sadmin');
})->name('sadmin');;



Route::get('deletes/{id}', [
    'middleware' => 'authsadmin',
    'uses' => 'App\Http\Controllers\SadminController@delete'
]);

Route::post('importexcels', [
    'middleware' => 'authsadmin',
    'uses' => 'App\Http\Controllers\SadminController@importexcel'
]);

Route::get('import-forms', [
    'middleware' => 'authsadmin',
    'uses' => 'App\Http\Controllers\SadminController@importForm'
]);

Route::get('exportexcels', [
    'middleware' => 'authsadmin',
    'uses' => 'App\Http\Controllers\SadminController@exportexcel'
]);

Route::get('exportsformat', [
    'middleware' => 'authsadmin',
    'uses' => 'App\Http\Controllers\SadminController@exportformat'
]);
