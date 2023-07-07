<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeedDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deed_details', function (Blueprint $table) {
            $table->id();
            $table->string('Year');
            $table->string('Sereal_No');
            $table->string('Deed_No');
            $table->string('Type_of_Deed');
            $table->string('Amount');
            $table->string('Donar');
            $table->string('Reciever');
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
        Schema::dropIfExists('deed_details');
    }
}
