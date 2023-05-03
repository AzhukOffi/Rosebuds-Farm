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
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id("id");
            $table->string("entreprise")->default("");
            $table->integer("Carottes")->default(0);
            $table->integer("Fraises")->default(0);
            $table->integer("Framboises")->default(0);
            $table->integer("Laitues")->default(0);
            $table->integer("Oignons")->default(0);
            $table->integer("Patates")->default(0);
            $table->integer("Pêches")->default(0);
            $table->integer("Tomates")->default(0);
            $table->integer("Farines")->default(0);
            $table->integer("ThéCitron")->default(0);
            $table->integer("ThéRouge")->default(0);
            $table->integer("ThéPeche")->default(0);
            $table->integer("ThéMenthe")->default(0);
            $table->integer("ThéVert")->default(0);
            $table->boolean("delivery")->default(0);
            $table->string("quand")->default("?");
        });

        DB::table("livraisons")->insert(["entreprise" => "Benny's"]);
        DB::table("livraisons")->insert(["entreprise" => "Emerald Bar"]);
        DB::table("livraisons")->insert(["entreprise" => "Pillbox Hospital"]);
        DB::table("livraisons")->insert(["entreprise" => "Downtown Cab Co"]);
        DB::table("livraisons")->insert(["entreprise" => "LSPD"]);
        DB::table("livraisons")->insert(["entreprise" => "Ron Petroleum"]);
        DB::table("livraisons")->insert(["entreprise" => "Vignoble"]);
        DB::table("livraisons")->insert(["entreprise" => "Weazel News"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livraisons');
    }
};
