<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 21.05.2019
     * Time: 11:43
     */

    namespace App\Repositories;

    use Illuminate\Database\Eloquent\Model;
    use function PHPSTORM_META\elementType;


    abstract class CoreRepository
    {


        /**
         * с какой моделью он работает
         * Illuminate\Database\Eloquent\Model;
         * @var Model
         */
        protected $model;


        public function __construct()
        {
            $this->model = app($this->getModelClass());
        }

        /**
         * @return mixed
         */
        abstract protected function getModelClass();


        /**
         * @return Model|\Illuminate\Foundation\Application|mixed
         */
        protected function startConditions()
        {
            return clone $this->model;
        }



        public function getAllWithPaginate($perPage = null, $columns = [])
        {
            $result = $this
                ->startConditions()
                ->select($columns)
                ->paginate($perPage);
            return $result;
        }


        public function getEditId($id)
        {
            return $this->startConditions()->find($id);
        }


        public function getRequestID($get = true, $id = 'id')
        {
            if ($get){
                $data = $_GET;
            } else {
                $data = $_POST;
            }
            $id = !empty($data[$id]) ? (int)$data[$id] : null;
            //Если $id не получили то выбросим сразу ошибку
            if (!$id){
                throw new \Exception('Проверить Откуда id, если getRequestID(false) == $_POST', 404);
            }
            return $id;
        }



    }
