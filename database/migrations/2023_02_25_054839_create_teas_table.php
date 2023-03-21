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
        Schema::create('teas', function (Blueprint $table) {
            $table->id("id");
            $table->string("name");
            $table->integer("stock")->default(0);
            $table->integer("minStock")->default(0);
            $table->integer("warnStock")->default(0);
            $table->integer("price")->default(0);
            $table->integer("entreprisePrice")->default(0);
            $table->integer("contratPrice")->default(0);
        });

        DB::table("teas")->insert(["name" => "Thé au citron", "price" => 1, "entreprisePrice" => 1, "contratPrice" => 1]);
        DB::table("teas")->insert(["name" => "Thé aux fruits rouges", "price" => 1, "entreprisePrice" => 1, "contratPrice" => 1]);
        DB::table("teas")->insert(["name" => "Thé glacé à la pêche", "price" => 1, "entreprisePrice" => 1, "contratPrice" => 1]);
        DB::table("teas")->insert(["name" => "Thé à la menthe", "price" => 1, "entreprisePrice" => 1, "contratPrice" => 1]);
        DB::table("teas")->insert(["name" => "Thé vert", "price" => 1, "entreprisePrice" => 1, "contratPrice" => 1]);
        DB::table("teas")->insert(["name" => "Bouteilles en verre"]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teas');
    }
};
