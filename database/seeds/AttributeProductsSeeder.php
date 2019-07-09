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
            $data = [];

            for ($y = 1; $y <= 19; $y++) {
                for ($i = 1; $i <= 17; $i++) {
                    $data[] = [
                        'attr_id' => $y,
                        'product_id' => $i,
                    ];
                }
            }



            DB::table('attribute_products')->insert($data);
        }
    }
