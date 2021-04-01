<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->string('password');

            $table->string('nama');
            $table->string('posisi_yang_dilamar');
            $table->integer('nomor_ktp');
            $table->text('ttl');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('golongan_darah');
            $table->string('status');
            $table->string('alamat_ktp');
            $table->string('email')->unique();
            $table->integer('no_telp');
            $table->string('orang_terdekat_yang_dapat_dihubungi');
            $table->string('pendidikan_terakhir');
            $table->string('riwayat_pekerjaan');
            $table->string('skill');
            $table->string('bersdia_ditempatkan_diluar_kantor');
            $table->integer('penghasilan_yang_diharapkan');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
