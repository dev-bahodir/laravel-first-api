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
        Schema::create('sponsor', function (Blueprint $table) {
            $table->id();
            $table->timestamp('updated_at')->nullable();
            $table->string('username');
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('bio', 255);
            $table->string('location');
            $table->boolean('accepted_tos');
            $table->boolean('for_hire');
            $table->unsignedBigInteger('sponsorship_id');

            $table->foreign('sponsorship_id')->references('id')->on('sponsorship')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sponsor', function (Blueprint $table) {
            $table->dropForeign(['sponsorship_id']);
        });
        Schema::dropIfExists('sponsor');
    }
};
