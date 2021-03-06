<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_tours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tour_id');
            $table->foreign('tour_id')->references('id')->on('tour');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('status');
            $table->tinyInteger('isUserOwnInfo');
            $table->string('fullname')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->nullable();
            $table->string('cmnd')->nullable();
            $table->integer('is_paid');
            $table->string('notes')->nullable();
            $table->string('tmp_invoice')->nullable();
            $table->string('paypal_token')->nullable();
            $table->string('paypal_payerid')->nullable();
            $table->string('paypal_invoiceid')->nullable();
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
        Schema::dropIfExists('book_tours');
    }
}
