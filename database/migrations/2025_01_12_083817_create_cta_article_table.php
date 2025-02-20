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
        // Create CTA_ARTICLE table
        Schema::create('cta_article', function (Blueprint $table) {
            $table->id('id_at');
            $table->string('at_image');
            $table->string('at_title');
            $table->text('at_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cta_article');
    }
};
