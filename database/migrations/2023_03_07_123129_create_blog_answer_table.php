<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_answer', function (Blueprint $table) {
            $table->id();
            $table->user_id();
            $table->post_id();
            $table->foreign('user_id')-> references('id')->on('user');
            $table->foreign('post_id')-> references('id')->on('post');
            $table->varchar('answer',300);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_answer');
    }
};
