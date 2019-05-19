<?php

    use App\Http\Middleware\CheckStatus;


    //Admin side
    Route::group(['middleware' => ['status']], function () {
        $groupeData = [
            'namespace' => 'Blog\Admin',
            'prefix' => 'admin',
        ];
        Route::group($groupeData, function () {
            Route::resource('index', 'MainController')
                ->names('blog.admin.index');
        });
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


    //Disabled side - in that moment don`t work yet
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

    Route::get('/home', 'HomeController@index')->name('home');












