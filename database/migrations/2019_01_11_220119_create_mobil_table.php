<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil', function (Blueprint $table) {            
         $table->increments('id_mobil');            
         $table->string('nama_mobil');
         $table->string('merek');
         $table->string('kategori');
         $table->integer('Harga');
         $table->integer('Tahun');         
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
       Schema::dropIfExists('mobil');
    }
}
