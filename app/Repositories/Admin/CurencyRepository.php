<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 08.07.2019
     * Time: 13:24
     */

    namespace App\Repositories\Admin;


    use App\Models\Admin\Currency;
    use App\Repositories\CoreRepository;
    use App\Models\Admin\Currency as Model;

    class CurencyRepository extends CoreRepository
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


        /** Get Info by Id */
        public function getInfoProduct($id)
        {
            $product = $this->startConditions()
                ->find($id);
            return $product;
        }

        /** All Currency */
        public function getAllCurrency()
        {
            $curr = $this->startConditions()::all();
            return $curr;
        }


        /** Switch Base Currency = 0  */
        public function switchBaseCurr()
        {
            $id = Currency::where('base',2)->pluck('id')->toArray();
            $id = $id[0];
            $new = Currency::find($id);
            $new->base = '0';
            $new->save();

        }


        /** Delete Currency */
        public function deleteCurrency($id)
        {
            $delete = $this->startConditions()->where('id', $id)->forceDelete();
            return $delete;
        }

    }
