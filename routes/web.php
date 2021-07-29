<?php
use App\Http\Controllers\AdminController;

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

Auth::routes();


// User Dashboard routes
Route::prefix('user')->group(function () {

    Route::get('/', 'UserController@index')->name('user');
     Route::get('/recipients', function () {
        return view('user.recipients');
     });

     Route::get('/transactions', function () {
        return view('user.transactions');
     });

     Route::get('/profile', function () {
        return view('user.profile');
     });


});

// Admin Dashboard routes
Route::group(['prefix' => 'admin', 'middleware' => ['role:superadministrator']], function() {


    Route::get('/', function () {
            return view('admin.index');
     });
    

    Route::get('/users', 'AdminController@index');


    Route::get('/recipients', function () {
        return view('admin.recipients');
    });

    Route::get('/transactions', function () {
        return view('admin.transactions');
    });
    Route::get('/profile', function () {
        return view('admin.profile');
    });

    //Route for register
    //  Route::get('/register', function () {
    //    return view('auth.register');
    // });

    Route::get('/register','AdminController@showregister');

    Route::post('/register','AdminController@store');

    Route::delete('/user-delete/{id}','AdminController@delete');

    Route::get('/user-edit/{$id}','AdminController@edit');

    //user-delete

});


