<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuchiTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suchi_twos', function (Blueprint $table) {
            $table->id();
            $table->string('LProperty');
            $table->string('AProperty');
            $table->string('CityThana');
            $table->string('District');
            $table->string('type_of_deed');
            $table->string('amount_of_money');
            $table->string('WRegisterd');
            $table->string('si_no');
            $table->string('balam_no');
            $table->string('page_no');
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
        Schema::dropIfExists('suchi_twos');
    }
}
