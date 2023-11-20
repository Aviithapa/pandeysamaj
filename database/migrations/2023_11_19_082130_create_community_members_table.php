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
        Schema::create('community_members', function (Blueprint $table) {
            $table->id();
            $table->string('citizenship')->unique();
            $table->string('name');
            $table->string('occupation');
            $table->string('email')->nullable()->unique();
            $table->string('phone_number')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('mother_id')->nullable();
            $table->enum('marital_status', ['single', 'married'])->default('single');
            $table->unsignedBigInteger('spouse_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('community_members')->onDelete('cascade');
            $table->foreign('mother_id')->references('id')->on('community_members')->onDelete('cascade');
            $table->foreign('spouse_id')->references('id')->on('community_members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('community_members');
    }
};
