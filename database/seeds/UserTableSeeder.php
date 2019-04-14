<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'lucas', 'last_name' => 'silvestre',
            'state' => 'SP', 'city' => 'Sao Paulo',
            'email' => 'teste0012@terecoteco.com',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            'password' => Hash::make('123456')
            ]
        );
    }
}
