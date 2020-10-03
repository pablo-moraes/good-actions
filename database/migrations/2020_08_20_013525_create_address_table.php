<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id('id_endereco')->autoIncrement();
            $table->string('ds_cep', 10)->nullable();
            $table->string('ds_endereco', 150);
            $table->string('ds_cidade', 50);
            $table->string('ds_bairro', 50);
            $table->char('ds_UF', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
