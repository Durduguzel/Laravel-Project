<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DenemeSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    DB::table('users')->truncate();
    //    DB::table('users')->insert([
    //     'name'=>'Kemal',
    //     'email'=>'info@email.com',
    //     'password'=>md5('123456'),
    //     'created'
    //    ]);

    //    DB::table('users')->insert([
    //     'name'=>'Canan',
    //     'email'=>'canan@email.com',
    //     'password'=>md5('145856'),
    //    ]);
        User::query()->truncate();
        $data = [
            ['name'=>'kemal',
            'email'=>'info@kemal',
            'password'=>bcrypt('2356')],
            ['name'=>'kutlu',
            'email'=>'info@kuzen',
            'password'=>bcrypt('1564')]
        ];
        User::query()->insert($data);
    }
}
