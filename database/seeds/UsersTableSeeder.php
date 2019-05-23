<?php

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;

    class UsersTableSeeder extends Seeder
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
                    'name' => 'admin',
                    'email' => 'a@a.ru',
                    'password' => bcrypt(12345678),
                ],
                [
                    'name' => 'user',
                    'email' => 'u@u.ru',
                    'password' => bcrypt(12345678),
                ]
            ];
            DB::table('users')->insert($data);


        }
    }
