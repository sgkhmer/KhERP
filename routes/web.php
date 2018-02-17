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
// link reference multiple authentication https://www.codementor.io/okoroaforchukwuemeka/9-tips-to-set-up-multiple-authentication-in-laravel-ak3gtwjvt
// language

if(isset($_COOKIE['Language'])){
    session(['languageActive' => $_COOKIE['Language']]);
} else {
    session(['languageActive' => 'English']);
    setcookie("Language", 'English', time()+3600*24*365, '/');
}

Route::post('login', function(Illuminate\Http\Request $request) 
{
    if($request->is_account==1){
        if (Auth::guard('account')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return response()->json(['success' => true, 'message' => 'Login successfully performed'], 200);
        } 
    }else{
        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            return response()->json(['success' => true, 'message' => 'Login successfully performed'], 200);
        }
    }
    return response()->json(['success' => false, 'message' => 'Unable to login'], 401);
});

// API Back Office is place here
if (Request::is('api*')){
    
    Route::middleware(['auth'])->prefix('api')->group(function () {
        // if (Request::is('api*')){
            // Route::prefix('api')->group(function () {
                //=====Categories API=============================
                // Route::get('/categories/list','FrontEnd\Common\HeaderController@index');
                Route::resource('categories', 'MoneyTransfer\Category\CategoryController');
                Route::get('getCategories', 'MoneyTransfer\Category\CategoryController@getCategoriesList');
                Route::get('getCategories_type', 'MoneyTransfer\Category\CategoryController@getCategoriesType');
                Route::get('getCategories_parent', 'MoneyTransfer\Category\CategoryController@getCategoriesParent');
                 //=====Product API=============================
                Route::resource('products', 'MoneyTransfer\Products\ProductsController');
                Route::get('/getManufacturers','MoneyTransfer\Manufacturers\ManufacturersController@getManufacturers');
                Route::get('/getMenus', 'MoneyTransfer\Settings\GroupRolesController@index');
            // });

        // }else{
        //     Route::get('/{any?}',function(){
        //         return view('index');
        //     })->where(['any'=>'.*']);
        // }
        
    });
    Route::get('auth/logout', function()
    {
        Auth::logout();
        return redirect("auth/login");
    })->name('login');
}else if(Request::is('auth*')){
    Route::post('auth/login', 'Auth\LoginController@login');
    Route::get('auth/login', 'Auth\LoginController@showLoginForm');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

    Route::get('auth/logout', function()
    {
        Auth::logout();
        return redirect("auth/login");
    })->name('login');
}else{
    Route::get('/{any?}',function(){
        return view('index');
    })->where(['any'=>'.*']);
}
