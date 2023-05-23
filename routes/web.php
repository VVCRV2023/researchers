<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
    return view('start');
});


Route::get('/researchers_search_form', function () {
       //+
       $user = Auth::user();
       if (!$user)
       {
        $text = "Увага! Для пошуку дослідника потрібна авторизація (реєстрація).";
        return view('start')->with('text', $text);
       }
   //fin+
    return view('researchers_search_form');
});


Route::get('/researchers', 'App\Http\Controllers\researchers_controller@researchers')->name('researchers');

Route::get('/researchers_profile/{id_researchers}', 'App\Http\Controllers\researchers_controller@researchers_profile')->name('researchers_profile');

Route::get('/personal_data', 'App\Http\Controllers\researchers_controller@personal_data')->name('personal_data');

Route::post('/researchers_edit_submit/{id_researchers}', 'App\Http\Controllers\researchers_controller@researchers_edit_submit')->name('researchers_edit_submit');

Route::get('/researchers_del/{id_researchers}', 'App\Http\Controllers\researchers_controller@researchers_del_submit')->name('researchers_del');


//Для користувачів
Route::middleware('guest')->namespace('\App\Http\Controllers')->group(function() {
	Route::get('/', function () {
		return view('start');
	});
	
	Route::post('/login', 'researchers_controller@postSignin'
	);
});

Route::get('/reg', function () {
    return view('reg');
});

Route::post('/reg', 'App\Http\Controllers\researchers_controller@postReg');

Route::get('/home', function () { //home - стандартний маршрут після авторизації користувача
    return view('start');
});

Route::group(['middleware' => ['auth']], function() { //вихід
    
    Route::get('/logout', 'App\Http\Controllers\researchers_controller@perform');

 });

 

//Для користувачів