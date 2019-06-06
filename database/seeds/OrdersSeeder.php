<?php

    use Carbon\Carbon;
    use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
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
                'id' => 12,
                'user_id' => 7,
                'status' => '0',
                'currency' => 'USD',
                'note' => 'Note',
                'sum' => 1560.0
            ],
            [
                'id' => 13,
                'user_id' => 8,
                'status' => '0',
                'currency' => 'USD',
                'note' => 'Note',
                'sum' => 1190.0
            ],
            [
                'id' => 14,
                'user_id' => 10,
                'status' => '0',
                'currency' => 'USD',
                'note' => 'Note',
                'sum' => 870.0
            ],
            [
                'id' => 15,
                'user_id' => 2,
                'status' => '0',
                'currency' => 'USD',
                'note' => 'Note',
                'sum' => 470.0
            ],
            [
                'id' => 16,
                'user_id' => 2,
                'status' => '0',
                'currency' => 'USD',
                'note' => 'Note',
                'sum' => 460.0
            ],
            [
                'id' => 17,
                'user_id' => 13,
                'status' => '0',
                'currency' => 'USD',
                'note' => 'Note',
                'sum' => 1270.0
            ],
            [
                'id' => 18,
                'user_id' => 14,
                'status' => '0',
                'currency' => 'USD',
                'note' => 'Note',
                'sum' => 370.0
            ],
            [
                'id' => 19,
                'user_id' => 15,
                'status' => '0',
                'currency' => 'USD',
                'note' => 'Note',
                'sum' => 460.0
            ],
        ];
        DB::table('orders')->insert($data);
    }
}
