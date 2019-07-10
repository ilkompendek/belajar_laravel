<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProdi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_prodi', 255);
            $table->timestamps();
        });

        //set foreign key di tabel mahasiswa
        Schema::table('mahasiswa',function(Blueprint $table){
            $table->foreign('id_prodi')
                  ->reference('id')->on('prodi')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodi');
        Schema::table('mahasiswa', function(Blueprint $table){
           $table->dropForeign('mahasiswa_id_prodi_foreign'); 
        });
        
    }
}
