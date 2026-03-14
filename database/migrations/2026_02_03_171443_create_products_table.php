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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->unsignedBigInteger('category_id'); // category_id INT NOT NULL
            $table->unsignedBigInteger('brand_id');    // brand_id INT NOT NULL
            $table->string('en_name');                 // en_name VARCHAR(255) NOT NULL
            $table->string('slug')->unique();          // slug VARCHAR(255) NOT NULL UNIQUE
            $table->text('en_desc')->nullable();      // en_desc TEXT
            $table->text('en_shipping')->nullable();  // en_shipping TEXT
            $table->text('en_additionalinfo')->nullable(); // en_additionalinfo TEXT
            $table->boolean('is_featured')->default(false);    // is_featured TINYINT(1) DEFAULT 0
            $table->boolean('is_best_selling')->default(false); // is_best_selling TINYINT(1) DEFAULT 0
            $table->boolean('is_new_arrival')->default(false);  // is_new_arrival TINYINT(1) DEFAULT 0
            $table->boolean('is_onsale')->default(false);       // is_onsale TINYINT(1) DEFAULT 0
            $table->decimal('price', 10, 2);                     // price DECIMAL(10, 2) NOT NULL
            $table->decimal('discount', 5, 2)->default(0);       // discount DECIMAL(5, 2) DEFAULT 0
            $table->decimal('discounted_price', 10, 2)->default(0); // discounted_price DECIMAL(10, 2) DEFAULT 0
            $table->integer('quantity');                         // quantity INT NOT NULL
            $table->boolean('status')->default(true);           // status TINYINT(1) DEFAULT 1
            $table->timestamps();                                // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
