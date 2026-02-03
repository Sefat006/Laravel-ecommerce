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
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->unsignedBigInteger('user_id');    // user_id INT NOT NULL
            $table->unsignedBigInteger('product_id'); // product_id INT NOT NULL
            $table->tinyInteger('rating')->unsigned(); // rating TINYINT(1) NOT NULL
            $table->text('review')->nullable();       // review TEXT
            $table->timestamps();                     // created_at & updated_at

            // Optional: add foreign keys
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_reviews');
    }
};
