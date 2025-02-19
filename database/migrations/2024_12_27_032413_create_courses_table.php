<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->unsignedBigInteger('uuid')->autoIncrement();
            $table->unsignedBigInteger('room_uuid');
            $table->foreign('room_uuid')->references('uuid')->on('rooms');
            $table->unsignedBigInteger('teacher_uuid');
            $table->foreign('teacher_uuid')->references('uuid')->on('teachers');
            $table->string('name');
            $table->string('start_time');
            $table->string('end_time');
            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
};