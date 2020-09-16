<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKabarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabar', function (Blueprint $table) {
            $table->id();
            $table->text('judul');
            $table->enum('tipe_kabar',['kajian','berita'])->nullable();
            $table->text('isi_kabar');
            $table->text('foto_headline')->nullable();
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
        Schema::dropIfExists('kabar');
    }
}
