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
        Schema::create('students', function (Blueprint $table) {
            $table->unsignedBigInteger('uuid')->autoIncrement();
            $table->string('name');
            $table->unsignedBigInteger('class_uuid');
            $table->foreign('class_uuid')->references('uuid')->on('class');
            $table->enum('status', [StudentEnum::STOP->value, StudentEnum::CONTINUE ->value]);
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