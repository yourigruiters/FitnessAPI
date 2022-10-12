<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_exercises', function (Blueprint $table) {
            $table->id();
            $table->foreignId("program_id")->constrained()->nullOnDelete();
            $table->foreignId('exercise_id')->constrained()->cascadeOnDelete();
            $table->text('details')->nullable();
            $table->json('data');
            $table->integer('program_day');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_exercises');
    }
};
