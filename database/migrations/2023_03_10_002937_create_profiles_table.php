<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('first_name', 50)->nullable(); //Campo obligatorio
            $table->string('last_name', 50)->nullable();
            $table->string('nacionality', 50)->nullable();
            $table->enum('type_dni', ['Cédula', 'Pasaporte', 'Otro']); //Campo enum
            $table->string('dni', 50)->nullable();
            $table->date('birthdate')->nullable(true);
            $table->enum('gender', ['Masculino', 'Femenino']);
            $table->string('phone', 20)->nullable();
            $table->string('phone2', 20)->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('postal_code', 50)->nullable();
            $table->text('description', 50)->nullable();
            $table->text('languages')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
