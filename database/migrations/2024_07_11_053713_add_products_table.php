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
            $table->foreignId('product_type_id')->constrained()->cascadeOnDelete();
            $table->string('product_name');
            $table->string('product_code');
            $table->foreignId('barcode_symbology_id')->constrained()->cascadeOnDelete();
            $table->foreignId('brand_product_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('product_unit_id')->constrained()->cascadeOnDelete();
            $table->foreignId('sale_unit_id')->constrained()->cascadeOnDelete();
            $table->foreignId('purchase_unit_id')->constrained()->cascadeOnDelete();
            $table->float('product_cost');
            $table->float('product_price');
            $table->integer('alert_Quantity');
            $table->boolean('product_tax');
            $table->foreignId('tax_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign([
                'product_type_id',
                'barcode_symbology_id',
                'brand_id',
                'category_id',
                'product_unit_id',
                'sale_unit_id',
                'purchase_unit_id',
                'tax_id'
            ]);
        });
        Schema::dropIfExists('products');
    }
};
