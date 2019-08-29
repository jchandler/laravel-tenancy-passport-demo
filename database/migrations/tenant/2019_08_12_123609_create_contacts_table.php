<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('contact_type_uid')->nullable(false)->default(8)->comment('');
            $table->string('company_uid')->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('address_uid', 19, 0)->nullable(false)->comment('');
            $table->string('branch_uid', 20)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->decimal('location_uid', 19, 0)->nullable(true)->default(NULL)->comment('');
            $table->string('salutation_id', 15)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('contact_first_name', 25)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('contact_last_name', 25)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
            $table->string('contact_email', 255)->nullable(true)->collation('utf8_unicode_ci')->default(NULL)->comment('');
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
        Schema::dropIfExists('contacts');
    }
}
