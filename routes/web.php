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

            Route::get('/orders/change/{id}','OrderController@change')
                ->name('blog.admin.orders.change');
            Route::post('/orders/save/{id}','OrderController@save')
                ->name('blog.admin.orders.save');
            Route::get('/orders/forcedestroy/{id}','OrderController@forcedestroy')
                ->name('blog.admin.orders.forcedestroy');


            Route::get('/categories/mydel','CategoryController@mydel')
            ->name('blog.admin.categories.mydel');

            $methods = ['index','edit','update','create','store', 'destroy','mydel'];
            Route::resource('categories', 'CategoryController')
                ->names('blog.admin.categories');

            Route::resource('users','UserController')
                ->names('blog.admin.users');


            Route::get('/products/related','ProductController@related');

            Route::match(['get', 'post'], '/products/ajax-image-upload', 'ProductController@ajaxImage');
            Route::match(['get', 'post'], '/products/ajax-images-upload', 'ProductController@ajaxImages');

            Route::delete('/products/ajax-remove-image/{filename}', 'ProductController@deleteImage');
            Route::delete('/products/ajax-remove-images/{filename}', 'ProductController@deleteGalleryImage');


            Route::resource('products','ProductController')
                ->names('blog.admin.products');






            Route::resource('posts', 'PostController')
                ->names('blog.admin.posts');


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













