<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        

        Schema::create('players', function (Blueprint $table) {
            $table->string('username',20)->nullable($value = false);
            $table->string('email',255)->nullable($value = false);
            $table->string('password',255)->nullable($value = false);
            $table->string('remember_token',100)->nullable($value = true);
            $table->string('name',35)->nullable($value = false);
            $table->string('last_name',35)->nullable($value = false);
            $table->date('birth_date')->nullable($value = false);
            $table->char('gender',1)->nullable($value = false);
            $table->char('position',3)->nullable($value = false);
            $table->char('second_position',3)->default('');
            $table->char('third_position',3)->default('');
            $table->tinyInteger('overall')->default(60)->nullable($value = false);
            $table->tinyInteger('pace')->default(60)->nullable($value = false);
            $table->tinyInteger('passing')->default(60)->nullable($value = false);
            $table->tinyInteger('physical')->default(60)->nullable($value = false);
            $table->tinyInteger('shooting')->default(60)->nullable($value = false);
            $table->tinyInteger('dribbling')->default(60)->nullable($value = false);
            $table->tinyInteger('defense')->default(60)->nullable($value = false);
            $table->float('height')->default(1.70)->nullable($value = false);
            $table->char('nationality',3)->nullable($value = false);
            $table->char('language',2)->nullable($value = false);
            $table->char('strong_foot',1)->nullable($value = false);

            $table->primary('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
