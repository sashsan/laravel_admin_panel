<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 21.05.2019
     * Time: 11:43
     */

    namespace App\Repositories;
    use App\Models\BlogCategory as Model;
    use Illuminate\Database\Eloquent\Collection;

    class BlogCategoryRepository extends CoreRepository
    {

        /**
         * c какой моделью данный репозиторий работает
         * @return string
         */
        protected function getModelClass()
        {
            return Model::class;
        }


        /**
         * Получить модель для редактирования в админке
         * это я описываю что пришел id
         * @param $id
         * @return Model
         */
        public function getEdit($id)
        {
            return $this->startConditions()->find($id);
        }


        /**
         * Получить список категорий для вывода в выпадающем меню
         * @return Collection
         */
        public function getForComboBox()
        {
            //return $this->startConditions()->all();

            $columns = implode(', ', [
                'id',
                'CONCAT (id, ". ", title) AS combo_title'
            ]);

            //первый вариант
            $result = $this->startConditions()->all();
            //второй вариант
            $result1 = $this
                ->startConditions()
                ->select('blog_categories.*',
                    \DB::raw('CONCAT (id, ". ", title) AS combo_title'))
//попробывать с toBase и без, уменьшает кол-во данных
                ->toBase()
                ->get();
//третий вариант это коллекция
            $result2 = $this
                ->startConditions()
                ->selectRaw($columns)
                ->toBase()
                ->get();


            return $result2;

        }

        public function getAllWithPaginate($perPage = null)
        {
            //массив которые поля нам нужны выводить
            $columns = ['id','title','parent_id'];

            $result = $this
                ->startConditions()
                ->select($columns)
                ->paginate($perPage);

            return $result;
        }


    }
