<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassportstatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('passport_status',function(Blueprint $table)
        {
            $table->integer('passport_id')->unsigned()->index();
            $table->foreign('passport_id')->references('id')->on('passports')->onDelete('cascade');


            $table->integer('status_id')->unsigned()->index();
             $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
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
       Schema::drop('passport_status');
    }
}
