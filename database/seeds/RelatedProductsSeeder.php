<?php

    use Illuminate\Database\Seeder;

    class RelatedProductsSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $data = [
                ['product_id' => 1, 'related_id' => 2],
                ['product_id' => 1, 'related_id' => 5],
                ['product_id' => 2, 'related_id' => 5],
                ['product_id' => 2, 'related_id' => 10],
                ['product_id' => 5, 'related_id' => 1],
                ['product_id' => 5, 'related_id' => 7],
                ['product_id' => 5, 'related_id' => 8],

            ];

            DB::table('related_products')->insert($data);
        }
    }
