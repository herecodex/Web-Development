<?php

use Illuminate\Support\Facades\Route;

///controllers
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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
/*
Route::get('/', function () {
    return view('welcome');
    //return 'Im on baseurl'; 
});
*/

Route::get('/',[PagesController::class, 'index']);
Route::get('/about',[PagesController::class, 'about']);
Route::get('/services',[PagesController::class, 'services']);

//Route for Posts
Route::get('/posts',[PostsController::class, 'index']);
Route::get('/posts/{id}',[PostsController::class, 'show']);
Route::get('/posts_create',[PostsController::class, 'create']);
Route::post('/posts_store',[PostsController::class, 'store']);
Route::get('/posts_edit/{id}',[PostsController::class, 'edit']);
Route::post('/posts_update',[PostsController::class, 'update']);
Route::post('/posts_delete',[PostsController::class, 'destroy']);

Route::get('/hello', function(){
    //return 'HELLO THERE!';
    return "test.hello";
});

Route::get('/user/{id}', function($id) {
    return "Hello ".$id."!";
});

