<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 09.06.2019
     * Time: 4:17
     */

    namespace App\Repositories\Admin;

    use App\Models\Admin\Product as Model;
    use App\Repositories\CoreRepository;

    class ProductRepository extends CoreRepository
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


        public function getAllProducts($perpage)
        {
            $get_all = $this->startConditions()::withTrashed()
                ->join('categories','products.category_id', '=', 'categories.id')
                ->select('products.*','categories.title AS cat')
                ->orderBy(\DB::raw('LENGTH(products.title)',"products.title"))
                ->limit($perpage)
                ->paginate($perpage);

            return $get_all;
        }


        public function getCountProducts()
        {
            $count = $this->startConditions()
                ->count();
            return $count;
        }







    }
