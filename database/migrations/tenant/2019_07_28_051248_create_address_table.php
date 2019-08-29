<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
	    $table->bigIncrements('id');
	    $table->decimal('address_uid', 19, 0)->unique()->nullable(false)->comment('P21 address.id maps to this field.');
	    $table->string('address_name', 50)->nullable(false)->collation('utf8_unicode_ci')->comment('P21 address.name maps to this field.');
	    $table->decimal('corp_address_uid', 19, 0)->nullable(true)->default(NULL)->comment('P21 address.corp_address_id maps to this field.');
	    $table->decimal('preferred_location_uid', 19, 0)->nullable(true)->default(NULL)->comment('P21 address.preferred_location_id maps to this field.');
	    $table->string('mail_address_01', 100)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.mail_address1 maps to this field.');
	    $table->string('mail_address_02', 100)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.mail_address2 maps to this field.');
	    $table->string('mail_address_03', 100)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.mail_address3 maps to this field.');
	    $table->string('mail_city', 100)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.mail_city maps to this field.');
	    $table->string('mail_state', 50)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.mail_state maps to this field.');
	    $table->string('mail_postal_code', 10)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.mail_postal_code maps to this field.');
	    $table->string('mail_country', 50)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.mail_country maps to this field.');
	    $table->string('physical_address_01', 100)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.phys_address1 maps to this field.');
	    $table->string('physical_address_02', 100)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.phys_address2 maps to this field.');
	    $table->string('physical_address_03', 100)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.phys_address3 maps to this field.');
	    $table->string('physical_city', 50)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.phys_city maps to this field.');
	    $table->string('physical_state', 50)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.phys_state maps to this field.');
	    $table->string('physical_postal_code', 10)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.phys_postal_code maps to this field.');
	    $table->string('physical_county', 255)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.phys_county maps to this field.');
	    $table->string('physical_country', 50)->nullable(true)->default(NULL)->collation('utf8_unicode_ci')->comment('P21 address.phys_country maps to this field.');
	    $table->decimal('latitude', 19, 9)->nullable(true)->default(NULL)->comment('P21 address.latitude maps to this field.');
	    $table->decimal('longitude', 19, 9)->nullable(true)->default(NULL)->comment('P21 address.longitude maps to this field.');
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
        Schema::dropIfExists('address');
    }
}
