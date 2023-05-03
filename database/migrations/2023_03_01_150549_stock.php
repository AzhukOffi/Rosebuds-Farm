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
        Schema::create('stock', function (Blueprint $table) {
            $table->id("id");
            $table->string("name");
            $table->integer("stock")->default(0);
            $table->integer("minStock")->default(0);
            $table->integer("warnStock")->default(0);
            $table->integer("price")->default(0);
            $table->integer("entreprisePrice")->default(0);
            $table->integer("contratPrice")->default(0);
            $table->timestamp("startAt")->useCurrent()->index();
        });

        DB::table("stock")->insert(["name" => "Carottes", "price" => 3, "entreprisePrice" => 3, "contratPrice" => 2]);
        DB::table("stock")->insert(["name" => "Feuilles de Thé"]);
        DB::table("stock")->insert(["name" => "Fraises", "price" => 3, "entreprisePrice" => 2, "contratPrice" => 2]);
        DB::table("stock")->insert(["name" => "Framboises", "price" => 3, "entreprisePrice" => 2, "contratPrice" => 2]);
        DB::table("stock")->insert(["name" => "Laitues", "price" => 4, "entreprisePrice" => 4, "contratPrice" => 4]);
        DB::table("stock")->insert(["name" => "Menthes"]);
        DB::table("stock")->insert(["name" => "Oignons", "price" => 3, "entreprisePrice" => 2, "contratPrice" => 2]);
        DB::table("stock")->insert(["name" => "Patates", "price" => 3, "entreprisePrice" => 3, "contratPrice" => 2]);
        DB::table("stock")->insert(["name" => "Pêches", "price" => 3, "entreprisePrice" => 3, "contratPrice" => 2]);
        DB::table("stock")->insert(["name" => "Roses", "price" => 3]);
        DB::table("stock")->insert(["name" => "Tomates", "price" => 3, "entreprisePrice" => 3, "contratPrice" => 2]);
        DB::table("stock")->insert(["name" => "Citrons", "startAt" => date_create("2000/01/01")]);
        DB::table("stock")->insert(["name" => "Farines", "startAt" => date_create("2000/01/01"), "entreprisePrice" => 30, "contratPrice" => 25]);
        DB::table("stock")->insert(["name" => "Sacs en toile", "startAt" => date_create("2000/01/01")]);
        DB::table("stock")->insert(["name" => "Panier de Fruits", "price" => 80, "stock" => -1]);
        DB::table("stock")->insert(["name" => "Panier de Légumes", "price" => 150, "stock" => -1]);
        DB::table("stock")->insert(["name" => "Panier Garni", "price" => 220, "stock" => -1]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock');
    }
};
