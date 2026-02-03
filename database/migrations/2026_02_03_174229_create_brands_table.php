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
        Schema::create('brands', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->string('en_brand_name', 255); // VARCHAR(255) NOT NULL
            $table->string('slug', 255)->unique(); // VARCHAR(255) NOT NULL UNIQUE
            $table->string('image', 255)->nullable(); // image VARCHAR(255)
            $table->tinyInteger('status')->default(1); // TINYINT(1) DEFAULT 1
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
