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
        Schema::create('annuaire', function (Blueprint $table) {
            $table->id("id");
            $table->string("name");
            $table->string("numero")->default("051-????");
            $table->string("entreprise")->default("Inconnu");
            $table->string("details")->default(""); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annuaire');
    }
};
