<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BlogsController1;
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

Route::get('/Blogs', [BlogsController::class, 'talk']);
Route::putphp('/Blogs', [BlogsController::class, 'save']);
Route::get('/Single',[AboutController::class]);
Route::resource('/Blogs', BlogsController1::class)>except('index', 'show');
