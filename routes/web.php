<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\RolesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
// Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/contact', [TicketsController::class, 'create']);
Route::post('/contact', [TicketsController::class, 'store']);
Route::get('/tickets', [TicketsController::class, 'index']);
Route::get('/tickets/{slug?}', [TicketsController::class, 'show']);
Route::get('/tickets/{slug?}/edit', [TicketsController::class, 'edit']);
Route::post('/tickets/{slug}/edit', [TicketsController::class, 'update']);
Route::post('/tickets/{slug}/delete', [TicketsController::class, 'destroy']);

Route::post('/comments', [CommentsController::class, 'newComment']);

Route::group(array('prefix'=>'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function(){
    Route::get('users', [UsersController::class, 'index']);
    Route::get('roles', [RolesController::class, 'index']);
    Route::get('roles/create', [RolesController::class, 'create']);
    Route::post('roles/create', [RolesController::class, 'store']);

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
