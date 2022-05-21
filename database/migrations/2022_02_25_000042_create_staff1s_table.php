<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaff1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employ_name');
            $table->string('id_card_no');
            $table->string('address');
            $table->string('contact_no');
            $table->float('salary');
            ##########################################
            $table->unsignedBigInteger('staff_type_id');
            $table->foreign('staff_type_id')->references('id')->on('staff_types');
            #=====================================================
            $table->unsignedBigInteger('id_card_typeid');
            $table->foreign('id_card_typeid')->references('id')->on('id_card_types');
            #=====================================================
            $table->unsignedBigInteger('shift_id');
            $table->foreign('shift_id')->references('id')->on('shifts');
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
        Schema::dropIfExists('staff1s');
    }
}
