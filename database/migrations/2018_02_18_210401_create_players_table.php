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
            $table->string('username',20);
            $table->string('email',255)->default('');
            $table->string('password',255)->default('');
            $table->string('remember_token',100)->default('');
            $table->string('name',35)->default('');
            $table->string('last_name',35)->default('');
            $table->date('birth_date')->default('2018-03-03');
            $table->char('gender',1)->default('');
            $table->char('position',3)->default('');
            $table->char('second_position',3)->default('');
            $table->char('third_position',3)->default('');
            $table->tinyInteger('overall')->default(60)->unsigned();
            $table->tinyInteger('pace')->default(60)->unsigned();
            $table->tinyInteger('passing')->default(60)->unsigned();
            $table->tinyInteger('physical')->default(60)->unsigned();
            $table->tinyInteger('shooting')->default(60)->unsigned();
            $table->tinyInteger('dribbling')->default(60)->unsigned();
            $table->tinyInteger('defense')->default(60)->unsigned();
            $table->float('height')->default(1.70)->unsigned();
            $table->float('weight')->default(80)->unsigned();
            $table->char('nationality',2)->default('');
            $table->char('language',2)->default('');
            $table->char('strong_foot',1)->default('');
            $table->string('profile_picture',255)->nullable();
            $table->date('created_at');
            $table->date('updated_at');
            $table->softdeletes();

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
