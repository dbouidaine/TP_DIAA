<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 50)->unique();
            $table->date('dateNaissance');
            $table->string('adresse', 50);
            $table->string('email', 50)->unique();
            $table->string('login', 50)->unique();
            $table->string('motPasse', 50);
            $table->string('matricule', 10)->unique();
            $table->string('groupe', 10);
            $table->integer('nbAbsences');
            $table->string('moyennes', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('etudiants');
    }
}
