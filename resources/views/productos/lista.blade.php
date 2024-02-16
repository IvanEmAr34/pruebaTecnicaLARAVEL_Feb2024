@extends('layouts.plantilla')

@section('title',"Home")

@section("content")

<h1>
    Lista de productos  
</h1>

<a href="{{route('productos.nuevo')}}">Crear curso</a>
<ul>
    @foreach ($productos as $producto)
        <li>
            <a href="{{route('productos.show',$producto->id)}}">{{$producto->nombre}}</a>
        </li>
    @endforeach
</ul>

{{$productos->links()}}

@endsection