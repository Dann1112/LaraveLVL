<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50)->nullable(false);
            $table->string('status',1)->nullable(false)->default(0);
            $table->date('start_date')->nullable(false);
            $table->date('end_date')->nullable(true);
            $table->unsignedInteger('prize')->default(0)->nullable(true);
            $table->unsignedInteger('champion')->nullable(true);

            $table->softDeletes();
            $table->timestamps();
            $table->foreign('champion')->references('id')->on('teams');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competitions');
    }
}
