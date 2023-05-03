<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('username')->default("");
            $table->string('discriminator')->default("");

            $table->string('name')->default("Inconnu");
            $table->string('rank')->default("Apprenti");
            $table->integer('rankLevel')->default(0);
            $table->boolean('sex')->default(0);
            $table->integer('salary')->default(250);
            $table->integer('allowed')->default(0);

            $table->string('email')->nullable()->unique();
            $table->string('avatar')->nullable();

            $table->boolean('verified')->default(false);
            $table->string('locale')->default("");
            $table->boolean('mfa_enabled')->default(false);
            $table->string('refresh_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
