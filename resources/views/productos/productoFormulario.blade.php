@extends('layouts.plantilla')

@section('title',"Home")

@section("content")

<h1>
    vista create    
</h1>

<form action="{{route('productos.nuevoProducto')}}" method="POST" >
    @csrf
    <label for="">Nombre:
        <input name="nombre" type="text" value="nuevo nombre"/>
    </label>
    <br />
    <label for="">Precio:
        <input name="precio" type="number" value="12.93" />
    </label>
    <br />
    <label for="">Cantidad:
        <input name="cantidad" type="number" value="55" />
    </label>
    <br />
<button type="submit">Enviar formulario</button>
</form>

@endsection