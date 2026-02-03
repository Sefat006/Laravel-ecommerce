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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->string('name'); // name VARCHAR(255) NOT NULL
            $table->string('image')->nullable(); // image VARCHAR(255), nullable
            $table->text('review'); // review TEXT NOT NULL
            $table->tinyInteger('status')->default(1); // status TINYINT(1) DEFAULT 1
            $table->timestamps(); // created_at and updated_at TIMESTAMP with auto updates
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
