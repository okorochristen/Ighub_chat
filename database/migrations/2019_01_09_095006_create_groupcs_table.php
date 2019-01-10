<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('duration');
             $table->string('manager');
             $table->string('participant');
            $table->integer('user_id')->unsigned();




            $table->foreign('user_id')->references('id')
            ->on('users')
            ->onUpate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('groupcs');
    }
}
