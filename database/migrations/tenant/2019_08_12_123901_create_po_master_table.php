<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('po_master', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('po_number', 19, 0)->nullable(false)->default()->comment('');
            $table->string('company_uid', 20)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->string('branch_uid', 20)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->decimal('location_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->decimal('vendor_uid', 19, 0)->nullable(false)->default()->comment('');
            $table->decimal('supplier_uid', 19, 0)->nullable(true)->default(NULL)->comment('');
            $table->decimal('division_uid', 19, 0)->nullable(true)->default(NULL)->comment('');
            $table->dateTime('po_date')->nullable(true)->default(NULL)->comment('');
            $table->string('buyer_uid', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->dateTime('date_received')->nullable(true)->default(NULL)->comment('');
            $table->boolean('complete_flag')->nullable(false)->default(false)->comment('');
            $table->boolean('cancel_flag')->nullable(false)->default(false)->comment('');
            $table->dateTime('date_printed')->nullable(false)->comment('');
            $table->boolean('closed_flag')->nullable(false)->default(false)->comment('');
            $table->boolean('approved_flag')->nullable(false)->default(true)->comment('');
            $table->char('po_type', 1)->nullable(false)->collation('utf8_unicode_ci')->default('B')->comment('');
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
        Schema::dropIfExists('po_master');
    }
}
