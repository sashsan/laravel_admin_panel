<?php

use Illuminate\Database\Seeder;

class AdminOrderProductsSeeder extends Seeder
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
                'id' => 38,
                'order_id' => 12,
                'product_id' => 2,
                'qty' => 2,
                'title' => 'Casio MQ-24-7BUL',
                'price' => 70.0
            ],
            [
                'id' => 39,
                'order_id' => 12,
                'product_id' => 3,
                'qty' => 1,
                'title' => 'Casio GA-1000-1AER',
                'price' => 400.0
            ],
            [
                'id' => 40,
                'order_id' => 12,
                'product_id' => 7,
                'qty' => 2,
                'title' => 'Q&Q Q956J302Y',
                'price' => 20.0
            ],
            [
                'id' => 41,
                'order_id' => 12,
                'product_id' => 8,
                'qty' => 2,
                'title' => 'Royal London 41040-01',
                'price' => 90.0
            ],
            [
                'id' => 42,
                'order_id' => 12,
                'product_id' => 4,
                'qty' => 2,
                'title' => 'Citizen JP1010-00E',
                'price' => 400.0
            ],
            [
                'id' => 43,
                'order_id' => 13,
                'product_id' => 1,
                'qty' => 1,
                'title' => 'Casio MRP-700-1AVEFF',
                'price' => 400.0
            ],
            [
                'id' => 44,
                'order_id' => 13,
                'product_id' => 2,
                'qty' => 1,
                'title' => 'Casio MQ-24-7BUL',
                'price' => 400.0
            ],
            [
                'id' => 45,
                'order_id' => 13,
                'product_id' => 3,
                'qty' => 1,
                'title' => 'Casio GA-1000-1AER',
                'price' => 400.0
            ],
            [
                'id' => 46,
                'order_id' => 13,
                'product_id' => 4,
                'qty' => 1,
                'title' => 'Citizen JP1010-00E',
                'price' => 400.0
            ],
            [
                'id' => 47,
                'order_id' => 13,
                'product_id' => 7,
                'qty' => 1,
                'title' => 'Q&Q Q956J302Y',
                'price' => 400.0
            ],

            [
                'id' => 48,
                'order_id' => 14,
                'product_id' => 2,
                'qty' => 1,
                'title' => 'Casio GA-1000-1AER',
                'price' => 400.0
            ],
            [
                'id' => 49,
                'order_id' => 14,
                'product_id' => 3,
                'qty' => 1,
                'title' => 'Citizen JP1010-00E',
                'price' => 400.0
            ],
            [
                'id' => 50,
                'order_id' => 14,
                'product_id' => 4,
                'qty' => 1,
                'title' => 'Q&Q Q956J302Y',
                'price' => 400.0
            ],



            [
                'id' => 51,
                'order_id' => 15,
                'product_id' => 2,
                'qty' => 1,
                'title' => 'Casio MQ-24-7BUL',
                'price' => 70.0
            ],
            [
                'id' => 52,
                'order_id' => 15,
                'product_id' => 3,
                'qty' => 1,
                'title' => 'Casio GA-1000-1AER',
                'price' => 400.0
            ],
            [
                'id' => 53,
                'order_id' => 16,
                'product_id' => 6,
                'qty' => 1,
                'title' => 'Citizen AT0696-59E',
                'price' => 350.0
            ],
            [
                'id' => 54,
                'order_id' => 16,
                'product_id' => 7,
                'qty' => 1,
                'title' => 'Q&Q Q956J302Y',
                'price' => 20.0
            ],
            [
                'id' => 55,
                'order_id' => 16,
                'product_id' => 8,
                'qty' => 1,
                'title' => 'Royal London 41040-01',
                'price' => 90.0
            ],
            [
                'id' => 56,
                'order_id' => 17,
                'product_id' => 2,
                'qty' => 1,
                'title' => 'Casio MQ-24-7BUL',
                'price' => 70.0
            ],
            [
                'id' => 57,
                'order_id' => 17,
                'product_id' => 3,
                'qty' => 1,
                'title' => 'Casio GA-1000-1AER',
                'price' => 400.0
            ],
            [
                'id' => 58,
                'order_id' => 17,
                'product_id' => 4,
                'qty' => 1,
                'title' => 'Citizen JP1010-00E',
                'price' => 400.0
            ],
            [
                'id' => 59,
                'order_id' => 18,
                'product_id' => 6,
                'qty' => 1,
                'title' => 'Citizen AT0696-59E',
                'price' => 350.0
            ],
            [
                'id' => 60,
                'order_id' => 18,
                'product_id' => 7,
                'qty' => 1,
                'title' => 'Q&Q Q956J302Y',
                'price' => 20.0
            ],
            [
                'id' => 61,
                'order_id' => 19,
                'product_id' => 6,
                'qty' => 1,
                'title' => 'Citizen AT0696-59E',
                'price' => 350.0
            ],
            [
                'id' => 62,
                'order_id' => 19,
                'product_id' => 7,
                'qty' => 1,
                'title' => 'Q&Q Q956J302Y',
                'price' => 20.0
            ],
            [
                'id' => 63,
                'order_id' => 19,
                'product_id' => 8,
                'qty' => 1,
                'title' => 'Royal London 41040-01',
                'price' => 90.0
            ],



        ];
        DB::table('order_products')->insert($data);
    }

}
