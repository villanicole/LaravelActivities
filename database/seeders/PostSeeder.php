<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\Str;


class PostSeeder extends Seeder
{
 


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Post')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
        //
    }
}
