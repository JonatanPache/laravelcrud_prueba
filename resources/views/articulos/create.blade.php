@extends('adminlte::page')

@section('title', 'CRUD LARAVEL 8')

@section('content_header')
    <h1>CREAR PRODUCTOS</h1>
@stop

@section('content')
<form action="/articulos" method="POST">
    @csrf
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">CODIGO</span>
        <input id="codigo" name="codigo" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">DESCRIPCION</span>
        <input id="descripcion" name="descripcion" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">CANTIDAD</span>
        <input id="cantidad" name="cantidad" type="number" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">PRECIO</span>
        <input id="precio" name="precio" type="number" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" step=".01">
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

