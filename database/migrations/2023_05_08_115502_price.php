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
        Schema::create('price', function (Blueprint $table) {
            $table->id("id");
            $table->string("client")->default("");
            $table->string("product")->default("");
            $table->integer("price")->default(0);
            $table->string("promo")->default("");
        });

        DB::table("price")->insert(["client" => "Benny's", "product" => "Carottes", "price" => 3]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Carottes", "price" => 2]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Carottes", "price" => 3]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Carottes", "price" => 3]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Carottes", "price" => 3]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Carottes", "price" => 3]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Carottes", "price" => 3]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Carottes", "price" => 3]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Carottes", "price" => 3]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Fraises", "price" => 3]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Fraises", "price" => 2]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Fraises", "price" => 3]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Fraises", "price" => 3]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Fraises", "price" => 3]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Fraises", "price" => 3]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Fraises", "price" => 3]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Fraises", "price" => 3]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Fraises", "price" => 3]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Framboises", "price" => 3]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Framboises", "price" => 2]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Framboises", "price" => 3]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Framboises", "price" => 3]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Framboises", "price" => 3]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Framboises", "price" => 3]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Framboises", "price" => 3]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Framboises", "price" => 3]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Framboises", "price" => 3]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Laitues", "price" => 4]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Laitues", "price" => 3]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Laitues", "price" => 4]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Laitues", "price" => 4]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Laitues", "price" => 4]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Laitues", "price" => 4]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Laitues", "price" => 4]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Laitues", "price" => 4]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Laitues", "price" => 4]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Menthes", "price" => 3]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Menthes", "price" => 3]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Menthes", "price" => 3]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Menthes", "price" => 3]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Menthes", "price" => 3]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Menthes", "price" => 3]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Menthes", "price" => 3]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Menthes", "price" => 3]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Menthes", "price" => 3]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Oignons", "price" => 3]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Oignons", "price" => 2]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Oignons", "price" => 2]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Oignons", "price" => 3]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Oignons", "price" => 2]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Oignons", "price" => 3]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Oignons", "price" => 2]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Oignons", "price" => 3]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Oignons", "price" => 3]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Patates", "price" => 3]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Patates", "price" => 2]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Patates", "price" => 2]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Patates", "price" => 3]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Patates", "price" => 2]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Patates", "price" => 3]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Patates", "price" => 2]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Patates", "price" => 3]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Patates", "price" => 3]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Pêches", "price" => 3]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Pêches", "price" => 3]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Pêches", "price" => 3]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Pêches", "price" => 3]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Pêches", "price" => 3]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Pêches", "price" => 3]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Pêches", "price" => 3]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Pêches", "price" => 3]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Pêches", "price" => 3]);

        DB::table("price")->insert(["client" => "Particulier", "product" => "Roses", "price" => 300]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Tomates", "price" => 3]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Tomates", "price" => 3]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Tomates", "price" => 3]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Tomates", "price" => 3]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Tomates", "price" => 3]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Tomates", "price" => 3]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Tomates", "price" => 3]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Tomates", "price" => 3]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Tomates", "price" => 3]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Farines", "price" => 30]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Farines", "price" => 25]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Farines", "price" => 30]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Farines", "price" => 30]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Farines", "price" => 30]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Farines", "price" => 30]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Farines", "price" => 30]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Farines", "price" => 30]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Thé au citron", "price" => 30]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Thé au citron", "price" => 25]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Thé au citron", "price" => 25]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Thé au citron", "price" => 30]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Thé au citron", "price" => 25]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Thé au citron", "price" => 30]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Thé au citron", "price" => 25]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Thé au citron", "price" => 30]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Thé au citron", "price" => 30]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Thé aux fruits rouges", "price" => 30]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Thé aux fruits rouges", "price" => 25]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Thé aux fruits rouges", "price" => 25]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Thé aux fruits rouges", "price" => 30]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Thé aux fruits rouges", "price" => 25]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Thé aux fruits rouges", "price" => 30]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Thé aux fruits rouges", "price" => 25]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Thé aux fruits rouges", "price" => 30]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Thé aux fruits rouges", "price" => 30]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Thé glacé à la pêche", "price" => 25]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Thé glacé à la pêche", "price" => 25]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Thé glacé à la pêche", "price" => 25]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Thé glacé à la pêche", "price" => 25]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Thé glacé à la pêche", "price" => 25]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Thé glacé à la pêche", "price" => 225]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Thé glacé à la pêche", "price" => 25]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Thé glacé à la pêche", "price" => 25]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Thé glacé à la pêche", "price" => 25]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Thé à la menthe", "price" => 30]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Thé à la menthe", "price" => 25]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Thé à la menthe", "price" => 25]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Thé à la menthe", "price" => 30]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Thé à la menthe", "price" => 25]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Thé à la menthe", "price" => 30]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Thé à la menthe", "price" => 25]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Thé à la menthe", "price" => 30]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Thé à la menthe", "price" => 30]);

        DB::table("price")->insert(["client" => "Benny's", "product" => "Thé vertn", "price" => 30]);
        DB::table("price")->insert(["client" => "Emerald Bar", "product" => "Thé vert", "price" => 25]);
        DB::table("price")->insert(["client" => "Pillbox Hospital", "product" => "Thé vert", "price" => 25]);
        DB::table("price")->insert(["client" => "Downtown Cab Co", "product" => "Thé vert", "price" => 30]);
        DB::table("price")->insert(["client" => "LSPD", "product" => "Thé vert", "price" => 25]);
        DB::table("price")->insert(["client" => "Ron Petroleum", "product" => "Thé vert", "price" => 30]);
        DB::table("price")->insert(["client" => "Vignoble", "product" => "Thé vert", "price" => 25]);
        DB::table("price")->insert(["client" => "Weazel News", "product" => "Thé vert", "price" => 30]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Thé vert", "price" => 30]);

        DB::table("price")->insert(["client" => "Particulier", "product" => "Panier de Fruits", "price" => 80]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Panier de Légumes", "price" => 150]);
        DB::table("price")->insert(["client" => "Particulier", "product" => "Panier Garni", "price" => 220]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price');
    }
};
