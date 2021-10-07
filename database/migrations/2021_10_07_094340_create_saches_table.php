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
            $table->unsignedBigInteger('S_DanhMucId');
            $table->foreign('S_DanhMucId')->references('id')->on('danhmucsaches')->onDelete('cascade');
            $table->string('S_Ten');
            $table->string('S_Ma');
            $table->text('S_Anh');
            $table->text('S_FileUpload');
            $table->text('S_MoTa');
            $table->text('S_ChiTiet');
            $table->text('S_TuKhoa');
            $table->integer('S_GiaBan');
            $table->binary('S_TrangThai');
            $table->integer('S_SoLanXem');
            $table->char('S_KichCo');
            $table->unsignedBigInteger('S_NXBId');
            $table->foreign('S_NXBId')->references('id')->on('nxbs')->onDelete('cascade');
            $table->integer('S_GiaNhap');
            $table->integer('S_SoLuong');
            $table->integer('S_ViTri');
            $table->integer('S_NguyenBo');
            $table->unsignedBigInteger('S_TacGiaId');
            $table->foreign('S_TacGiaId')->references('id')->on('tacgias')->onDelete('cascade');
            $table->integer('S_CanNang');
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
        Schema::dropIfExists('saches');
    }
}
