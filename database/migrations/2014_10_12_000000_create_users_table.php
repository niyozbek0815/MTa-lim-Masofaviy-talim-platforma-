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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->nullable();
            $table->foreignId('kafedra_id')->nullable();
            $table->foreignId('roll_id');
            $table->string('name')->nullable();
            $table->string('login');
            $table->string('l_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('parol');
            $table->string('image')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
            $table->boolean('is_deleted')->nullable()->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
