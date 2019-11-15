<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administratifs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 50);
            $table->date('dateNaissance', 15);
            $table->string('adresse', 50);
            $table->string('email', 50);
            $table->string('login', 50);
            $table->string('motPasse', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('administratifs');
    }
}
