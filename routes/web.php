<?php

use App\Http\Controllers\InspiringController;
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

Route::get('/hello_world', function(){
    return view('hello_world');
});


Route::get('/about_us', function () {
    return view('layouts.about_us', ['name' => 'Laravel 範例']);
});


//8版預設不會帶入username前綴，所以使用'InspiringController@inspire'會是噴錯
Route::get('/inspire', [InspiringController::class, 'inspire']);
