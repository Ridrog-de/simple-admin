<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdminToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(config('simpleadmin.table'), function (Blueprint $table) {
            $table->boolean(config('simpleadmin.condition'))->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(config('simpleadmin.table'), function (Blueprint $table) {
            $table->dropColumn(config('simpleadmin.condition'));
        });
    }
}
