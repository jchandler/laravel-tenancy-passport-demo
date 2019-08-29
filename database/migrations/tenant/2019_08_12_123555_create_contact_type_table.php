<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_type_name', 40)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->string('contact_type_desc', 100)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
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
        Schema::dropIfExists('contact_type');
    }
}
