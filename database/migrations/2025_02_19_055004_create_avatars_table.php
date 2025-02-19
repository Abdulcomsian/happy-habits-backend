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
        Schema::create('avatars', function (Blueprint $table) {
            $table->id();
            $table->string("is_male")->default("true");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("color_id")->nullable();
            $table->unsignedBigInteger("hair_id")->nullable();
            $table->unsignedBigInteger("shirt_id")->nullable();
            $table->unsignedBigInteger("glasses_id")->nullable();
            $table->unsignedBigInteger("eyes_id")->nullable();
            $table->unsignedBigInteger("eyebrows_id")->nullable();
            $table->unsignedBigInteger("noses_id")->nullable();
            $table->unsignedBigInteger("lips_id")->nullable();
            $table->unsignedBigInteger("beards_id")->nullable();
            $table->foreign("user_id")->on("users")->references("id");
            $table->foreign("color_id")->on("face_colors")->references("id");
            $table->foreign("hair_id")->on("hairs")->references("id");
            $table->foreign("shirt_id")->on("shirts")->references("id");
            $table->foreign("glasses_id")->on("glasses")->references("id");
            $table->foreign("eyes_id")->on("eyes")->references("id");
            $table->foreign("eyebrows_id")->on("eyebrows")->references("id");
            $table->foreign("noses_id")->on("noses")->references("id");
            $table->foreign("lips_id")->on("lips")->references("id");
            $table->foreign("beards_id")->on("beards")->references("id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avatars');
    }
};
