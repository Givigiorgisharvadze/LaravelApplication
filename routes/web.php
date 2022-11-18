<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CrudController::class, 'firstPagee']);

Route::get('/crud', [CrudController::class, 'second'])->name('listofallitems');

Route::get('crud/cud/{item?}', [CrudController::class, 'createandUpdate'])->name('edit');

Route::get('crud/{id}', [CrudController::class, 'readL'])->name('read');

Route::get('crud/delete/{item}', [CrudController::class, 'delete'])->name('deleteitem');