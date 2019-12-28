<?php

namespace App\Models\ControlEscolar;

use Illuminate\Database\Eloquent\Model;

class PlanEstudios extends Model
{
    protected $table = "ce_plan_estudios";
    protected $fillable = ['ClaveCarrera', 'ClaveOficial', 'Nombre',
    'IdPlanEstudiosGrupo', ' FechaAutorizacion ', 'FechaImplantacion',
    'FechaLiquidacion','Situacion','Creditos','CreditosEspecialidad',
    'CreditosResidencia','Nivel'];
    public $timestamps = true;
}
