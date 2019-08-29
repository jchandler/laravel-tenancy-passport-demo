<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_uid', 20)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->string('branch_uid', 20)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->decimal('location_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->string('location_name', 255)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->boolean('shipping_location_flag')->nullable(true)->default(true)->comment('');
            $table->boolean('rdc_flag')->nullable(false)->nullable(true)->default(false)->comment('');
            $table->integer('region_uid')->nullable(true)->default(NULL)->comment('');
            $table->boolean('region_flag')->nullable(false)->default(false)->comment('');
            $table->decimal('rollup_location_uid', 19, 0)->nullable(true)->default(NULL)->comment('');
            $table->decimal('associate_location_uid', 19, 0)->nullable(true)->default(NULL)->comment('');
            $table->integer('nonstock_periods_to_supply')->nullable(true)->default(NULL)->comment('');
            $table->integer('nonstock_available_to_transfer')->nullable(true)->default(NULL)->comment('');
            $table->decimal('mid_velocity_level', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->decimal('high_velocity_level', 19, 9)->nullable(true)->default(0.000000000)->comment('');
            $table->boolean('lot_bin_integration')->nullable(true)->default(false)->comment('');
            $table->boolean('strategic_retail_location_flag')->nullable(false)->default(false)->comment('');
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
        Schema::dropIfExists('location');
    }
}
