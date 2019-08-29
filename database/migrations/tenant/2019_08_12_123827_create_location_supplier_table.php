<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_supplier', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_uid', 20)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->decimal('location_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->decimal('supplier_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->integer('buyer_uid')->nullable(false)->default()->comment('');
            $table->decimal('review_cycle_days', 3, 0)->nullable(true)->default(NULL)->comment('');
            $table->dateTime('last_review_date')->nullable(true)->default(NULL)->comment('');
            $table->decimal('average_lead_time_days', 3, 0)->nullable(true)->default(NULL)->comment('');
            $table->string('lead_time_source', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('lead_time_safety_factor', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->string('control_target_uid', 16)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('control_target_value', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->string('freight_target_uid', 16)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('freight_target_value', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->boolean('include_in_buy_summary')->nullable(true)->default(true)->comment('');
            $table->boolean('include_in_rank')->nullable(true)->default(true)->comment('');
            $table->boolean('include_in_review_cycle')->nullable(true)->default(true)->comment('');
            $table->boolean('include_in_params')->nullable(true)->default(true)->comment('');
            $table->dateTime('last_po_date')->nullable(true)->default(NULL)->comment('');
            $table->decimal('avg_po_days', 19, 8)->default(0.00000000)->comment('');
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
        Schema::dropIfExists('location_supplier');
    }
}
