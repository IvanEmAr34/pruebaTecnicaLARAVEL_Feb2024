@extends('layouts.plantilla')

@section('title',"Home".$producto->nombre)

@section("content")

<h1>
    Detalles del producto {{$producto->nombre}}
</h1>

<br/>
<a href="{{route('productos.index')}}">Volver a productos</a>
<br/>

<div>
    <span>
        <strong>
            Producto:
        </strong>
        {{$producto->nombre}}
    </span>
    <br />
    <span>
        <strong>
            Precio:
        </strong>
        ${{$producto->precio}}
    </span>
    <br />
    <span>
        <strong>
            Cantidad:
        </strong>
        {{$producto->cantidad}}
    </span>
</div>
<br/>
<a href="{{route('productos.edit',$producto->id)}}">Editar producto</a>
<br/>

@endsection