<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttestationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Attestations',function(Blueprint $table)
         
        {
            $table->increments('id');
            $table->string('title');
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
          Schema:drop('Attestations');
    }
}
