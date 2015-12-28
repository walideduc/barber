<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('Customer');
            $table->tinyInteger('public')->default('0')->comment(' = 1 , for all public actors ');
            $table->timestamps();
        });
        \Illuminate\Support\Facades\DB::table('roles')->insert([
            ['name' => 'Customer' , 'public' => 1],
            ['name' => 'Manger' , 'public' => 1],
            ['name' => 'Barber' , 'public' => 1],
            ['name' => 'Admin' , 'public' => 0],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('roles');
    }
}
