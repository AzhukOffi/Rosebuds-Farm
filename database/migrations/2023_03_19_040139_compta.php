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
        Schema::create('compta', function (Blueprint $table) {
            $table->id("id");
            $table->integer("week")->default(0);
            $table->integer("bankStart")->default(0);
            $table->integer("ca")->default(0);
            $table->integer("depenses")->default(0);
            $table->integer("benefices")->default(0);
            $table->integer("bankEnd")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compta');
    }
};
