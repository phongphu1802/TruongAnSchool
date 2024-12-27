<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\StudentEnum;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_historys', function (Blueprint $table) {
            $table->unsignedBigInteger('uuid')->autoIncrement();
            $table->string('name');
            $table->unsignedBigInteger('student_uuid');
            $table->foreign('student_uuid')->references('uuid')->on('students');
            $table->enum('status', [StudentEnum::UNPAID->value, StudentEnum::PAID->value]);
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