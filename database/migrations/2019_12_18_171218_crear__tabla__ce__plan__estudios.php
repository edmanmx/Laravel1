<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCePlanEstudios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ce_plan_estudios', function (Blueprint $table) {
            $table->String('ClaveCarrera', 4)->primary();
            $table->String('ClaveOficial',20)->unique();
            $table->String('Nombre',70);
            $table->smallInteger('IdPlanEstudiosGrupo');
            $table->date('FechaAutorizacion');
            $table->date('FechaImplantacion')->default("1900-01-01");
            $table->date('FechaLiquidacion')->default("1900-01-01");
            $table->smallInteger('Situacion');
            $table->smallInteger('Creditos');
            $table->smallInteger('CreditosEspecialidad')->default(0);
            $table->smallInteger('CreditosResidencia')->default(0);
            $table->smallInteger('Nivel');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ce_plan_estudios');
    }
}
