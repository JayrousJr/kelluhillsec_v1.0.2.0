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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('year')->nullable();
            $table->string('examName')->nullable();
            $table->string('divOne')->nullable();
            $table->string('divTwo')->nullable();
            $table->string('divThree')->nullable();
            $table->string('divFour')->nullable();
            $table->string('divZero')->nullable();
            $table->string('formId')->nullable();
            $table->string('pdf')->nullable();
            $table->text('link')->nullable();
            $table->unique(['year', 'examName', 'formId']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
