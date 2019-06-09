<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 23.05.2019
     * Time: 22:16
     */

    namespace App\Repositories\Admin;


    use App\Repositories\CoreRepository;
    use DB;
    use Illuminate\Database\Eloquent\Model;

    class MainRepository extends CoreRepository
    {

        /**
         * @return mixed
         */
        protected function getModelClass()
        {
            return Model::class;
        }

        public static function getCountOrders()
        {
            $count =  DB::table('orders')->where('status', '0')->get()->count();
            return $count;
        }

        public static function getCountUsers()
        {
            return DB::table('users')->get()->count();
        }

        public static function getCountProducts()
        {
            return DB::table('products')->get()->count();
        }

        public static function getCountCategories()
        {
            return DB::table('categories')->get()->count();
        }



    }
