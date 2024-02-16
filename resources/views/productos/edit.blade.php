@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <h1>
        Editar producto
    </h1>

    <form action="{{ route('productos.editarProducto', $producto) }}" method="post">
        @csrf
        @method('put')
        <label for="">Nombre:
            <input name="nombre" type="text" value="{{ $producto->nombre }}" />
        </label>
        <br />
        <label for="">Precio:
            <input name="precio" type="number" value="{{ $producto->precio }}" />
        </label>
        <br />
        <label for="">Cantidad:
            <input name="cantidad" type="number" value="{{ $producto->cantidad }}" />
        </label>
        <br />
        <button type="submit">EDITAR PRODUCTO</button>
    </form>

@endsection
