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
                'id' => 1,
                'user_id' => 2,
                'status' => 1,
                'created_at' => Carbon::createFromFormat('Y-m-d g:i A', '2016-11-29 02:00 PM'),
                'update_at' => Carbon::createFromFormat('Y-m-d g:i A', '2016-11-29 02:00 PM'),
                'currency' => 'RUB',
                'note' => 'Note',
                'sum' => 250.0
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'status' => 1,
                'created_at' => Carbon::createFromFormat('Y-m-d g:i A', '2016-11-29 02:00 PM'),
                'update_at' => Carbon::createFromFormat('Y-m-d g:i A', '2016-11-29 02:00 PM'),
                'currency' => 'RUB',
                'note' => 'Note',
                'sum' => 250.0
            ],
            [
                'id' => 3,
                'user_id' => 2,
                'status' => 1,
                'created_at' => Carbon::createFromFormat('Y-m-d g:i A', '2016-11-29 02:00 PM'),
                'update_at' => Carbon::createFromFormat('Y-m-d g:i A', '2016-11-29 02:00 PM'),
                'currency' => 'RUB',
                'note' => 'Note',
                'sum' => 250.0
            ],
            [
                'id' => 4,
                'user_id' => 2,
                'status' => 1,
                'created_at' => Carbon::createFromFormat('Y-m-d g:i A', '2016-11-29 02:00 PM'),
                'update_at' => Carbon::createFromFormat('Y-m-d g:i A', '2016-11-29 02:00 PM'),
                'currency' => 'RUB',
                'note' => 'Note',
                'sum' => 250.0
            ],
            [
                'id' => 5,
                'user_id' => 2,
                'status' => 1,
                'created_at' => Carbon::createFromFormat('Y-m-d g:i A', '2016-11-29 02:00 PM'),
                'update_at' => Carbon::createFromFormat('Y-m-d g:i A', '2016-11-29 02:00 PM'),
                'currency' => 'RUB',
                'note' => 'Note',
                'sum' => 250.0
            ],
            [
                'id' => 6,
                'user_id' => 2,
                'status' => 1,
                'created_at' => Carbon::createFromFormat('Y-m-d g:i A', '2016-11-29 02:00 PM'),
                'update_at' => Carbon::createFromFormat('Y-m-d g:i A', '2016-11-29 02:00 PM'),
                'currency' => 'RUB',
                'note' => 'Note',
                'sum' => 250.0
            ],
        ];
        DB::table('orders')->insert($data);
    }
}
