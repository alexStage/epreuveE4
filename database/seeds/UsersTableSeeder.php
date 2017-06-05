<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'test',
            'prenom'=>'Jack',
            'email'=>'test@test.fr',
            'password'=>bcrypt('root'),
            'passwordmd5'=>md5('root'),
            'vendeur'=>1
        ]);

        DB::table('users')->insert([
            'name'=>'dhaene',
            'prenom'=>'alexandre',
            'email'=>'dhaene@alexandre.fr',
            'password'=>bcrypt('root'),
            'passwordmd5'=>md5('root'),
            'admin'=>1
        ]);
    }
}
