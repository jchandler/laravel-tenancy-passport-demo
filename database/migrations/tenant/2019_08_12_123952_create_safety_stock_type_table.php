<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSafetyStockTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('safety_stock_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('safety_stock_name', 20)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
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
        Schema::dropIfExists('safety_stock_type');
    }
}
