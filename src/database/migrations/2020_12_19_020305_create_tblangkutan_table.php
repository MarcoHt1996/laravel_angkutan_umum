<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblangkutanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblangkutan', function (Blueprint $table) {
            $table->id("id_angkutan");
            $table->string("nopol_angkutan",4);
            $table->enum("jurusan",['bandaaceh','medan','pekanbaru','riau','jambi']);
            $table->string("tarif",8);
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
        Schema::dropIfExists('tblangkutan');
    }
}
