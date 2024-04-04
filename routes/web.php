<?php
use App\Http\Controllers\CrudUserController;
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
// Luong nguyen
Route::get('home', [CrudUserController::class, 'checkLogin'])->name('home');
Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login',[CrudUserController::class, 'authUser'])->name('post.home');// postlogin
Route::get('/register',[CrudUserController::class, 'getRegister'])->name('getRegister');
Route::post('postregister',[CrudUserController::class, 'postRegister'])->name('postRegister');
Route::get('/logout',[CrudUserController::class, 'logOut'])->name('logout');
// Duy Tuaans
Route::get('list', [CrudUserController::class, 'list'])->name('list');
Route::get('user/{id}', [CrudUserController::class, 'show'])->name('detail-user');
Route::get('user/{id}/edit', [CrudUserController::class, 'edit'])->name('edit');
Route::patch('user/{id}', [CrudUserController::class, 'update'])->name('update');
Route::delete('user/{id}', [CrudUserController::class, 'delete'])->name('deletee');