

@extends('layouts.plantilla')

@section('content')
    
    <h1>Soldado</h1>

<form action="{{ route('soldado.store') }}" method="POST">

    @csrf
  <label>
    Nombre
    <br>
    <input type="text" name="Nombre">
</label>
<br> <br>
<label>
    Apellido
    <br>
    <input type="text" name="Apellido">
</label>
<br> <br>
<label>
    Grado
    <br>
    <input type="number" name="Grado">
</label>
<br> <br>
<label>
    Codigo de cuerpo especial 
    <br>
    <input type="number" name="CodigoCE">
</label>
<br> <br>
<label>
    Numero de compañia
    <br>
    <input type="number" name="NumCompañia">
</label>
<br> <br>
<label>
    Codigo de Cuartel
    <br>
    <input type="number" name="CodigoCuartel">
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection