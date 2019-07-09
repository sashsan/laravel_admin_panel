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

        $data = [];

            for ($i = 1; $i <= 12; $i++) {
                $data[] = [
                    'user_id' => $i,
                    'status' => '0',
                    'created_at' => date('Y-m-d'),
                    'currency' => 'USD',
                    'note' => 'Note',

                ];
            }


        DB::table('orders')->insert($data);
    }
}
