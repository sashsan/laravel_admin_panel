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

            $data = [];

            for ($y = 1; $y <= 17; $y++) {
                for ($i = 1; $i <= 3; $i++) {
                    $data[] = [
                        'product_id' => $y,
                        'related_id' => $i,
                    ];
                }
            }


            DB::table('related_products')->insert($data);
        }
    }
