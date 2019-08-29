<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('supplier_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->string('supplier_name', 255)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('review_cycle_days', 3, 0)->nullable(true)->default(NULL)->comment('');
            $table->decimal('average_lead_time_days', 3, 0)->nullable(true)->default(NULL)->comment('');
            $table->string('lead_time_source', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('lead_time_safety_factor', 19, 4)->nullable(true)->default(NULL)->comment('');
            $table->integer('safety_stock_type_uid')->nullable(true)->default(NULL)->comment('');
            $table->decimal('safety_stock_days', 19, 4)->nullable(true)->default(NULL)->comment('');
            $table->integer('service_level_type_uid')->nullable(true)->default(NULL)->comment('');
            $table->decimal('service_level_pct_goal', 19, 2)->nullable(true)->default(NULL)->comment('');
            $table->string('control_target_uid', 16)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('control_target_value', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->string('freight_target_uid', 16)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('freight_target_value', 19, 9)->nullable(true)->useCurrent()->comment('');
            $table->integer('ship_days')->nullable(true)->default(NULL)->comment('');
            $table->integer('transit_days')->nullable(true)->default(-1)->comment('');
            $table->boolean('use_containers_flag')->nullable(false)->default(false)->comment('');
            $table->decimal('container_cube', 19, 9)->nullable(false)->useCurrent()->comment('');
            $table->decimal('receive_days_early', 19, 0)->nullable(true)->default(0)->comment('');
            $table->decimal('container_weight', 19, 9)->nullable(false)->useCurrent()->comment('');
            $table->decimal('receive_days_late', 19, 0)->nullable(true)->default(0)->comment('');
            $table->boolean('rma_required_flag')->nullable(false)->default(false)->comment('');
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
        Schema::dropIfExists('supplier');
    }
}
