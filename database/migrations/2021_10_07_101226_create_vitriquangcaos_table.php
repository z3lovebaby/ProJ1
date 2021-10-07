<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitriquangcaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitriquangcaos', function (Blueprint $table) {
            $table->id();
            $table->string('VTQC_Ten');
            $table->text('VTQC_MoTa');
            $table->text('VTQC_AnhMacDinh');
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
        Schema::dropIfExists('vitriquangcaos');
    }
}
