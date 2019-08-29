<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierDivisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_division', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('supplier_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->decimal('division_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->string('division_name', 255)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
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
        Schema::dropIfExists('supplier_division');
    }
}
