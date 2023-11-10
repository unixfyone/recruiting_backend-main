<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpiriencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_id')->nullable(); //Obligatorio
            $table->string('position', 100)->nullable();
            $table->string('company_name', 200)->nullable();
            $table->text('functions')->nullable();
            $table->boolean('currently')->nullable();
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable(null);
            $table->timestamps();
            $table->foreign('profile_id')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expiriences');
    }
}
