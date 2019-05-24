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
                ['id' => '1', 'product_id' => '2', 'img' => 's-1.jpg'],
                ['id' => '2', 'product_id' => '2', 'img' => 's-2.jpg'],
                ['id' => '3', 'product_id' => '2', 'img' => 's-3.jpg'],
            ];

            DB::table('galleries')->insert($data);
        }
    }
