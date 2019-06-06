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
                    'id' => 1,
                    'name' => 'admin',
                    'email' => 'a@a.ru',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 2,
                    'name' => 'user',
                    'email' => 'u@u.ru',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 4,
                    'name' => 'sasha',
                    'email' => 'admin@admin.ru9',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 7,
                    'name' => 'admin',
                    'email' => '1984aab@gmail.com',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 8,
                    'name' => 'user',
                    'email' => '1984aab@gmail.comq',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 9,
                    'name' => 'sasha2',
                    'email' => '1984aab@gmail.comdd',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 10,
                    'name' => 'user1',
                    'email' => '1984aab@gmail.com22',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 11,
                    'name' => 'user2',
                    'email' => '1984aab@gmail.com222',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 12,
                    'name' => 'user3',
                    'email' => '1984aab@gmail.com11111',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 13,
                    'name' => 'user4',
                    'email' => '1984aab@gmail.com133333',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 14,
                    'name' => 'user5',
                    'email' => '1984aab@gmail.com1222222',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 15,
                    'name' => 'user6',
                    'email' => '1984aab@gmail.com1ddd',
                    'password' => bcrypt(12345678),
                ],
            ];
            DB::table('users')->insert($data);
        }

    }
