<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_id', 20)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->string('company_name', 40)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->decimal('address_uid', 19, 0)->nullable(false)->comment('');
            $table->smallInteger('business_days_per_year')->nullable(false)->default(250)->comment('');
            $table->string('fiscal_year_end', 5)->nullable(false)->collation('utf8_unicode_ci')->default(12)->comment('');
            $table->boolean('pricing_by_location')->nullable(true)->default(true)->comment('');
            $table->decimal('ordering_cost', 19, 0)->nullable(true)->default(3.000000000)->comment('');
            $table->decimal('carrying_cost', 19, 0)->nullable(true)->default(0.200000000)->comment('');
            $table->decimal('unit_cost', 19, 0)->nullable(true)->default(0.000000000)->comment('');
            $table->integer('grace_period_days')->nullable(false)->default(0)->comment('');
            $table->decimal('ar_aging_period_01', 3, 0)->nullable(true)->default(30)->comment('');
            $table->decimal('ar_aging_period_02', 3, 0)->nullable(true)->default(60)->comment('');
            $table->decimal('ar_aging_period_03', 3, 0)->nullable(true)->default(90)->comment('');
            $table->decimal('number_of_usage_periods', 3, 0)->nullable(true)->default(12)->comment('');
            $table->smallInteger('number_of_demand_periods')->nullable(false)->default(-1)->comment('');
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
        Schema::dropIfExists('company');
    }
}
