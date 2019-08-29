<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_supplier', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('inventory_supplier_uid')->nullable(false)->default(0)->comment('');
            $table->decimal('supplier_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->decimal('division_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->integer('item_uid')->nullable(false)->default()->comment('');
            $table->string('supplier_item_id', 60)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('supplier_sort_code', 10)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('purchase_unit', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('supplier_list_price', 19, 9)->nullable(false)->default(0.000000000)->comment('');
            $table->decimal('supplier_cost', 19, 9)->nullable(false)->default(0.000000000)->comment('');
            $table->dateTime('future_effective_date')->nullable(true)->default(NULL)->comment('');
            $table->decimal('supplier_future_list_price', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->decimal('supplier_future_cost', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->decimal('lead_time_days', 4, 0)->nullable(false)->default(0)->comment('');
            $table->decimal('gross_weight', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('net_weight', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('purchase_weight', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('unit_cube', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('unit_length', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('unit_width', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('unit_height', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->integer('pallet_ti')->nullable(true)->default(0)->comment('');
            $table->integer('pallet_hi')->nullable(true)->default(0)->comment('');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_supplier');
    }
}
