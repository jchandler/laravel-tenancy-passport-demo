<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierRuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_rule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_id', 10)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('location_id', 19, 0)->nullable(true)->default(NULL)->comment('');
            $table->integer('supplier_id')->nullable(true)->default(NULL)->comment('');
            $table->boolean('include_in_barometer')->nullable(true)->default(true)->comment('');
            $table->boolean('include_in_item_rank')->nullable(true)->default(true)->comment('');
            $table->boolean('include_in_parameter')->nullable(true)->default(true)->comment('');
            $table->boolean('include_in_review_cycle')->nullable(true)->default(true)->comment('');
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
        Schema::dropIfExists('supplier_rule');
    }
}
