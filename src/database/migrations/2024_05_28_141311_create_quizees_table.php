<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
        Schema::dropIfExists('quizees');
        Schema::dropIfExists('quizeees');
        Schema::dropIfExists('quiz_questions');
        Schema::dropIfExists('questions');
        Schema::dropIfExists('choices');
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quizeees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('カテゴライズしたクイズ名 ex.) ITクイズ');
            $table->timestamps();
        });

        Schema::create('quiz_questions', function (Blueprint $table) {
            $table->id();
            $table->string('image')->comment('設問画像 ex.) /image/sample.jpg');
            $table->string('text')->comment('設問 ex.) 日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？');
            $table->string('supplement')->nullable()->comment('設問補足');
            $table->unsignedBigInteger('quiz_id');
            $table->timestamps();

            $table->foreign('quiz_id')->references('id')->on('quizeees');
        });

        Schema::create('choices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id');
            $table->string('text')->comment('選択肢 ex.) 約79万人');
            $table->boolean('is_correct');
            $table->timestamps();

            $table->foreign('question_id')->references('id')->on('quiz_questions');
        });
    }

};

