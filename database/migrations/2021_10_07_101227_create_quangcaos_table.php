<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuangcaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quangcaos', function (Blueprint $table) {
            $table->id();
            $table->string('QC_Ten');
            $table->unsignedBigInteger('QC_ViTriId');
            $table->foreign('QC_ViTriId')->references('id')->on('vitriquangcaos')->onDelete('cascade');
            $table->tinyInteger('QC_Loai');
            $table->text('QC_Nguon');
            $table->text('QC_HienThi');
            $table->string('QC_URL');
            $table->bigInteger('QC_Rong');
            $table->bigInteger('QC_Cao');
            $table->bigInteger('QC_ThuTu');
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
        Schema::dropIfExists('quangcaos');
    }
}
