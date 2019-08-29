<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_uid', 20)->nullable(false)->default('')->collation('utf8_unicode_ci')->comment('P21 branch.company_id maps to this field.');
            $table->string('branch_uid', 20)->nullable(false)->default('')->collation('utf8_unicode_ci')->comment('P21 branch.branch_id maps to this field.');
            $table->string('branch_description', 40)->nullable(false)->default('')->collation('utf8_unicode_ci')->comment('P21 branch.branch_description maps to this field.');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['company_uid','branch_uid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branch');
    }
}
