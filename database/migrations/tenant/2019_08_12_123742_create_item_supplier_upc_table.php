<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemSupplierUpcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_supplier_upc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('supplier_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->integer('item_uid')->nullable(false)->default()->comment('');
            $table->string('purchase_uom', 8)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->string('upc_value', 14)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->tinyInteger('upc_check_digit')->nullable(false)->default()->comment('');
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
        Schema::dropIfExists('item_supplier_upc');
    }
}
