<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsedCars extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('used_cars', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->bigInteger('provider_car_id');
            $table->string('provider', 20);
            $table->string('marque', 15)->nullable();
            $table->string('model', 100)->nullable();
            $table->string('version')->nullable();
            $table->string('price')->nullable();
            $table->string('status_stock', 10)->nullable();
            $table->string('energy', 30)->nullable();
            $table->integer('km')->nullable();
            $table->string('transmission')->nullable();
            $table->string('cylinder')->nullable();
            $table->string('horsepower')->nullable();
            $table->integer('nb_doors')->nullable();
            $table->string('color', 20)->nullable();
            $table->string('co2')->nullable();
            $table->text('options')->nullable();
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
        Schema::drop('used_cars');
    }
}
