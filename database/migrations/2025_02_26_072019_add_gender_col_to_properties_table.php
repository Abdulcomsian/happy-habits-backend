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
        Schema::table('face_colors', function (Blueprint $table) {
            $table->after("code", function($table){
                $table->string("element_id")->nullable();
                $table->enum("gender", ['male', 'female'])->default("male");
            });
        });

        Schema::table('hairs', function (Blueprint $table) {
            $table->after("image", function($table){
                $table->string("element_id")->nullable();
                $table->enum("gender", ['male', 'female'])->default("male");
            });
        });

        Schema::table('shirts', function (Blueprint $table) {
            $table->after("image", function($table){
                $table->string("element_id")->nullable();
                $table->enum("gender", ['male', 'female'])->default("male");
            });
        });

        Schema::table('glasses', function (Blueprint $table) {
            $table->after("image", function($table){
                $table->string("element_id")->nullable();
                $table->enum("gender", ['male', 'female'])->default("male");
            });
        });

        Schema::table('eyes', function (Blueprint $table) {
            $table->after("image", function($table){
                $table->string("element_id")->nullable();
                $table->enum("gender", ['male', 'female'])->default("male");
            });
        });

        Schema::table('eyebrows', function (Blueprint $table) {
            $table->after("image", function($table){
                $table->string("element_id")->nullable();
                $table->enum("gender", ['male', 'female'])->default("male");
            });
        });

        Schema::table('noses', function (Blueprint $table) {
            $table->after("image", function($table){
                $table->string("element_id")->nullable();
                $table->enum("gender", ['male', 'female'])->default("male");
            }); 
        });

        Schema::table('lips', function (Blueprint $table) {
            $table->after("image", function($table){
                $table->string("element_id")->nullable();
                $table->enum("gender", ['male', 'female'])->default("male");
            }); 
        });

        Schema::table('beards', function (Blueprint $table) {
            $table->after("image", function($table){
                $table->string("element_id")->nullable();
                $table->enum("gender", ['male', 'female'])->default("male");
            }); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
