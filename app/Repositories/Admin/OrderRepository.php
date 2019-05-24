<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 24.05.2019
     * Time: 11:02
     */

    namespace App\Repositories\Admin;


    use App\Repositories\CoreRepository;
    use App\Models\Order as Model;

    class OrderRepository extends CoreRepository
    {

        /**
         * @return mixed
         */
        protected function getModelClass()
        {
            return Model::class;
        }


        public function getAllOrders($perpage)
        {
            $orders = $this->startConditions()
                ->join('users', 'orders.user_id', '=', 'users.id')
                ->join('order_products', 'order_products.order_id', '=', 'orders.id')
                ->select('orders.id', 'orders.user_id', 'orders.status', 'orders.created_at', 'orders.update_at','orders.update_at', 'orders.currency', 'users.name',
                    \DB::raw('ROUND(SUM(order_products.price), 2) AS sum'))
                ->groupBy('orders.id')
                ->orderBy('orders.status')
                ->orderBy('orders.id')
                ->toBase()
                ->paginate($perpage);

            return $orders;
        }

        public function getOneOrder($order_id)
        {
            $order = $this->startConditions()
                ->join('users', 'orders.user_id', '=', 'users.id')
                ->join('order_products', 'order_products.order_id', '=', 'orders.id')
                ->select('orders.*', 'users.name',
                    \DB::raw('ROUND(SUM(order_products.price), 2) AS sum'))
                ->where('orders.id', $order_id)
                ->groupBy('orders.id')
                ->orderBy('orders.status')
                ->orderBy('orders.id')
                ->limit(1)
                ->get();

            return $order;
        }

        public function getAllOrderProductsId($order_id)
        {
            $orderProducts = \DB::table('order_products')
                ->where('order_id',$order_id)
                ->get();
            return $orderProducts;
        }

    }
