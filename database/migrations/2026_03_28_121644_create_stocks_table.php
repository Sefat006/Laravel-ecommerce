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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id');

            $table->enum('stock_type', ['in', 'out'])->default('in');

            $table->unsignedInteger('quantity');

            $table->string('reference_type', 50)->nullable(); // purchase, order
            $table->unsignedBigInteger('reference_id')->nullable();

            $table->text('note')->nullable();

            $table->timestamps();

            // 🔥 Foreign Key
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
