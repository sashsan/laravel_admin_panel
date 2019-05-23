<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            ['id' => '1', 'category_id' => '6','brand_id' => '1', 'title' => 'Casio MRP-700-1AVEF', 'alias' => 'casio-mrp-700-1avef', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>','price' => 300, 'old_price' => 0, 'status' => '1','keywords' => 'keywords', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.', 'img' => 'p-2.png', 'hit' => '1',],
            ['id' => '2', 'category_id' => '6','brand_id' => '1', 'title' => 'Casio MQ-24-7BUL', 'alias' => 'casio-mq-24-7bul', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>','price' => 200, 'old_price' => 200, 'status' => '1','keywords' => 'keywords', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.', 'img' => 'p-1.png', 'hit' => '1',],
            ['id' => '3', 'category_id' => '6','brand_id' => '1', 'title' => 'Casio GA-1000-1AER', 'alias' => 'casio-ga-1000-1aer', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>','price' => 400, 'old_price' => 100, 'status' => '1','keywords' => 'keywords', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.', 'img' => 'p-3.png', 'hit' => '1',],
            ['id' => '4', 'category_id' => '6','brand_id' => '2', 'title' => 'Citizen JP1010-00E', 'alias' => 'citizen-jp1010-00e', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>','price' => 350, 'old_price' => 200, 'status' => '1','keywords' => 'keywords', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.', 'img' => 'p-4.png', 'hit' => '1',],


            ['id' => '5', 'category_id' => '7','brand_id' => '2', 'title' => 'Citizen BJ2111-08E', 'alias' => 'citizen-bj2111-08e', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>','price' => 320, 'old_price' => 220, 'status' => '1','keywords' => 'keywords', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.', 'img' => 'p-5.png', 'hit' => '1',],
            ['id' => '6', 'category_id' => '7','brand_id' => '2', 'title' => 'Citizen AT0696-59E', 'alias' => 'citizen-at0696-59e', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>','price' => 370, 'old_price' => 250, 'status' => '1','keywords' => 'keywords', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.', 'img' => 'p-6.png', 'hit' => '1',],


            ['id' => '7', 'category_id' => '6','brand_id' => '3', 'title' => 'Q&Q Q956J302Y', 'alias' => 'q-and-q-q956j302y', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>','price' => 320, 'old_price' => 220, 'status' => '1','keywords' => 'keywords', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.', 'img' => 'p-7.png', 'hit' => '1',],
            ['id' => '8', 'category_id' => '6','brand_id' => '4', 'title' => 'Royal London 41040-01', 'alias' => 'royal-london-41040-01', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>','price' => 370, 'old_price' => 250, 'status' => '1','keywords' => 'keywords', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.', 'img' => 'p-8.png', 'hit' => '1',],
            ['id' => '9', 'category_id' => '6','brand_id' => '4', 'title' => 'Royal London 20034-02', 'alias' => 'royal-london-20034-02', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>','price' => 320, 'old_price' => 220, 'status' => '1','keywords' => 'keywords', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.', 'img' => 'no_image.jpg', 'hit' => '1',],
            ['id' => '10', 'category_id' => '6','brand_id' => '4', 'title' => 'Royal London 41156-02', 'alias' => 'royal-london-41156-02', 'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>','price' => 370, 'old_price' => 250, 'status' => '1','keywords' => 'keywords', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.', 'img' => 'no_image.jpg', 'hit' => '1',],


        ['id' => '11', 'category_id' => '7','brand_id' => '2', 'title' => 'Часы 1', 'alias' => 'chasy-1', 'content' => NULL,'price' => 370, 'old_price' => 250, 'status' => '1','keywords' => NULL, 'description' => NULL, 'img' => 'no_image.jpg', 'hit' => '0',
        ],
            ['id' => '12', 'category_id' => '7','brand_id' => '2', 'title' => 'Часы 2', 'alias' => 'chasy-2', 'content' => NULL,'price' => 370, 'old_price' => 250, 'status' => '1','keywords' => NULL, 'description' => NULL, 'img' => 'no_image.jpg', 'hit' => '0',
            ],

            ['id' => '13', 'category_id' => '7','brand_id' => '2', 'title' => 'Часы 3', 'alias' => 'chasy-3', 'content' => NULL,'price' => 370, 'old_price' => 250, 'status' => '1','keywords' => NULL, 'description' => NULL, 'img' => 'no_image.jpg', 'hit' => '0',
            ],

            ['id' => '14', 'category_id' => '7','brand_id' => '2', 'title' => 'Часы 4', 'alias' => 'chasy-4', 'content' => NULL,'price' => 370, 'old_price' => 250, 'status' => '1','keywords' => NULL, 'description' => NULL, 'img' => 'no_image.jpg', 'hit' => '0',
            ],

            ['id' => '15', 'category_id' => '7','brand_id' => '2', 'title' => 'Часы 5', 'alias' => 'chasy-5', 'content' => NULL,'price' => 370, 'old_price' => 250, 'status' => '1','keywords' => NULL, 'description' => NULL, 'img' => 'no_image.jpg', 'hit' => '0',
            ],

            ['id' => '16', 'category_id' => '7','brand_id' => '2', 'title' => 'Часы 6', 'alias' => 'chasy-6', 'content' => NULL,'price' => 370, 'old_price' => 250, 'status' => '1','keywords' => NULL, 'description' => NULL, 'img' => 'no_image.jpg', 'hit' => '0',
            ],

            ['id' => '17', 'category_id' => '7','brand_id' => '2', 'title' => 'Часы 7', 'alias' => 'chasy-7', 'content' => NULL,'price' => 370, 'old_price' => 250, 'status' => '1','keywords' => NULL, 'description' => NULL, 'img' => 'no_image.jpg', 'hit' => '0',
            ],

        ];

        DB::table('product')->insert($data);
    }
}
