<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization', function (Blueprint $table) {
            $table->id('id_organizacao')->autoIncrement();
            $table->string('no_organization', 255);
            $table->string('razao_social', 125);
            $table->string('no_representante', 255);
            $table->string('website', 100)->nullable();
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('cnpj', 18);
            $table->string('causa_soc', 55);
            $table->text('ds_atividades');
            $table->date('dt_fundacao');
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organization');
    }
}
