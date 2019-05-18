<?php

    use App\Http\Middleware\CheckStatus;


    //Admin side
    $groupeData = [
        'namespace' => 'Blog\Admin',
        'prefix' => 'admin',
    ];
    Route::group($groupeData, function () {
        Route::resource('index', 'MainController')
            ->names('blog.admin.index');
    });
    //---------


    //User side
    $groupeData = [
        'namespace' => 'Blog\User',
        'prefix' => 'user',
    ];
    Route::group($groupeData, function () {
        Route::resource('index', 'MainController')
            ->names('blog.user.index');
    });
    //---------

    //Disabled side
    $groupeData = [
        'namespace' => 'Blog\Disabled',
        'prefix' => 'disabled',
    ];
    Route::group($groupeData, function () {
        Route::resource('index', 'MainController')
            ->names('blog.disabled.index');
    });
    //---------

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::group(['middleware' => ['status']], function () {
        Route::get('/home', 'HomeController@index')->name('home');
    });

    //    Route::group(['prefix' => 'admin', 'namespace' => 'Blog\Admin'], function () {
    //        Route::resource('index', 'MainController')
    //            ->names('blog.admin.main')
    //            ->middleware('status');
    //    });










