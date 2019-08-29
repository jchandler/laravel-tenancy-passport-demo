<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_location', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('location_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->integer('item_uid')->nullable(false)->default()->comment('');
            $table->string('company_uid', 20)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->boolean('stock_flag')->nullable(true)->default(false)->comment('');
            $table->boolean('sell_flag')->nullable(true)->default(true)->comment('');
            $table->boolean('buy_flag')->nullable(true)->default(true)->comment('');
            $table->boolean('make_flag')->nullable(true)->default(false)->comment('');
            $table->boolean('discontinued_flag')->nullable(true)->default(false)->comment('');
            $table->boolean('requisition_flag')->nullable(true)->default(false)->comment('');
            $table->boolean('returnable_flag')->nullable(true)->default(true)->comment('');
            $table->boolean('transfer_flag')->nullable(true)->default(true)->comment('');
            $table->decimal('primary_supplier_uid')->nullable(true)->default(NULL)->comment('');
            $table->string('master_group', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('purchase_group', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('sales_discount_group', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('purchase_discount_group', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('moving_average_cost', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->decimal('other_cost', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->string('replenish_method', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('replenish_location_uid', 19, 0)->nullable(true)->default(NULL)->comment('');
            $table->decimal('min_order_point', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->decimal('max_order_qty', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->decimal('qty_on_hand', 19, 9)->nullable(false)->default(0.000000000)->comment('');
            $table->decimal('qty_allocated', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('qty_backordered', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('qty_in_transit', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('qty_on_po', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('qty_in_process', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('qty_protected_stock', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->decimal('qty_reserved_due_in', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->integer('safety_stock_id')->nullable(true)->default(NULL)->comment('');
            $table->decimal('safety_stock_value', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->integer('service_level_measure')->nullable(true)->default(NULL)->comment('');
            $table->decimal('service_level_goal', 19, 2)->nullable(true)->default(NULL)->comment('');
            $table->smallInteger('first_stocked_period')->nullable(true)->default(NULL)->comment('');
            $table->decimal('first_stocked_year', 4, 0)->nullable(true)->default(NULL)->comment('');
            $table->boolean('usage_lock')->nullable(true)->default(false)->comment('');
            $table->smallInteger('usage_lock_period')->nullable(true)->default(NULL)->comment('');
            $table->smallInteger('usage_lock_year')->nullable(true)->default(NULL)->comment('');
            $table->smallInteger('min_periods_to_supply')->nullable(true)->default(0)->comment('');
            $table->smallInteger('max_periods_to_supply')->nullable(true)->default(0)->comment('');
            $table->decimal('qty_min_replenishment', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->integer('demand_pattern_uid')->nullable(true)->default(NULL)->comment('');
            $table->integer('demand_pattern_behavior_uid')->nullable(true)->default(NULL)->comment('');
            $table->boolean('pattern_manual_edit_flag')->nullable(true)->default(false)->comment('');
            $table->decimal('pattern_like_location_uid', 19, 0)->nullable(true)->default(NULL)->comment('');
            $table->integer('pattern_like_item_uid')->nullable(true)->default(NULL)->comment('');
            $table->boolean('behaves_like_lock_flag')->nullable(true)->default(false)->comment('');
            $table->integer('behaves_like_lock_period')->nullable(true)->default(NULL)->comment('');
            $table->integer('behaves_like_lock_year')->nullable(true)->default(NULL)->comment('');
            $table->boolean('dead_item_flag')->nullable(true)->default(false)->comment('');
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
        Schema::dropIfExists('item_location');
    }
}
