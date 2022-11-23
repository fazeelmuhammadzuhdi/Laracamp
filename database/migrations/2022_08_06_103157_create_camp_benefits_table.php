<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('camp_id')->unsigned();
            // 1st Method
            // $table->unsignedBigInteger('camp_id');

            $table->foreignId('camp_id')->constrained();
            $table->string('name');
            $table->timestamps();


            // cara 1  
            // $table->foreign('camp_id')->references('id')->on('camps')->delete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
}
