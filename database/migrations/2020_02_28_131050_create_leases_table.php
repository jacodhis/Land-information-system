<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usage');
            $table->Integer('payment');
             $table->string('period');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('land_id');
            
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
        Schema::dropIfExists('leases');
    }
}
