<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'=>'admin',
        	'password'=>bcrypt('admin123'),
        	'email'=>'admin@topter.com',
            'type'=>'admin'
        ]);
        User::create([
            'name'=>'Anonymous Me',
            'password'=>bcrypt('anon123'),
            'email'=>'anonymousme@gmail.com',
            'type'=>'member'
        ]);
    }
}
