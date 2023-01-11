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
        Schema::create('group_ens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('caf_id');
            $table->string('lang_id');
            $table->string('level_id')->default('1');
            $table->string('name');
            $table->boolean('is_active')->nullable()->default(true);
            $table->boolean('is_deleted')->nullable()->default(false);
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
        Schema::dropIfExists('group_ens');
    }
};
