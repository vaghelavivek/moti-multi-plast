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
            $table->id();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->integer('price')->default(0);
            $table->integer('order_quantity');
            $table->string('color')->default('transparent');
            $table->string('material')->default('plastic');
            $table->string('slug');
            $table->integer('category_id');
            $table->string('type')->default('container');
            $table->string('shape');
            $table->string('supply_ability');
            $table->integer('delivery_time')->default(7);
            $table->boolean('is_hot');
            $table->timestamps();
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
