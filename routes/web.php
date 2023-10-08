<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/about/create', [AboutController::class, 'create']);
Route::get('/about/update', [AboutController::class, 'update']);
Route::get('/about/delete', [AboutController::class, 'delete']);

Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/services', [ServiceController::class, 'index'])->name('service.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('service.create');

Route::post('/services.store', [ServiceController::class, 'store']) -> name('service.store');

Route::get('/services/{posts}', [ServiceController::class, 'show']) -> name('service.show');

Route::get('/services/{posts}/edit', [ServiceController::class, 'edit']) -> name('service.edit');
Route::patch('/services/{posts}', [ServiceController::class, 'update']) -> name('service.update');
Route::delete('/services/{posts}', [ServiceController::class, 'destroy']) -> name('service.delete');


Route::resource('posts', PostController::class);





