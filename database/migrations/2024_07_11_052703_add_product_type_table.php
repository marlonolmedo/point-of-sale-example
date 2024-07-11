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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
        Schema::dropIfExists('product_types');
    }
};
