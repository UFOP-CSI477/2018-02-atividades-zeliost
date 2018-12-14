<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('empresa_id');
            $table->string('servico', 50);
            $table->string('imgservico', 60);
            $table->string('email', 60);
            $table->string('telefone', 20);
            $table->string('distancia', 100);
            $table->timestamps();
        });

        Schema::table('servicos', function(Blueprint $table){
              $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('servicos', function(Blueprint $table){
              $table->foreign('empresa_id')->references('id')->on('empresas');
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}
