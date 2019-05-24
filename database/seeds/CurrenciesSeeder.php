<?php

    use Illuminate\Database\Seeder;

    class CurrenciesSeeder extends Seeder
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
                    'title' => 'гривна',
                    'code' => 'UAH',
                    'symbol_left' => '',
                    'symbol_right' => 'грн.',
                    'value' => '25.80',
                    'base' => '0'
                ],
                [
                    'id' => '2',
                    'title' => 'доллар',
                    'code' => 'USD',
                    'symbol_left' => '$',
                    'symbol_right' => '',
                    'value' => '1.00',
                    'base' => '1'
                ],
                [
                    'id' => '3',
                    'title' => 'евро',
                    'code' => 'EUR',
                    'symbol_left' => '€',
                    'symbol_right' => '',
                    'value' => '0.88',
                    'base' => '0'
                ],

            ];

            DB::table('currencies')->insert($data);
        }
    }
