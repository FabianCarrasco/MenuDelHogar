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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_subtitle');
            $table->string('keywords');
            $table->integer('pantry_min');
            $table->integer('pantry_max');
            $table->string('pantry_metric');
            $table->string('pantry_tips');
            $table->integer('pantry_after_opening_min');
            $table->integer('pantry_after_opening_max');
            $table->string('pantry_after_opening_metric');
            $table->integer('refrigerate_min');
            $table->integer('refrigerate_max');
            $table->string('refrigerate_metric');
            $table->string('refrigerate_tips');
            $table->integer('refrigerate_after_opening_min');
            $table->integer('refrigerate_after_opening_max');
            $table->string('refrigerate_after_opening_metric');
            $table->integer('refrigerate_after_thawing_min');
            $table->integer('refrigerate_after_thawing_max');
            $table->string('refrigerate_after_thawing_metric');
            $table->integer('freeze_min');
            $table->integer('freeze_max');
            $table->string('freeze_metric');
            $table->string('freeze_tips');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
