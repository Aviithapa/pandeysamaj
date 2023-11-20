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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->default('');
            $table->text('content')->nullable();
            $table->string('excerpt')->nullable()->default('');
            $table->string('image')->nullable()->default('');
            $table->string('logo_image')->nullable()->default('');
            $table->string('meta_link')->nullable()->default('');
            $table->string('meta_description')->nullable()->default('');
            $table->enum('type', ['homepage_banner', 'testimonial', 'content', 'news',  'services', 'team', 'pages', 'about', 'faq'])->nullable();
            $table->string('slug')->unique();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
