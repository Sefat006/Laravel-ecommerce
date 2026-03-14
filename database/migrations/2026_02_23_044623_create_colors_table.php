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
        Schema::create('colors', function (Blueprint $table) {
            $table->id(); // এটি অটোমেটিক INT AUTO_INCREMENT PRIMARY KEY তৈরি করবে
            $table->string('color', 50); // VARCHAR(50) NOT NULL
            $table->decimal('price', 10, 2); // DECIMAL(10, 2) NOT NULL
            $table->integer('count'); // INT NOT NULL
            $table->timestamps(); // এটি created_at এবং updated_at কলাম যোগ করবে
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colors');
    }
};
