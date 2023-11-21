<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalkuliahsTable extends Migration
{

     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->char('Kode_Matakuliah', 8);
            $table->char('Kode_Term', 8);
            $table->char('Kode_Dosen_Pengampu', 8);
            $table->char('Hari', 6);
            $table->time('Jam_Mulai_Perkuliahan');
            $table->time('Jam_Selesai_Perkuliahan');
            $table->char('Ruangan_Kelas', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voidmatakuliahs
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_kuliahs');

    }
}