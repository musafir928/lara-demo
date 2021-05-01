<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $password = config('PASSWORD','1234567890');
        DB::table('users')->insert([
            'name' => 'admin',
            'email' =>'demo@demo.com',
            'password' => Hash::make($password),
        ]);

        DB::table('categories')->insert([
            'name'=>'Default',
            'is_home'=>true,
            'position'=>0,
            'language'=>'default',
            'category_image'=>'http://pngimg.com/uploads/letter_a/letter_a_PNG31.png',
        ]);
    }
}
