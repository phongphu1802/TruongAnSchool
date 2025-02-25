<?php

use App\Enums\DayEnum;
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
        Schema::create('course_rooms', function (Blueprint $table) {
            $table->unsignedBigInteger('uuid')->autoIncrement();
            $table->unsignedBigInteger('course_uuid');
            $table->foreign('course_uuid')->references('uuid')->on('courses');
            $table->unsignedBigInteger('room_uuid');
            $table->foreign('room_uuid')->references('uuid')->on('rooms');
            $table->string('start_time');
            $table->string('end_time');
            $table->enum("day", [
                DayEnum::MONDAY->value,
                DayEnum::TUESDAY->value,
                DayEnum::WEDNESDAY->value,
                DayEnum::THURSDAY->value,
                DayEnum::FRIDAY->value,
                DayEnum::SATURDAY->value,
                DayEnum::SUNDAY->value
            ]);
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
        Schema::dropIfExists('course_rooms');
    }
};