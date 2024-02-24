@extends('layouts.header')


@section('cssPage')
    <link rel="stylesheet" href="detallesPedido.css">
@endsection




@section('subMenu')
    @include('subHeaderVendedor')
@endsection

@section('main')
    <div class="cont-detalles">
        <div class="Acciones">
            <h1>Nombre</h1>
            <a href="#"><span class="material-symbols-outlined">delete</span></a>
        </div>
        <div class="Detalles">
            <h2>Detalles generales</h2>
        </div>
    </div>
@endsection