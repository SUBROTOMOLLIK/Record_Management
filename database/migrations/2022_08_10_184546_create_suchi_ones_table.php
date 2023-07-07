<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuchiOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suchi_ones', function (Blueprint $table) {
            $table->id();
            $table->string('PName');
            $table->string('FName');
            $table->string('FAddress');
            $table->string('BenPerson');
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
        Schema::dropIfExists('suchi_ones');
    }
}
