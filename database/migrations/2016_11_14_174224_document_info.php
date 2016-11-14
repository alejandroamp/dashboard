<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocumentInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sold_to_part_key');
            $table->string('account_name');
            $table->string('business_name');
            $table->string('country');
            $table->enum('segment',['LE','GLOBAL']);
            $table->string('entity_type');
            $table->enum('b2b',['Yes','No']);
            $table->string('account_manager');
            $table->enum('geo',['AP','EMEA','LAM','AG']);
            $table->enum('theoldkey1',['Yes','No']);
            $table->string('theoldkey2')->default('FOCUS');
            $table->string('order_status')->default('Electronic');
            $table->enum('type',['Builder','Admin']);
            $table->timestamps();

            $table->integer('user_id')->unsigned();
            $table->integer('document_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('document_id')->references('id')->on('documents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('document_info');
    }
}
