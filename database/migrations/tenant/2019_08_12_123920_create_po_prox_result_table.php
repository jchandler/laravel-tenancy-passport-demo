<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoProxResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('po_prox_result', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_uid', 20)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->decimal('location_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->decimal('replenish_location_uid', 19, 0)->nullable(true)->default(NULL)->comment('');
            $table->decimal('supplier_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->string('supplier_name', 255)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('buyer_name', 51)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->dateTime('last_po_date')->nullable(true)->default(NULL)->comment('');
            $table->decimal('avg_po_days', 19, 8)->nullable(true)->default(NULL)->comment('');
            $table->string('min_order_control_target', 15)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('min_order_control_value', 19, 8)->nullable(true)->default(NULL)->comment('');
            $table->string('freight_control_target', 15)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('freight_control_value', 19, 8)->nullable(true)->default(NULL)->comment('');
            $table->decimal('order_value', 19, 8)->nullable(true)->default(NULL)->comment('');
            $table->decimal('freight_value', 19, 8)->nullable(true)->default(NULL)->comment('');
            $table->string('control_type', 35)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('target_value', 19, 8)->nullable(true)->default(NULL)->comment('');
            $table->decimal('actual_value', 19, 8)->nullable(true)->default(NULL)->comment('');
            $table->decimal('pct_of_order', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->dateTime('est_po_date')->nullable(true)->default(NULL)->comment('');
            $table->dateTime('est_arrival_date')->nullable(true)->default(NULL)->comment('');
            $table->boolean('record_type')->nullable(true)->default(false)->comment('');
            $table->dateTime('record_date')->nullable(true)->useCurrent()->comment('');
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
        Schema::dropIfExists('po_prox_result');
    }
}
