<?php
//namespace App\Models;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CvsController;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
{slug}

Route::get('/cvs', function () {
    return view('cvs/{slug}');
});

Route::get('/slug', function ($slug) {

    $cv = Cvs::whereSlug($slug)->first();
    return view('cvs', ['cv' => $cv ]);
});

Route::resource('cvs','App\Http\Controllers\CvsController');

Route::get('cvs/{slug}', function($slug){
    $result =   DB::table('users')->where('slug', $slug)->get();
    return view('cvs.index', ['result' => $result ]);
});
*/
//Route::get('{slug}', 'App\Http\Controllers\CvsController@index')->name('{slug}');



Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('{slug}', 'App\Http\Controllers\CvsController@index')->name('{slug}');


