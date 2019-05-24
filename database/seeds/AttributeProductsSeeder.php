<?php

    use Illuminate\Database\Seeder;

    class AttributeProductsSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $data = [
                ['attr_id' => '1', 'product_id' => '1'],
                ['attr_id' => '1', 'product_id' => '2'],
                ['attr_id' => '1', 'product_id' => '3'],
                ['attr_id' => '2', 'product_id' => '4'],
                ['attr_id' => '5', 'product_id' => '1'],
                ['attr_id' => '5', 'product_id' => '2'],
                ['attr_id' => '5', 'product_id' => '3'],
                ['attr_id' => '5', 'product_id' => '4'],
                ['attr_id' => '8', 'product_id' => '1'],
                ['attr_id' => '8', 'product_id' => '2'],
                ['attr_id' => '8', 'product_id' => '3'],
                ['attr_id' => '8', 'product_id' => '4'],
                ['attr_id' => '12', 'product_id' => '1'],
                ['attr_id' => '12', 'product_id' => '2'],
                ['attr_id' => '12', 'product_id' => '3'],
                ['attr_id' => '12', 'product_id' => '4'],
                ['attr_id' => '18', 'product_id' => '1'],
                ['attr_id' => '18', 'product_id' => '2'],
                ['attr_id' => '18', 'product_id' => '4'],
                ['attr_id' => '19', 'product_id' => '3'],

            ];
            DB::table('attribute_products')->insert($data);
        }
    }
