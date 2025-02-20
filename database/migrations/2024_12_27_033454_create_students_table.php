<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\StudentEnum;
use App\Enums\SexEnum;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->unsignedBigInteger('uuid')->autoIncrement();
            $table->string('name');
            $table->unsignedBigInteger('course_uuid');
            $table->foreign('course_uuid')->references('uuid')->on('courses');
            $table->enum('status', [StudentEnum::STOP->value, StudentEnum::CONTINUE ->value]);
            $table->enum('sex', [SexEnum::WOMEN->value, SexEnum::MEN->value, SexEnum::OTHER->value]);
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
        Schema::dropIfExists('students');
    }
};