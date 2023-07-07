<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonarDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donar_details', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('FatherName');
            $table->string('Address');
            $table->string('Date_of_Birth');
            $table->string('JL_No');
            $table->string('KhatianNo');
            $table->string('DagNo');
            $table->string('No_of_Deed');
            $table->string('Type_of_Deed');
            $table->string('Year');
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
        Schema::dropIfExists('donar_details');
    }
}
