<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'lettre'=>'A',
            'description'=>'-50 kWhEP /m²/an'
        ]);

        DB::table('classes')->insert([
            'lettre'=>'B',
            'description'=>'51 a 90 kWhEP /m²/an'
        ]);

        DB::table('classes')->insert([
            'lettre'=>'C',
            'description'=>'91 a 150 kWhEP /m²/an'
        ]);

        DB::table('classes')->insert([
            'lettre'=>'D',
            'description'=>'151 a 230 kWhEP /m²/an'
        ]);

        DB::table('classes')->insert([
            'lettre'=>'E',
            'description'=>'231 a 330 kWhEP /m²/an'
        ]);

        DB::table('classes')->insert([
            'lettre'=>'F',
            'description'=>'331 a 450 kWhEP /m²/an'
        ]);

        DB::table('classes')->insert([
            'lettre'=>'G',
            'description'=>'+450 kWhEP /m²/an'
        ]);
    }
}
