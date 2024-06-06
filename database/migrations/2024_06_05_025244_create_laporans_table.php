<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->char('kode_lapor', 10)->primary();
            $table->integer('id_pela');
            $table->string('penanggung');
            $table->string('alamat');
            $table->string('bencana');
            $table->string('no_hp',13);
            $table->string('foto')->nullable();
            $table->date('tanggal');
            $table->string('deskripsi');
            $table->char('status',1)->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
};
