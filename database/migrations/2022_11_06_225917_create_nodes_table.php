<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('nodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('addr')->default('');
            $table->integer('port');
            $table->string('uid')->nullable();
            $table->string('net')->nullable();
            $table->string('type')->nullable();
            $table->string('host')->nullable();
            $table->string('tls')->nullable();
            $table->string('protocol')->default('');
            $table->string('aid')->nullable();
            $table->string('path')->nullable();
            $table->integer('ping')->nullable();
            $table->string('delay')->nullable();
            $table->string('speed')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('nodes');
    }
}
