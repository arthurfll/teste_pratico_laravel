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
       Schema::create('revision_models', function (Blueprint $table) {
           $table->id();
           $table->unsignedBigInteger('car_id');
           $table->foreign('car_id')->references('id')->on('car_models')->onDelete('cascade');
           $table->timestamps();
       });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
       Schema::dropIfExists('revision_models');
   }
};
