<?php

    namespace App\Http\Controllers\Blog\Admin;

    use App\Repositories\Admin\MainRepository;

    use App\Repositories\Admin\OrderRepository;
    use MetaTag;

    /**
     * Class MainController
     * @package App\Http\Controllers\Blog\Admin
     */
    class MainController extends AdminBaseController
    {


        private $orderRepository;


        public function __construct()
        {
            parent::__construct();
            $this->orderRepository = app(OrderRepository::class);
        }


        public function index()
        {
            $countOrders = MainRepository::getCountOrders();
            $countUsers = MainRepository::getCountUsers();
            $countProducts = MainRepository::getCountProducts();
            $countCategories = MainRepository::getCountCategories();


            $perpage = 4;
            $last_orders = $this->orderRepository->getAllOrders($perpage);



            MetaTag::setTags([
                'title' => 'Админ панель',
            ]);

            return view('blog.admin.main.index',
                compact('countOrders', 'countUsers', 'countProducts', 'countCategories','last_orders'));
        }



    }
