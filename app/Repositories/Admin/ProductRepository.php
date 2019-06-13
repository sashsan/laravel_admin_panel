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

        public function getLastProducts($perpage)
        {
            $get = $this->startConditions()
                ->orderBy('id','desc')
                ->limit($perpage)
                ->paginate($perpage);
            return $get;
        }



        public function editFilter($id, $data)
        {
            $filter = \DB::table('attribute_products')
                ->pluck('attr_id')
                ->where('product_id',$id)
                ->toArray();

            //если убрал фильтры
            if (empty($data['attrs']) && !empty($filter)){
                \DB::table('attribute_products')
                    ->where('product_id',$id)
                    ->delete();
                return;
            }

            //если фильтры добавляются
            if (empty($filter) && !empty($data['attrs'])){
                $sql_part = '';
                foreach ($data['attrs'] as $v){
                    $sql_part .= "($v, $id),";
                }

                $sql_part = rtrim($sql_part, ',');

                \DB::insert("insert into attribute_products (attr_id, product_id) VALUES $sql_part");

                return;
            }
            //если изменились фильтры
            if(!empty($data['attrs'])){
                $result = array_diff($filter, $data['attrs']);
                if (!$result){
                    \DB::table('attribute_products')
                        ->where('product_id',$id)
                        ->delete();
                    $sql_part = '';
                    foreach ($data['attrs'] as $v){
                        $sql_part .= "($v, $id),";
                    }
                    $sql_part = rtrim($sql_part, ',');

                    \DB::insert("insert into attribute_products (attr_id, product_id) VALUES $sql_part");
                }
            }
        }


    }
