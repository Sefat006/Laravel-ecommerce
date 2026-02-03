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
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // INT AUTO_INCREMENT PRIMARY KEY
            $table->string('en_category_name', 255); // VARCHAR(255) NOT NULL
            $table->string('slug', 255)->unique(); // UNIQUE slug
            $table->string('icon', 255)->nullable(); // icon VARCHAR(255)
            $table->text('desc')->nullable(); // TEXT (desc is reserved in SQL, but OK in Laravel)
            $table->tinyInteger('status')->default(1); // TINYINT(1) DEFAULT 1
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
