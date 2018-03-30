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
            $table->string('manager',50)->nullable(false);
            $table->string('comanager',50)->nullable();;
            $table->string('streaming_channel',255)->nullable(true);
            $table->string('primary_color')->nullable(true);
            $table->string('secondary_color')->nullable(true);
            $table->char('country',2)->nullable(true);
            $table->string('logo')->nullable(true);
            $table->date('created_at')->nullable(true);
            $table->date('updated_at')->nullable(true);
            $table->string('twitter')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('twitch')->nullable(true);
            $table->string('youtube')->nullable(true);
            $table->string('instagram')->nullable(true);
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
