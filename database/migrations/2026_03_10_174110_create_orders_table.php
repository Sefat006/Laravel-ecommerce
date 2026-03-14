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
        Schema::create('orders', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('order_number')->unique();

            // Billing Address
            $table->string('billing_name');
            $table->string('billing_email');
            $table->string('billing_street_address');
            $table->string('billing_country', 100);
            $table->string('billing_state', 100);
            $table->string('billing_zipcode', 20);

            // Shipping Address
            $table->string('shipping_name');
            $table->string('shipping_email');
            $table->string('shipping_street_address');
            $table->string('shipping_country', 100);
            $table->string('shipping_state', 100);
            $table->string('shipping_zipcode', 20);

            // Order Details
            $table->decimal('total_amount', 10, 2);

            $table->enum('payment_method', [
                'cod',
                'bank_transfer',
                'credit_card',
                'paypal',
                'stripe'
            ]);

            $table->enum('payment_status', [
                'pending',
                'paid',
                'failed',
                'refunded'
            ])->default('pending');

            $table->enum('order_status', [
                'pending',
                'processing',
                'shipped',
                'delivered',
                'canceled'
            ])->default('pending');

            $table->string('tracking_number')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
