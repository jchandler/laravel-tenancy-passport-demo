<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemUomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_uom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('item_uid')->nullable(false)->default()->comment('');
            $table->string('unit_of_measure', 20)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->decimal('unit_size', 19, 4)->nullable(false)->default()->comment('');
            $table->boolean('sales_unit')->nullable(false)->default(true)->comment('');
            $table->boolean('purchase_unit')->nullable(false)->default(true)->comment('');
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
        Schema::dropIfExists('item_uom');
    }
}
