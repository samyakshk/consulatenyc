<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passports',function(Blueprint $table)
          {
            $table->increments('id');
             
            $table->string('Full_Name',90);
            $table->date('Date_of_Birth');
            $table->integer('Passport_Number')->unique();
            $table->text('comments');
            $table->boolean('Delivered_to_owner');
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
        Schema::drop('passports');
    }
}
