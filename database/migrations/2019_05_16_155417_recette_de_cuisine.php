<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecetteDeCuisine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avatars', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->string('url', 255);
        });

        Schema::create('utilisateurs', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->string('pseudo', 255);
            $table->string('role',255);
            $table->unsignedInteger('avatar_id')->nullable();
            $table->foreign('avatar_id')->references('id')->on('avatars')->onDelete('cascade');
        });

        Schema::create('recettes', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->string('nom', 255);
            $table->string('description', 255);
            $table->unsignedInteger('temps_preparation');
            $table->unsignedInteger('nombre_portion');
            $table->unsignedInteger('utilisateur_id')->nullable();
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('categories', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->string('nom',255);
            $table->string('description', 255);
        });

        Schema::create('categories_recettes', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('categorie_id')->nullable();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('recette_id')->nullable();
            $table->foreign('recette_id')->references('id')->on('recettes')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('etapes', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('numero');
            $table->string('description', 255);
            $table->unsignedInteger('recette_id')->nullable();
            $table->foreign('recette_id')->references('id')->on('recettes')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('ingredients', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->string('nom', 255);
        });

        Schema::create('ingredients_recettes', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('quantite');
            $table->string('unite', 255);
            $table->unsignedInteger('ingredient_id')->nullable();
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('recette_id')->nullable();
            $table->foreign('recette_id')->references('id')->on('recettes')->onDelete('cascade')->onUpdate('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
        Schema::dropIfExists('avatars');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('recettes');
        Schema::dropIfExists('categories_recettes');
        Schema::dropIfExists('etapes');
        Schema::dropIfExists('ingredients');
        Schema::dropIfExists('ingredients_recettes');
    }
}
