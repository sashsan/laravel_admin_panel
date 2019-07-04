<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 06.06.2019
     * Time: 16:22
     */

    namespace App\Repositories\Admin;

    use App\Models\Admin\User as Model;
    use App\Models\Admin\User;
    use App\Repositories\CoreRepository;

    class UserRepository extends CoreRepository
    {



        public function __construct()
        {
            parent::__construct();

        }


        /**
         * @return mixed
         */
        protected function getModelClass()
        {
            return Model::class;
        }


        /** All Users */
        public function getAllUsers($perpage)
        {
            $users = $this->startConditions()
                    ->join('user_roles','user_roles.user_id', '=', 'users.id')
                    ->join('roles','user_roles.role_id', '=', 'roles.id')
                    ->select('users.id','users.name','users.email','roles.name as role')
                    ->orderBy('users.id')
                    ->toBase()
                    ->paginate($perpage);
            return $users;
        }

        /** One Order by User */
        public function getUserOrders($user_id, $perpage)
        {
            $orders = $this->startConditions()::withTrashed()
                ->join('orders','orders.user_id','=','users.id')
                ->join('order_products', 'order_products.order_id', '=', 'orders.id')
                ->select('orders.id','orders.user_id','orders.status','orders.created_at', 'orders.updated_at','orders.currency', \DB::raw('ROUND(SUM(order_products.price), 2) AS sum'))
                ->where('user_id',$user_id)
                ->groupBy('orders.id')
                ->orderBy('orders.status')
                ->orderBy('orders.id')
                ->paginate($perpage);

            return $orders;
        }

        /** User Role */
        public function getUserRole($id)
        {
            $role = $this->startConditions()
                ->find($id)
                ->roles()
                ->get();

            foreach ($role as $r){
                $role = $r->name;
            }

            return $role;
        }

        /** Count Orders*/
        public function getCountOrders($id,$perpage)
        {
            $count = \DB::table('orders')
                ->where('user_id', $id)
                ->limit($perpage)
                ->get();
            return $count;
        }

        /** CountOrders for Pagination part */
        public function getCountOrdersPag($id)
        {
            $count = \DB::table('orders')
                ->where('user_id', $id)
                ->count();
            return $count;
        }


    }
