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
            $table->timeTz('date')->nullable(false);
            $table->string('from')->nullable(false);
            $table->string('to')->nullable(false);
            $table->string('body')->nullable(false);
            $table->timeTz('seen')->nullable(true);
            $table->boolean('status')->default(0);
            $table->softDeletes();

            $table->foreign('from')->references('username')->on('players')->onDelete('cascade');
            $table->foreign('to')->references('username')->on('players')->onDelete('cascade');
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

