<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_supplier', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id')->nullable(false)->default()->comment('');
            $table->decimal('vendor_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->decimal('supplier_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->boolean('primary_vendor')->nullable(false)->default(true)->comment('');
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
        Schema::dropIfExists('vendor_supplier');
    }
}
