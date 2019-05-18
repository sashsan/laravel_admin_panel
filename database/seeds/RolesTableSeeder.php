<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
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
                'name' => 'disabled',
            ],
            [
                'name' => 'user',
            ],
            [
                'name' => 'admin',
            ],
        ];
        DB::table('roles')->insert($data);
    }
}
