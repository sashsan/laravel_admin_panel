<?php

    namespace App\Http\Controllers\Blog\Admin;

    use App\Repositories\Admin\MainRepository;

    use MetaTag;

    /**
     * Class MainController
     * @package App\Http\Controllers\Blog\Admin
     */
    class MainController extends AdminBaseController
    {


        public function index()
        {
            $countOrders = MainRepository::getCountOrders();
            $countUsers = MainRepository::getCountUsers();
            $countProducts = MainRepository::getCountProducts();
            $countCategories = MainRepository::getCountCategories();

            MetaTag::setTags([
                'title' => 'Админ панель',
            ]);

            return view('blog.admin.main.index',
                compact('countOrders', 'countUsers', 'countProducts', 'countCategories'));
        }


    }
