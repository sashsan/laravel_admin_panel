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
                    'id' => 3,
                    'name' => 'sasha',
                    'email' => 'admin@admin.ru8',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 4,
                    'name' => 'masha',
                    'email' => 'admin@admin.ru9',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 5,
                    'name' => 'pasha',
                    'email' => 'admin@admin.ru10',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 6,
                    'name' => 'misha',
                    'email' => 'admin@admin.ru11',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 7,
                    'name' => 'dasha',
                    'email' => 'admin@admin.ru12',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 8,
                    'name' => 'olia',
                    'email' => 'admin@admin.ru13',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 9,
                    'name' => 'kolia',
                    'email' => 'admin@admin.ru14',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 10,
                    'name' => 'oleg',
                    'email' => 'admin@admin.ru15',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 11,
                    'name' => 'ira',
                    'email' => 'admin@admin.ru16',
                    'password' => bcrypt(12345678),
                ],
                [
                    'id' => 12,
                    'name' => 'nastia',
                    'email' => 'admin@admin.ru17',
                    'password' => bcrypt(12345678),
                ],
            ];
            DB::table('users')->insert($data);
        }

    }
