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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->morphs("activity_relation");
            $table->unsignedBigInteger("user_id");
            $table->integer("xp_points")->nullable();
            $table->integer("coins")->nullable();
            $table->integer("time")->nullable();
            $table->string("type")->nullable();
            $table->foreign("user_id")->on("users")->references("id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');   
    }
};
      