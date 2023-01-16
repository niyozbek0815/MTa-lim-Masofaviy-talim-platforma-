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
        Schema::create('baxolash_tizimlaris', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('joriy_ball')->nullable();
            $table->string('yakuniy_ball')->nullable();
            $table->string('max_ball')->nullable();
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
        Schema::dropIfExists('baxolash_tizimlaris');
    }
};
