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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('en_title')->nullable();
            $table->string('bn_title')->nullable();
            $table->string('slug')->nullable();
            $table->text('en_short_description')->nullable();
            $table->text('bn_short_description')->nullable();
            $table->string('image')->default('images/default.jpg');
            $table->string('en_btn_name')->nullable();
            $table->string('bn_btn_name')->nullable();
            $table->string('url')->nullable()->default('#');
            $table->integer('order')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
