<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchDeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_deeds', function (Blueprint $table) {
            $table->id();
            $table->string('bn_name');
            $table->string('name');
            $table->string('applicator_id');
            $table->string('division');
            $table->string('district');
            $table->string('thana');
            $table->string('union');
            $table->string('nid_name');
            $table->string('search_year');
            $table->string('type_of_deed');
            $table->string('serach_inspaction');
            $table->string('bohi_no');
            $table->string('office_name');
            $table->string('aplication_deed');
            $table->string('balam_no');
            $table->string('page_no');
            $table->string('register_office');
            $table->string('date');
            $table->string('bank_name');
            $table->string('bank_fees_date');
            $table->string('pay_order');
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
        Schema::dropIfExists('search_deeds');
    }
}
