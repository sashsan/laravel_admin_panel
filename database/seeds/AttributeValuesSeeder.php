<?php

    use Illuminate\Database\Seeder;

    class AttributeValuesSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $data = [
                ['id' => '1', 'value' => 'Механика с автоподзаводом', 'attr_group_id' => '1'],
                ['id' => '2', 'value' => 'Механика с ручным заводом', 'attr_group_id' => '1'],
                ['id' => '3', 'value' => 'Кварцевый от батарейки', 'attr_group_id' => '1'],
                ['id' => '4', 'value' => 'Кварцевый от солнечного аккумулятора', 'attr_group_id' => '1'],
                ['id' => '5', 'value' => 'Сапфировое', 'attr_group_id' => '2'],
                ['id' => '6', 'value' => 'Минеральное', 'attr_group_id' => '2'],
                ['id' => '7', 'value' => 'Полимерное', 'attr_group_id' => '2'],
                ['id' => '8', 'value' => 'Стальной', 'attr_group_id' => '3'],
                ['id' => '9', 'value' => 'Кожаный', 'attr_group_id' => '3'],
                ['id' => '10', 'value' => 'Каучуковый', 'attr_group_id' => '3'],
                ['id' => '11', 'value' => 'Полимерный', 'attr_group_id' => '3'],
                ['id' => '12', 'value' => 'Нержавеющая сталь', 'attr_group_id' => '4'],
                ['id' => '13', 'value' => 'Титановый сплав', 'attr_group_id' => '4'],
                ['id' => '14', 'value' => 'Латунь', 'attr_group_id' => '4'],
                ['id' => '15', 'value' => 'Полимер', 'attr_group_id' => '4'],
                ['id' => '16', 'value' => 'Керамика', 'attr_group_id' => '4'],
                ['id' => '17', 'value' => 'Алюминий', 'attr_group_id' => '4'],
                ['id' => '18', 'value' => 'Аналоговые', 'attr_group_id' => '5'],
                ['id' => '19', 'value' => 'Цифровые', 'attr_group_id' => '5'],


            ];
            DB::table('attribute_values')->insert($data);
        }
    }
