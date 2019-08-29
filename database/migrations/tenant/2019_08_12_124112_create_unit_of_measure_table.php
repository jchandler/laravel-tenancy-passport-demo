<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitOfMeasureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_of_measure', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uom_id', 8)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->string('uom_desc', 100)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
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
        Schema::dropIfExists('unit_of_measure');
    }
}
