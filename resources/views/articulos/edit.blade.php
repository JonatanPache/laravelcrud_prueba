@extends('adminlte::page')

@section('title', 'CRUD LARAVEL 8 ')

@section('content_header')
    <h1>EDITAR PRODUCTOS</h1>
@stop

@section('content')
<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">CODIGO</span>
        <input id="codigo" name="codigo" type="text"  value="{{$articulo->id}}" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">DESCRIPCION</span>
        <input id="descripcion" name="descripcion" type="text" value="{{$articulo->descripcion}}" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">CANTIDAD</span>
        <input id="cantidad" name="cantidad" type="number" value="{{$articulo->cantidad}}" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">PRECIO</span>
        <input id="precio" name="precio" type="number" value="{{$articulo->precio}}" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">CANCELAR</a>
    <button type="submit" class="btn btn-primary" tabindex="4">GUARDAR</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
