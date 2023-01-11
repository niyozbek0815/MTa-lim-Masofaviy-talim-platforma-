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
        Schema::create('lesson_topshiriqs', function (Blueprint $table) {
            $table->id();
            $table->string('lesson_id');
            $table->string('ball_type');
            $table->string('type_id');
            $table->string('number');
            $table->string('text');
            $table->string('content');
            $table->string('alert');
            $table->string('max_ball');
            $table->string('started_at');
            $table->string('stopped_at');
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
        Schema::dropIfExists('lesson_topshiriqs');
    }
};
