<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInboxTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inbox', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->timeTz('time');
            $table->string('from')->nullable(false);
            $table->string('to')->nullable(false);
            $table->string('subject');
            $table->text('body');
            $table->timeTz('seen');
            $table->softDeletes();

            $table->foreign('from')->references('username')->on('players');
            $table->foreign('to')->references('username')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inbox');
    }
}
