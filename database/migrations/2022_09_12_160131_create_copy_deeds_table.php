<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyDeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copy_deeds', function (Blueprint $table) {
            $table->id();
            $table->string('DeedCopy')->nullable();
            $table->string('Date')->nullable();
            $table->string('Deed_No')->nullable();
            $table->string('Year')->nullable();
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
        Schema::dropIfExists('copy_deeds');
    }
}
