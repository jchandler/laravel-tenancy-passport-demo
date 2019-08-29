<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_master', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name', 100)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->string('item_type', 20)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->string('short_desc', 100)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->string('long_desc', 500)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->boolean('track_lots')->nullable(false)->default(false)->comment('');
            $table->boolean('requisition_item')->nullable(false)->default(false)->comment('');
            $table->boolean('consignment_item')->nullable(false)->default(false)->comment('');
            $table->boolean('charge_item')->nullable(false)->default(false)->comment('');
            $table->boolean('convert_qty')->nullable(false)->default(false)->comment('');
            $table->boolean('round_price')->nullable(false)->default(false)->comment('');
            $table->string('master_group', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('sales_group', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('purchase_group', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('base_uom', 20)->nullable(false)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('default_sales_uom', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('sales_price_uom', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->integer('sales_price_uom_size')->nullable(true)->default(NULL)->comment('');
            $table->string('default_purchase_uom', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('purchase_price_uom', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->integer('purchase_price_uom_size')->nullable(true)->default(NULL)->comment('');
            $table->string('default_transfer_uom', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->text('item_keywords')->nullable(true)->collation('utf8_unicode_ci')->comment('');
            $table->boolean('inactive_flag')->nullable(false)->default(false)->comment('');
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
        Schema::dropIfExists('item_master');
    }
}
