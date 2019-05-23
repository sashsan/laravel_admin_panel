<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 21.05.2019
     * Time: 11:43
     */

    namespace App\Repositories;
    use Illuminate\Database\Eloquent\Model;

    abstract class CoreRepository
    {
        /**
         * с какой моделью он работает
         * Illuminate\Database\Eloquent\Model;
         * @var Model
         */
        protected $model;

        /**
         * $this->model = app('BlogCategoryRepository');
         * CoreRepository constructor.
         */
        public function __construct()
        {
            //тоже самое
            //$this->model = new $this->getModelClass();
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



    }
