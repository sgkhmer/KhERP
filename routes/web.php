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

// language
if(isset($_COOKIE['Language'])){
    session(['languageActive' => $_COOKIE['Language']]);
} else {
    session(['languageActive' => 'English']);
    setcookie("Language", 'English', time()+3600*24*365, '/');
}

// Front End Design
Route::resource('/', 'FrontEnd\TestController');

// authentication 

Route::post('login', function(Illuminate\Http\Request $request) 
{
    if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
        return response()->json(['success' => true, 'message' => 'Login successfully performed'], 200);
    }

    return response()->json(['success' => false, 'message' => 'Unable to login'], 401);
});

Route::post('api/register', function(Illuminate\Http\Request $request) 
{
    // if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
    //     return response()->json(['success' => true, 'message' => 'Login successfully performed'], 200);
    // }

    // return response()->json(['success' => false, 'message' => 'Unable to login'], 401);
});

Route::group(['middleware' => 'auth'], function() {

    Route::post('logout', function()
    {
        Auth::logout();
        return response()->json(['success' => true, 'message' => 'You logout with success'], 200);
    });

    Route::get('users', function() {
        $users = App\User::all();

        return response()->json(['success' => 'true', 'message' => 'Loading users', 'data' => ['users' => $users->toJson()]], 200);
    });
    
    // menu
    Route::resource('/api/menu', 'Backend\MenuController');
    // 

    Route::get('/api/getTest', 'FrontEnd\TestController@getTest');
    Route::get('/api/show/{id}', 'FrontEnd\TestController@getShow');
    Route::put('/api/update', 'FrontEnd\TestController@UpdateApi');

    
    Route::get('admin', 'Backend\AdminController@index');

    Route::get('admin/dashboard/', function () {
        return view('dashboard');
    });

});



Route::post('auth/login', 'Auth\LoginController@login');

Route::get('auth/login', 'Auth\LoginController@showLoginForm');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('logout', function()
{
    Auth::logout();
    return redirect("auth/login/#/login");
    // return response()->json(['success' => true, 'message' => 'You logout with success'], 200);
})->name('login');