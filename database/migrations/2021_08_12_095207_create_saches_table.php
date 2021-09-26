<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('S_DanhmucId');
            $table->string('S_Ten');
            $table->string('S_Ma');
            $table->string('S_Anh');
            $table->text('S_Mota');
            $table->text('S_Chitiet');
            $table->timestamps();
            $table->string('S_TuKhoa');
            $table->integer('S_GiaBan');
            $table->binary('S_TrangThai');
            $table->integer('S_SoLanXem');
            $table->char('S_KichCo');
            $table->unsignedBigInteger('S_NXBId');
            $table->integer('S_GiaNhap');
            $table->integer('S_SoLuong');
            $table->integer('S_ViTri');
            $table->integer('S_NguyenBo');
            $table->unsignedBigInteger('S_TacGiaId');
            $table->integer('S_CamNang');
            $table->foreign('S_NXBId')->references('id')->on('nxbs')->onDelete('cascade');
            $table->foreign('S_DanhmucId')->references('id')->on('danhmucsaches')->onDelete('cascade');
            $table->foreign('S_TacGiaId')->references('id')->on('tacgias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saches');
    }
}
