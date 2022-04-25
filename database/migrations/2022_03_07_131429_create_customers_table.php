<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->integer('contact_no');
            $table->string('email');
            $table->string('id_card_no');
            $table->string('address');
#=====================================================
 #=====================================================
                $table->unsignedBigInteger('id_card_type_id');
                $table->foreign('id_card_type_id')->references('id')->on('id_card_types');

            ####################################################
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
        Schema::dropIfExists('customers');
    }
}
