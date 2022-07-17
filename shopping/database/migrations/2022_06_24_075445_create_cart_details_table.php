<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('cart_details');
        Schema::create('cart_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('MA_GIO_HANG')->unsigned();
            $table->bigInteger('MA_SP')->unsigned();

            $table->foreign('MA_GIO_HANG')->references('MA_GIO_HANG')->on('carts')->onDelete('cascade');
            $table->foreign('MA_SP')->references('MA_SP')->on('products')->onDelete('cascade');
   
            $table->integer('SO_LUONG');
            $table->integer('DON_GIA');
            $table->integer('GIA');

            $table->unique(['MA_GIO_HANG', 'MA_SP']);
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
        Schema::dropIfExists('cart_details');
    }
};
