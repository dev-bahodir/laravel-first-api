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
        Schema::create('sponsorship', function (Blueprint $table) {
            $table->id();
            $table->string('tagline');
            $table->string('tagline_url');
            $table->unsignedBigInteger('splash_id');

            $table->foreign('splash_id')->references('id')->on('splash')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sponsorship', function (Blueprint $table) {
            $table->dropForeign(['splash_id']);
        });
        Schema::dropIfExists('sponsorship');
    }
};
