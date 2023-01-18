<?php

use App\Http\Controllers\PhotoController;
use App\Models\Appetizer;
use App\Models\Breakfast;
use App\Models\Dessert;
use App\Models\Drink;
use App\Models\MainDish;
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
    return view('home');
});
Route::get('/menu', function () {
    return view('menu', [
        'appetizers' => Appetizer::all(),
        'breakfasts' => Breakfast::all(),
        'dessert' => Dessert::all(),
        'drinks' => Drink::all(),
        'main_dishes' => MainDish::all()
    ]);
});

Route::get('/menu', function () {
    return view('appetizers', [
        'appetizers' => Appetizer::all()
    ]);
});
Route::get('/breakfast', function () {
    return view('breakfasts', [
        'breakfasts' => Breakfast::all()
    ]);
});
Route::get('/dessert', function () {
    return view('desserts', [
        'desserts' => Dessert::all()
    ]);
});
Route::get('/drink', function () {
    return view('drinks', [
        'drinks' => Drink::all()
    ]);
});
Route::get('/maindish', function () {
    return view('maindishes', [
        'maindishes' => MainDish::all()
    ]);
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/login', function () {
    return view('login');
});


Route::get('/upload', [PhotoController::class, 'create']);
Route::post('/upload', [PhotoController::class, 'store']);
