<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_a');
            $table->string('email_a');
            $table->integer('phone');
            $table->char('paymet');
            $table->integer('amount');
            $table->text('paymet_info');
            $table->char('messege');
            $table->char('security');
            $table->integer('status');           
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
        Schema::dropIfExists('order');
    }
}
