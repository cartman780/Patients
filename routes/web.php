<?php

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

// authorized routes
Route::middleware('auth')->group(function () {
    // dashboard
    Route::get('/', 'UserController@index')->name('index');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

    // patients check user id for security
    Route::post('/patients', 'PatientController@store');
    Route::get('/patients/add-patient', 'PatientController@create');
    Route::get('/patients', 'PatientController@index');
    Route::get('/patients/{patient}', 'PatientController@show');
    Route::put('/patients', 'PatientController@update');
    Route::get('/patients/{patient}/edit', 'PatientController@edit');
    Route::get('/patients/{patient}/destroy', 'PatientController@destroy');

    // treatments
    Route::post('/patients/{patient}', 'TreatmentController@store');
    Route::get('/patients/{patient}/treatments/add-treatment', 'TreatmentController@create');
    Route::get('/patients/{patient}/treatments/{treatment}/edit-treatment', 'TreatmentController@edit');
    Route::get('/patients/{patient}/treatments/{treatment}', 'TreatmentController@show');
    Route::put('/patients/{patient}/treatments/{treatment}', 'TreatmentController@update');
    Route::get('/patients/{patient}/treatments/{treatment}/destroy', 'TreatmentController@destroy');

});

Route::middleware(['auth', 'admin'])->group(function () {
    // users
    Route::get('/users/add-user', 'UserController@create')->name('create');
    Route::post('/users', 'UserController@store')->name('store');
    Route::get('/users', 'UserController@users')->name('users');
    Route::put('/users/{u}/update', 'UserController@update')->name('update');
    Route::get('/users/{u}/edit', 'UserController@edit')->name('edit');
    Route::get('/users/{u}/destroy', 'UserController@destroy')->name('destroy');
});

// login
Route::get('/login', function () {
    return view('auth.login');
});

// errorpages
Route::get('/403', function () {
    return view('403');
})->name('403');

Route::get('/denied', function () {
    return view('denied');
})->name('denied');

Auth::routes();