<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padarias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razao_social', 30);
            $table->string('telefone', 30);
            $table->string('endereco', 30);
            $table->string('cnpj', 20);
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
        Schema::dropIfExists('padarias');
    }
}
