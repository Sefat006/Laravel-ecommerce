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
        Schema::create('coupons', function (Blueprint $table) {
             $table->id(); // BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->string('code')->unique(); // VARCHAR(255) UNIQUE NOT NULL
            $table->enum('type', ['fixed', 'percentage']); // ENUM('fixed', 'percentage') NOT NULL
            $table->decimal('discount_value', 10, 2); // DECIMAL(10,2) NOT NULL
            $table->decimal('minimum_order_amount', 10, 2)->nullable(); // DECIMAL(10,2) DEFAULT NULL
            $table->date('expiry_date')->nullable(); // DATE DEFAULT NULL
            $table->tinyInteger('status')->default(1); // TINYINT(1) NOT NULL DEFAULT 1
            $table->timestamps(); // created_at and updated_at with CURRENT_TIMESTAMP behavior
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
