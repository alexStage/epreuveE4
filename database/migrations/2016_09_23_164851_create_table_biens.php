<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBiens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo')->default('defaut.jpg');
            $table->string('secteur');
            $table->string('surface');
            $table->string('surfaceTerrain')->default('pas de terrain');
            $table->integer('chambres');
            $table->integer('pieces');
            $table->string('types');
            $table->integer('prix')->unsigned();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('categorie_id')->unsigned()->index();
            $table->integer('classe_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('biens');
    }
}
