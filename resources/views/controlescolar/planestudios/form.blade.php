<div class="form-group row">
    <label for="ClaveCarrera" class="col-lg-2 control-label requerido">Clave de Carrera</label>
    <div class="col-lg-8">
    <input type="text" name="ClaveCarrera" id="ClaveCarrera" class="form-control" value="{{old('ClaveCarrera', $data->ClaveCarrera ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="ClaveOficial" class="col-lg-2 control-label requerido">Clave Oficial</label>
    <div class="col-lg-8">
    <input type="text" name="ClaveOficial" id="ClaveOficial" class="form-control" value="{{old('ClaveOficial', $data->ClaveOficial ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="Nombre" class="col-lg-2 control-label requerido">Nombre</label>
    <div class="col-lg-8">
    <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{old('Nombre', $data->Nombre ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="IdPlanEstudiosGrupo" class="col-lg-2 control-label requerido">Id Plan Estudios Grupo</label>
    <div class="col-lg-8">
    <input type="text" name="IdPlanEstudiosGrupo" id="IdPlanEstudiosGrupo" class="form-control" value="{{old('IdPlanEstudiosGrupo', $data->IdPlanEstudiosGrupo ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="FechaAutorizacion" class="col-lg-2 control-label requerido">Fecha de Autorizacion</label>
    <div class="col-lg-8">
    <input type="text" name="FechaAutorizacion" id="FechaAutorizacion" class="form-control" value="{{old('nombre', $data->FechaAutorizacion ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="FechaImplantacion" class="col-lg-2 control-label">Fecha de Implantacion</label>
    <div class="col-lg-8">
    <input type="text" name="FechaImplantacion" id="FechaImplantacion" class="form-control" value="{{old('FechaImplantacion', $data->FechaImplantacion ?? '')}}" />
    </div>
</div>
<div class="form-group row">
    <label for="FechaLiquidacion" class="col-lg-2 control-label">Fecha de Liquidación</label>
    <div class="col-lg-8">
    <input type="text" name="FechaLiquidacion" id="FechaLiquidacion" class="form-control" value="{{old('FechaLiquidacion', $data->FechaLiquidacion ?? '')}}"/>
    </div>
</div>
<div class="form-group row">
    <label for="Situacion" class="col-lg-2 control-label requerido">Situación</label>
    <div class="col-lg-8">
    <input type="text" name="Situacion" id="Situacion" class="form-control" value="{{old('Situacion', $data->Situacion ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="Creditos" class="col-lg-2 control-label requerido">Créditos</label>
    <div class="col-lg-8">
    <input type="text" name="Creditos" id="Creditos" class="form-control" value="{{old('Creditos', $data->Creditos ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="CreditosEspecialidad" class="col-lg-2 control-label">Créditos Especialidad</label>
    <div class="col-lg-8">
    <input type="text" name="CreditosEspecialidad" id="CreditosEspecialidad" class="form-control" value="{{old('CreditosEspecialidad', $data->CreditosEspecialidad ?? '')}}"/>
    </div>
</div>
<div class="form-group row">
    <label for="CreditosResidencia" class="col-lg-2 control-label">Creditos Residencia</label>
    <div class="col-lg-8">
    <input type="text" name="CreditosResidencia" id="CreditosResidencia" class="form-control" value="{{old('CreditosResidencia', $data->CreditosResidencia ?? '')}}"/>
    </div>
</div>
<div class="form-group row">
    <label for="Nivel" class="col-lg-2 control-label requerido">Nivel</label>
    <div class="col-lg-8">
    <input type="text" name="Nivel" id="Nivel" class="form-control" value="{{old('Nivel', $data->Nivel ?? '')}}" required/>
    </div>
</div>