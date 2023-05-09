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
            $table->timestamp("startAt")->useCurrent()->index();
        });

        DB::table("stock")->insert(["name" => "Carottes"]);
        DB::table("stock")->insert(["name" => "Feuilles de Thé"]);
        DB::table("stock")->insert(["name" => "Fraises"]);
        DB::table("stock")->insert(["name" => "Framboises"]);
        DB::table("stock")->insert(["name" => "Laitues"]);
        DB::table("stock")->insert(["name" => "Menthes"]);
        DB::table("stock")->insert(["name" => "Oignons"]);
        DB::table("stock")->insert(["name" => "Patates"]);
        DB::table("stock")->insert(["name" => "Pêches"]);
        DB::table("stock")->insert(["name" => "Roses"]);
        DB::table("stock")->insert(["name" => "Tomates"]);
        DB::table("stock")->insert(["name" => "Citrons", "startAt" => date_create("2000/01/01")]);
        DB::table("stock")->insert(["name" => "Farines", "startAt" => date_create("2000/01/01")]);
        DB::table("stock")->insert(["name" => "Sacs en toile", "startAt" => date_create("2000/01/01")]);
        DB::table("stock")->insert(["name" => "Panier de Fruits"]);
        DB::table("stock")->insert(["name" => "Panier de Légumes"]);
        DB::table("stock")->insert(["name" => "Panier Garni"]);

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
