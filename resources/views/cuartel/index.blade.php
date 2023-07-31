

@extends('layouts.plantilla')

@section('content')
    
    <h1>Cuartel</h1>

<form action="{{ route('cuartel.store') }}" method="POST">

    @csrf
  <label>
    Nombre
    <br>
    <input type="text" name="Nombre">
</label>
<br> <br>
<label>
    Ubicacion
    <br>
    <input type="text" name="Ubicacion">
</label>

<button type="submit">Enviar formulario</button>
</form>

@endsection