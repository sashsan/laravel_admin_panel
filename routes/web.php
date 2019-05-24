<?php



    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');



    //Admin side
    Route::group(['middleware' => ['status','auth']], function () {
        $groupeData = [
            'namespace' => 'Blog\Admin',
            'prefix' => 'admin',
        ];
        Route::group($groupeData, function () {
            Route::resource('index', 'MainController')
                ->names('blog.admin.index');

            Route::resource('orders', 'OrderController')
                ->names('blog.admin.orders');






            Route::resource('posts', 'PostController')
                ->names('blog.admin.posts');

            $methods = ['index','edit','update','create','store'];
            Route::resource('categories', 'CategoryController')
                ->only($methods)
                ->names('blog.admin.categories');
        });
    });
    //---------


//    //User side
//    $groupeData = [
//        'namespace' => 'Blog\User',
//        'prefix' => 'user',
//    ];
//    Route::group($groupeData, function () {
//        Route::resource('index', 'MainController')
//            ->names('blog.user.index');
//    });
//    //---------
//
//
//    //Disabled side - in that moment don`t work yet
//    $groupeData = [
//        'namespace' => 'Blog\Disabled',
//        'prefix' => 'disabled',
//    ];
//    Route::group($groupeData, function () {
//        Route::resource('index', 'MainController')
//            ->names('blog.disabled.index');
//    });
    //---------













