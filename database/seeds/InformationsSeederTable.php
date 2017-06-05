<?php

use Illuminate\Database\Seeder;

class InformationsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informations')->insert([
            'adresse'=>'1 place de la République',
            'telephone'=>'0320121314',
            'fax'=>'Adresse du fax',
            'denomination'=>'Denomination',
            'cedex'=>'59000',
            'email'=>'idologis@idologis.fr',
            'RCS'=>'RCS'
        ]);
    }
}
