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
        Schema::create('quiz_urinish_javobs', function (Blueprint $table) {
            $table->id();
            $table->string('urinish_id');
            $table->string('savol_id');
            $table->string('javob_id');
            $table->string('result')->default('0');
            $table->string('is_deleted')->default(false);
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
        Schema::dropIfExists('quiz_urinish_javobs');
    }
};
