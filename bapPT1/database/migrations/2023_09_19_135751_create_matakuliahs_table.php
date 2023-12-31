<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class programStudi extends Migration
{

     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->id();
            $table->char('kode_matakuliah', 8);
            $table->text('nama_Matakuliah');
            $table->integer('sks');
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
        Schema::dropIfExists('matakuliahs');

    }
}
