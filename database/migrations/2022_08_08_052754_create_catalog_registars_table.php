<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogRegistarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_registars', function (Blueprint $table) {
            $table->id();
            $table->string('si_no');
            $table->string('office_name');
            $table->string('bohi_name');
            $table->string('opening_date');
            $table->string('balam_no');
            $table->string('balam_year');
            $table->string('deed_number_book');
            $table->string('close_date_book');
            $table->string('write_page_no');
            $table->string('unwrite_page_no');
            $table->string('sending_date_thana');
            $table->string('reciving_date_thana');
            $table->string('kamra_no');
            $table->string('rack_no');
            $table->string('self_no');
            $table->string('comment');
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
        Schema::dropIfExists('catalog_registars');
    }
}
