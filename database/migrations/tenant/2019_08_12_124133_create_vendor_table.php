<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('vendor_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->string('company_uid', 20)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->string('vendor_name', 255)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
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
        Schema::dropIfExists('vendor');
    }
}
