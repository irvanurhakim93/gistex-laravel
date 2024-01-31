<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerhitunganGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perhitungan_gaji', function (Blueprint $table) {
            $table->id();
            $table->string('periode');
            $table->date('tanggal');
            $table->string('kode_nik');
            $table->integer('jumlah_hadir');
            $table->decimal('gaji_pokok');
            $table->decimal('insentif');
            $table->decimal('pot_asuransi');
            $table->decimal('total_gaji');
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
        Schema::dropIfExists('perhitungan_gaji');
    }
}
