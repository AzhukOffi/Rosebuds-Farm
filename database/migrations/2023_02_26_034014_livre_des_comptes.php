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
        Schema::create('comptes', function (Blueprint $table) {
            $table->id("id");
            $table->bigInteger("discord")->default(0);
            $table->string("user");
            $table->string("name");
            $table->integer("montant")->default(0);
            $table->string("details")->default("");
            $table->string("meta");
            $table->timestamp("timestamp")->useCurrent()->index();
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
};
