<?php

    use Illuminate\Database\Seeder;

    class UserTableSeeder extends Seeder
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
                    'name' => 'Автор не известен',
                    'email' => 's@s.ru',
                    'password' => bcrypt(Str::random(16)),
                ],
                [
                    'name' => 'Автор',
                    'email' => 's@sw.rus',
                    'password' => bcrypt(123123),
                ]
            ];
            DB::table('users')->insert($data);

    }
    }
