<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThehangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thehangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('TH_KhachHangId');
            $table->dateTime('TH_Ngay');
            $table->integer("TH_ThanhTien");
            $table->binary('TH_TrangThai');
            $table->timestamps();
            $table->foreign('TH_KhachHangId')->references('id')->on('khachhangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thehangs');
    }
}
