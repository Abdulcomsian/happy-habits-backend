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
        Schema::table('avatars', function (Blueprint $table) {
            $table->after("beards_id", function($table){
                $table->unsignedBigInteger("accessories_id")->nullable();
                $table->unsignedBigInteger("faceshap_id")->nullable();
                $table->unsignedBigInteger("cloth_id")->nullable();
                $table->unsignedBigInteger("shoe_id")->nullable();
                $table->unsignedBigInteger("hat_id")->nullable();
                $table->foreign("accessories_id")->on("accessories")->references("id");
                $table->foreign("faceshap_id")->on("faceshapes")->references("id");
                $table->foreign("cloth_id")->on("clothes")->references("id");
                $table->foreign("shoe_id")->on("shoes")->references("id");
                $table->foreign("hat_id")->on("hats")->references("id");
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('avatar', function (Blueprint $table) {
            //
        });
    }
};
