<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;


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

//Route::get('/', function () {
 //   return view('welcome');
//}
Route::get('/',[SiteController::class,"index"])->name('site.index');
Route::get('/about',[SiteController::class,"about"])->name('site.about');
Route::get('/produits',[SiteController::class,"produits"])->name('site.produits');
Route::get('/contact',[SiteController::class,"contact"])->name('site.contact');
Route::post('/save',[SiteController::class,"save"])->name('site.save'); 


