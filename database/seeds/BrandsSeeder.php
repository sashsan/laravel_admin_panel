<?php

    use Illuminate\Database\Seeder;

    class BrandsSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $data = [
                [
                    'id' => '1',
                    'title' => 'Casio',
                    'alias' => 'casio',
                    'img' => 'abt-1.jpg',
                    'description' => 'In sit amet sapien eros Integer dolore magna aliqua'
                ],
                [
                    'id' => '2',
                    'title' => 'Citizen',
                    'alias' => 'citizen',
                    'img' => 'abt-2.jpg',
                    'description' => 'In sit amet sapien eros Integer dolore magna aliqua'
                ],
                [
                    'id' => '3',
                    'title' => 'Royal London',
                    'alias' => 'royal-london',
                    'img' => 'abt-3.jpg',
                    'description' => 'In sit amet sapien eros Integer dolore magna aliqua'
                ],
                [
                    'id' => '4',
                    'title' => 'Seiko',
                    'alias' => 'seiko',
                    'img' => 'seiko.png',
                    'description' => 'In sit amet sapien eros Integer dolore magna aliqua'
                ],
                [
                    'id' => '5',
                    'title' => 'Diesel',
                    'alias' => 'diesel',
                    'img' => 'diesel.png',
                    'description' => 'In sit amet sapien eros Integer dolore magna aliqua'
                ],

            ];

            DB::table('brands')->insert($data);
        }
    }
