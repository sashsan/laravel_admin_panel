<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 29.05.2019
     * Time: 19:29
     */

    namespace App\Repositories\Admin;

    use App\Models\Admin\Category as Model;
    use App\Repositories\CoreRepository;

    class CategoryRepository extends CoreRepository
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


        public function checkChildren($id)
        {
            $children = $this->startConditions()
                ->where('parent_id', $id)
                ->count();
            return $children;
        }

        public function checkParentsInProducts($id)
        {
            $parents = \DB::table('products')
                ->where('category_id', $id)
                ->count();

            return $parents;
        }


        public function deleteCategory($id)
        {
            $delete = $this->startConditions()
                ->find($id)
                ->forceDelete();
            return $delete;

        }




    }
