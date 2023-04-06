<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('diseases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('diseases_categories_id')->nullable()->constrained('diseases_categories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('diseases_sub_categories_id')->nullable()->constrained('diseases_sub_categories');
            $table->string('en_short_name')->nullable();
            $table->string('bn_short_name')->nullable();
            $table->string('en_full_name')->nullable();
            $table->string('bn_full_name')->nullable();
            $table->string('slug')->nullable();
            $table->longText('en_symptoms')->nullable();
            $table->longText('bn_symptoms')->nullable();
            $table->string('image')->default('images/default.jpg');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('diseases');
    }
};
