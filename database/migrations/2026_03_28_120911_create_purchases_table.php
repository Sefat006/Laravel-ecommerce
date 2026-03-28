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
        Schema::create('purchases', function (Blueprint $table) {
             $table->id(); // BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY

            $table->string('invoice_number', 100)->unique();

            $table->unsignedBigInteger('supplier_id')->nullable();

            $table->decimal('total_amount', 10, 2)->default(0);

            $table->date('purchase_date')->nullable();

            $table->text('notes')->nullable();

            $table->timestamps();

            // 🔥 Foreign key (recommended)
            $table->foreign('supplier_id')
                  ->references('id')
                  ->on('suppliers')
                  ->nullOnDelete(); // if supplier deleted → set null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
