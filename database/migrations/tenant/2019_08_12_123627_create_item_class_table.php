<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_class', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('item_uid')->nullable(false)->default()->comment('');
            $table->string('class_id', 20)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->integer('class_number')->nullable(false)->default(1)->comment('');
            $table->string('class_short_desc', 50)->nullable(false)->collation('utf8_unicode_ci')->default('')->comment('');
            $table->string('class_long_desc', 255)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
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
        Schema::dropIfExists('item_class');
    }
}
