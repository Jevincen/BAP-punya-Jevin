<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PembayaranTable extends Migration
{

     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaranss', function (Blueprint $table) {
            $table->id();
            $table->char('StudentId_Mahasiswa', 30);
            $table->decimal('Jumlah_Pembayaran');
            $table->date('Tanggal_Pembayaran');
            $table->char('Metode_Bayar', 30);
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
        Schema::dropIfExists('pembayaranss');

    }
}
