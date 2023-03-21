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
        Schema::create('superettes', function (Blueprint $table) {
            $table->id("id");
            $table->string("name");
            $table->integer("total")->default(-1);
            $table->integer("restant")->default(-1);
            $table->timestamp("endAt")->useCurrent()->index();
        });

        DB::table("superettes")->insert(["name" => "24/7 - 1000 (Paleto)"]);
        DB::table("superettes")->insert(["name" => "24/7 - 1012 (Paleto)"]);
        DB::table("superettes")->insert(["name" => "24/7 - 3008 (Sandy Shores)"]);
        DB::table("superettes")->insert(["name" => "24/7 - 3051 (Freeway E)"]);
        DB::table("superettes")->insert(["name" => "24/7 - 4019 (Route 68)"]);
        DB::table("superettes")->insert(["name" => "24/7 - 5037 (Chumash)"]);
        DB::table("superettes")->insert(["name" => "24/7 - 5047 (Chumash)"]);
        DB::table("superettes")->insert(["name" => "24/7 - 7093 (Restaurant)"]);
        DB::table("superettes")->insert(["name" => "24/7 - 7354 (Freeway Est)"]);
        DB::table("superettes")->insert(["name" => "24/7 - 9046 (Benny's)"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('superettes');
    }
};
