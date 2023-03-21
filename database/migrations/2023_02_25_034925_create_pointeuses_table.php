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
        Schema::create('pointeuses', function (Blueprint $table) {
            $table->id("id");
            $table->bigInteger("user")->default(0);
            $table->string("time")->default("/");
            $table->integer("salary")->default(0);
            $table->timestamp("start")->default("2000-01-01");
            $table->timestamp("end")->default("2000-01-01");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pointeuses');
    }
};
