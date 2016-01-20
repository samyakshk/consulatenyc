<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsulargenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ConsularGenerals',function(Blueprint $table)
         
        {
            $table->increments('id');
            $table->string('title');
            $table->string('image');
            $table->text('details');
            $table->timestamps();
           
        }


            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:drop('ConsularGenerals');
    }
}
