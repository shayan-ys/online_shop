<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_product');
            $table->string('cpu_type')->nullable();
            $table->float('cpu_f')->nullable();
            $table->string('ram_gen')->nullable();
            $table->integer('ram_cap')->nullable();
            $table->string('hard_desc')->nullable();
            $table->integer('hard_cap')->nullable();
            $table->string('region')->nullable();
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
        Schema::drop('laptops');
    }
}
