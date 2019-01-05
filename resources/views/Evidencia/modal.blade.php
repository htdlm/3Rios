@extends('layouts.modal')
@section('titulo')
Nueva Evidencia
@endsection
@section('body')
<form action="Evidencia/agregar" method="post" id="frmAgregar" enctype="multipart/form-data" files="true">
    {{csrf_field()}}
    <div class="row">
        <div class="col-lg-12">
          <label for="Numero de evidencia">Numero de evidencia</label>
          <input type="number" class="form-control" placeholder="Numero de evidencia" name="NumEvi" value="{{old('NumEvi')}}">

          <label for="movimiento">Movimiento</label>
          <select class="form-control" name="MovId">
            <option value="1">AD17</option>
  <!-- Movimiento pendiente -->
          </select>

            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" name="DesEvi" value="{{old('DesEvi')}}" placeholder="Descripcion de la evidencia">

            <label for="Fecha de presentacion">Fecha de presentacion</label>
            <input type="date" class="form-control" placeholder="Fecha de presentacion" name="FecPre" value="<?php echo date('Y-m-d'); ?>">

            <label for="Fecha de retorno">Fecha de retorno</label>
            <input type="date" class="form-control" placeholder="Fecha de retorno" name="FecRet" value="<?php echo date('Y-m-d'); ?>">

            <label for="observacion">Observacion</label>
            <textarea class="form-control" placeholder="Observaciones" name="ObsEvi" value="{{old('ObsEvi')}}"></textarea>

            <label for="Archivo">Archivo</label>
            <input type="file" class="form-control" placeholder="Archivo" name="ArcEvi" value="{{old('ArcEvi')}}">

        </div>
    </div>
    <input type="submit" class="btn btn-success btn-block btn-lg mt-4" value="Agregar" id="btnCrear">
</form>
@endsection