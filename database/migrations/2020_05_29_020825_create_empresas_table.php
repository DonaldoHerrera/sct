<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('rfc',13)->nullable();
            $table->text('rep_legal')->nullable();
            $table->string('entidad',100)->nullable();
            $table->string('tipo_empresa',30)->nullable();
            $table->text('c_mic')->nullable();
            $table->string('fecha_creacion',4)->nullable();
            $table->text('domicilio_fiscal')->nullable();
            $table->text('accionistas')->nullable();
            $table->text('contacto')->nullable();
            $table->text('experiencia')->nullable();
            $table->text('empresas_relacion')->nullable();
            $table->text('invitacion')->nullable();
            $table->text('contrato')->nullable();
            $table->string('url_cv')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamp('date_delete')->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
