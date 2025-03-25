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
        Schema::create('vote', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id')->nullable();
            $table->unsignedBigInteger('answer_id')->nullable();
            $table->unsignedBigInteger('user_id'); 
            $table->tinyInteger('value');
            $table->timestamps();
            $table->unique(['question_id','user_id']);
            $table->unique(['answer_id','user_id']);
            $table->foreign('question_id')->references('id')->on('question')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('answer_id')->references('id')->on('answer')->onDelete('cascade');

        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vote', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['question_id']);
            $table->dropForeign(['answer_id']);

        });
        Schema::dropIfExists('vote');
    }
};
