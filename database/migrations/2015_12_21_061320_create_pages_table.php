<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages',function(Blueprint $table)
         
        {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('title');
            $table->string('image');
            $table->text('details');
            $table->boolean('is_published');
            $table->timestamps();

             $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
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
       Schema:drop('pages');
    }
}
