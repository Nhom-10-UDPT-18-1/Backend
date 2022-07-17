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
        Schema::dropIfExists('contracts');
        Schema::dropIfExists('profiles');
        Schema::create('profiles', function (Blueprint $table) {
            // $table->foreignId('MA_NGUOI_DUNG')->constrained('users')->unique();
            $table->bigInteger('id')->unsigned()->unique()->primary();
            $table->string('TEN')->nullable();
            $table->string('CMND')->nullable();
            $table->string('SDT')->nullable();
            $table->date('NGAY_SINH')->nullable();
            $table->longText('DIA_CHI')->nullable();
            
            
            // $table->string('VAI_TRO');

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('profiles');
    }
};
