<?php

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

use App\Http\Controllers\PageController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('about', function () {
	
	$team = [
		['name' => 'Hodor', 'position' => 'programmer'],
		['name' => 'Joker', 'position' => 'CEO'],
		['name' => 'Elvis', 'position' => 'CTO'],
	];
	
    return view('about', ['team' => $team]);
});
*/


Route::get('about', [PageController::class, 'about']);
Route::get('team', [PageController::class, 'team']);

Route::get('rating', [RatingController::class, 'index']);


Route::resource('articles', ArticleController::class);

