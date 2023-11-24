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
        Schema::create('urls', function (Blueprint $table) {
            $table->id();
            $table->string('raw');
            $table->string('full');
            $table->string('regular');
            $table->string('small');
            $table->unsignedBigInteger('splash_id');
            $table->foreign('splash_id')->references('id')->on('splash')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('urls', function (Blueprint $table) {
            $table->dropForeign(['splash_id']);
        });
        Schema::dropIfExists('urls');
    }
};
