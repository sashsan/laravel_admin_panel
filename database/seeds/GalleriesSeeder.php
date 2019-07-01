<?php

    use Illuminate\Database\Seeder;

    class GalleriesSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $data = [
                ['id' => '1', 'product_id' => '2',],
                ['id' => '2', 'product_id' => '2',],
                ['id' => '3', 'product_id' => '2',],
            ];

            DB::table('galleries')->insert($data);
        }
    }
