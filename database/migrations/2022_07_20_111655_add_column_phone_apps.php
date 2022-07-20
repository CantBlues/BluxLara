<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phone_apps', function (Blueprint $table) {
            $table->boolean("ignore")->default(false);
            $table->boolean("display")->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phone_apps', function (Blueprint $table) {
            $table->dropColumn("ignore");
            $table->dropColumn("display");
        });
    }
};
