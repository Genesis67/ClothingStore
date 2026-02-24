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
    Schema::create('design_images', function (Blueprint $table) { // Changed name
        $table->id();
        $table->foreignId('design_id')->constrained()->onDelete('cascade');
        $table->string('img_path');
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('design_images'); // Must match up()
}
    
};