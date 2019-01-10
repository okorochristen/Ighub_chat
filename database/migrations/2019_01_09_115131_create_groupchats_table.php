<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupchats', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->integer('group_id')->unsigned();




            $table->foreign('group_id')->references('id')
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
        Schema::dropIfExists('groupchats');
    }
}
