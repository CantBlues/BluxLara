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
        // Schema::create('phone_usages', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer("appid");
        //     $table->integer("usage");
        //     $table->integer("node");
        // });

        // Schema::create('phone_apps', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name',255)->nullable();
        //     $table->string('package_name',255)->unique();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('phone_usages');
        // Schema::dropIfExists('phone_apps');
    }
};
