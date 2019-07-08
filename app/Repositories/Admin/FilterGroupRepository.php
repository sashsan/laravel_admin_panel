<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 08.07.2019
     * Time: 6:52
     */

    namespace App\Repositories\Admin;

    use App\Models\Admin\AttributeGroup as Model;
    use App\Repositories\CoreRepository;

    class FilterGroupRepository extends CoreRepository
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

        /** Get Info  by Id */
        public function getInfoProduct($id)
        {
            $product = $this->startConditions()
                ->find($id);
            return $product;
        }

        /** Get all Groups Filter */
        public function getAllGroupsFilter()
        {
            $attrs_group = \DB::table('attribute_groups')->get()->all();
            return $attrs_group;
        }

        /** Delete one Group Filter by Id*/
        public function deleteGroupFilter($id)
        {
            $delete = $this->startConditions()->where('id', $id)->forceDelete();
            return $delete;
        }

        /** Count all groups filter*/
        public function getCountGroupFilter()
        {
            $count = \DB::table('attribute_values')->count();
            return $count;
        }

    }
