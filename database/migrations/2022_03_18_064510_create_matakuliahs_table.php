<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahsTable extends Migration
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
            $table->uuid('uuid')->unique();
            $table->string('ruangan')->nullable();
            $table->string('jam')->nullable();
            $table->string('namaMatakuliah')->nullable();
            $table->string('jumlahPertemuan')->nullable();
            $table->string('kelas')->nullable();
            $table->string('tanggalMulai')->nullable();
            $table->string('tanggalSelesai')->nullable();
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
        Schema::dropIfExists('matakuliahs');
    }
}
