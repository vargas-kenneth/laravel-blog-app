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
        Schema::create('tags', function (Blueprint $table) {
            $table->id('tag_id');
            $table->foreignId('post_id')->constrained();
            $table->string('tag_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.P
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
