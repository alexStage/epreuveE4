<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BiensTableSeeder::class);
        $this->call(InformationsSeederTable::class);
    }
}
