<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemSupplierLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_supplier_location', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('inventory_supplier_uid')->nullable(false)->default()->comment('');
            $table->decimal('location_uid', 19, 9)->nullable(false)->default()->comment('');
            $table->decimal('location_cost', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('location_list_price', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('location_future_cost', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->decimal('location_future_list_price', 19, 9)->nullable(true)->default(NULL)->comment('');
            $table->dateTime('location_effective_date')->nullable(true)->default(NULL)->comment('');
            $table->smallInteger('average_lead_time')->nullable(false)->default(0)->comment('');
            $table->smallInteger('manual_lead_time')->nullable(true)->default(0)->comment('');
            $table->smallInteger('fixed_lead_time')->nullable(true)->default(0)->comment('');
            $table->boolean('primary_supplier_flag')->nullable(false)->default(false)->comment('');
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
        Schema::dropIfExists('item_supplier_location');
    }
}
