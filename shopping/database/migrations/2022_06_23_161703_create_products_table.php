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
        Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {
            $table->id('MA_SP');
            $table->string('TEN_SP');
            $table->bigInteger('MA_CUA_HANG');
            $table->decimal('GIA_SP',15,2);
            $table->integer('SL_CON_LAI')->default('0');
            $table->longText('MO_TA')->nullable();
            $table->longText('DANH_GIA')->nullable();
            $table->longText('ANH')->nullable();
            $table->timestamps();

            $table->unique(['TEN_SP', 'MA_CUA_HANG']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
