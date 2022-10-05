<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DenemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->truncate();
       DB::table('users')->insert([
        'name'=>'Kemal',
        'email'=>'info@email.com',
        'password'=>md5('123456'),
        'created'
       ]);

       DB::table('users')->insert([
        'name'=>'Canan',
        'email'=>'canan@email.com',
        'password'=>md5('145856'),
       ]);
    }
}
