<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->string('name',50);
            $table->char('abbreviation',3);
            $table->string('website',255)->default('');
            $table->string('manager',50)->nullable(false);
            $table->string('comanager',50)->nullable();;
            $table->string('streaming_channel',255)->default('');
            $table->char('primary_color',7);
            $table->char('secondary_color',7);
            $table->char('country',2);
            $table->string('logo');
            $table->date('created_at');
            $table->date('updated_at');
            $table->primary('name');
            $table->unique('manager');
            $table->unique('comanager');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
