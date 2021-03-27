<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pays', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('land_id'); 
             $table->Integer('amount');

             $table->string('buyer_name');
             $table->Integer('phone_no');
             $table->string('email');
             $table->string('usage');
             $table->string('purpose');
             $table->unsignedBigInteger('user_id');
            
            
            $table->index('user_id');
            $table->index('land_id');
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
        Schema::dropIfExists('pays');
    }
}
