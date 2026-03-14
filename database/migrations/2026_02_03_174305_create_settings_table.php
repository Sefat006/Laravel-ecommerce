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
        Schema::create('settings', function (Blueprint $table) {
            $table->id(); // Optional but recommended (primary key)

            $table->string('site_name', 255);
            $table->string('logo', 255)->nullable();
            $table->string('favicon', 255)->nullable();

            $table->string('address', 255)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 255)->nullable();

            $table->string('fb', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('linkedin', 255)->nullable();
            $table->string('instagram', 255)->nullable();

            $table->text('copyright')->nullable();
            $table->text('map_iframe')->nullable();

            $table->string('meta_title', 255)->nullable();
            $table->text('meta_desc')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('og_image', 255)->nullable();

            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
