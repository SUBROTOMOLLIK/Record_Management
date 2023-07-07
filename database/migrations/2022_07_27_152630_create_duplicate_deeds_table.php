<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuplicateDeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duplicate_deeds', function (Blueprint $table) {
            $table->id();
            $table->string('bn_name');
            $table->string('name');
            $table->string('applicator_id');
            $table->string('register_rel');
            $table->string('register_date');
            $table->string('aplication_number');
            $table->string('aplication_date');
            $table->string('type_of_deed');
            $table->string('deed_date');
            $table->string('deed_number');
            $table->string('deed_year');
            $table->string('bohi_no');
            $table->string('balam_no');
            $table->string('bank_name');
            $table->string('bank_fees_date');
            $table->string('pay_order');
            $table->string('date');
            $table->boolean('status')->default('0');
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
        Schema::dropIfExists('duplicate_deeds');
    }
}
