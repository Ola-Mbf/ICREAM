<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_systems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('adress');
            $table->integer('phone_number');
            $table->text('opening_days');
            $table->text('opening_time');
            $table->text('closed_days');
            $table->text('twitter');
            $table->text('facebook');
            $table->text('linkedin');
            $table->text('instgram');
            $table->text('youtube');
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
        Schema::dropIfExists('info_systems');
    }
}
