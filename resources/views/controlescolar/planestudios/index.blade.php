@extends("theme.$theme.layout")
@section('titulo')
Control Escolar - Planes de Estudio
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Plan de Estudios</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('crear_plan_estudios')}}" class="btn btn-danger btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                    </a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th width="3%">ClaveCarrera</th>
                            <th>Plan de Estudios</th>
                            <th>Nombre</th>
                            <th>Grupo</th>
                            <th>Autorización</th>
                            <th>Implantación</th>
                            <th>Liquidación</th>
                            <th>Situación</th>
                            <th>Créditos</th>
                            <th>Créditos Especialidad</th>
                            <th>Créditos Residencia</th>
                            <th>Nivel</th>
                            <th>Alta en sistema</th>
                            <th>Modificada</th>
                            <th class="width30"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->ClaveCarrera}}</td>
                            <td>{{$data->ClaveOficial}}</td>
                            <td>{{$data->Nombre}}</td>
                            <td>{{$data->IdPlanEstudiosGrupo}}</td>
                            <td>{{$data->FechaAutorizacion}}</td>
                            <td>{{$data->FechaImplantacion}}</td>
                            <td>{{$data->FechaLiquidacion}}</td>
                            <td>{{$data->Situacion}}</td>
                            <td>{{$data->Creditos}}</td>
                            <td>{{$data->CreditosEspecialidad}}</td>
                            <td>{{$data->CreditosResidencia}}</td>
                            <td>{{$data->Nivel}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->updated_at}}</td>
                            <td>
                                <a href="{{route('editar_plan_estudios', ['ClaveCarrera' => $data->ClaveCarrera])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>
                                <form action="{{route('eliminar_plan_estudios', ['ClaveCarrera' => $data->ClaveCarrera])}}" class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection