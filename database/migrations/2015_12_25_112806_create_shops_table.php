<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('The id of the owner');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('stateOrRegion');
            $table->string('postalCode');
            $table->string('phone_number');
            $table->string('email');
            $table->string('site');
            $table->string('appointment')->comment('Obligatoire ,Recommandée ,Sans rendez-vous');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shops');
    }
}
