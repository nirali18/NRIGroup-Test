<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products',function($newtable){
            $newtable->increments('id');
            $newtable->date('date');
            $newtable->string('category');
            $newtable->string('title',500);
            $newtable->text('location');
            $newtable->string('condition');
            $newtable->integer('pre_tax_amount');
            $newtable->string('tax_name');
            $newtable->double('tax_amount');
            $newtable->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
