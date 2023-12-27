<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestsTable extends Migration
{
    public function up()
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->id();
            $table->binary('image')->nullable();
            $table->text('text');
            $table->dateTime('draw_time');
            $table->unsignedBigInteger('public_id');
            $table->timestamps();

            $table->foreign('public_id')->references('id')->on('publics');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contests');
    }
}
