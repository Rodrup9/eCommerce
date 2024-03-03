@extends('layouts.header')


@section('cssPage')
    <link rel="stylesheet" href="/css/moduloInicio.css">
    <link rel="stylesheet" href="/css/components.css">
@endsection


@section('subMenu')
    @include('layouts.subHeader')
@endsection

@section('main')
    @include('layouts.asideDes')
    <div class="divCenterMain">
        <main class="mainCatalogo">
            <section class="boxProductosCatalogo">
                <x-card-product :img="$products['product']['img']">
                    <x-slot name="producto">{{$products['product']['name']}}</x-slot>
                    <x-slot name="tag">{{$products['product']['tag']}}</x-slot>
                    <x-slot name="descuento">{{$products['product']['descuento']}}</x-slot>
                    <x-slot name="precio">{{$products['product']['precio']}}</x-slot>
                    {{$products['product']['description']}}
                </x-card-product>
                <x-card-product :img="$products['product']['img']">
                    <x-slot name="producto">{{$products['product']['name']}}</x-slot>
                    <x-slot name="tag">{{$products['product']['tag']}}</x-slot>
                    <x-slot name="descuento">{{$products['product']['descuento']}}</x-slot>
                    <x-slot name="precio">{{$products['product']['precio']}}</x-slot>
                    {{$products['product']['description']}}
                </x-card-product>
                <x-card-product :img="$products['product']['img']">
                    <x-slot name="producto">{{$products['product']['name']}}</x-slot>
                    <x-slot name="tag">{{$products['product']['tag']}}</x-slot>
                    <x-slot name="descuento">{{$products['product']['descuento']}}</x-slot>
                    <x-slot name="precio">{{$products['product']['precio']}}</x-slot>
                    {{$products['product']['description']}}
                </x-card-product>
                <x-card-product :img="$products['product']['img']">
                    <x-slot name="producto">{{$products['product']['name']}}</x-slot>
                    <x-slot name="tag">{{$products['product']['tag']}}</x-slot>
                    <x-slot name="descuento">{{$products['product']['descuento']}}</x-slot>
                    <x-slot name="precio">{{$products['product']['precio']}}</x-slot>
                    {{$products['product']['description']}}
                </x-card-product>
                <x-card-product :img="$products['product']['img']">
                    <x-slot name="producto">{{$products['product']['name']}}</x-slot>
                    <x-slot name="tag">{{$products['product']['tag']}}</x-slot>
                    <x-slot name="descuento">{{$products['product']['descuento']}}</x-slot>
                    <x-slot name="precio">{{$products['product']['precio']}}</x-slot>
                    {{$products['product']['description']}}
                </x-card-product>
                <x-card-product :img="$products['product']['img']">
                    <x-slot name="producto">{{$products['product']['name']}}</x-slot>
                    <x-slot name="tag">{{$products['product']['tag']}}</x-slot>
                    <x-slot name="descuento">{{$products['product']['descuento']}}</x-slot>
                    <x-slot name="precio">{{$products['product']['precio']}}</x-slot>
                    {{$products['product']['description']}}
                </x-card-product>
                <x-card-product :img="$products['product']['img']">
                    <x-slot name="producto">{{$products['product']['name']}}</x-slot>
                    <x-slot name="tag">{{$products['product']['tag']}}</x-slot>
                    <x-slot name="descuento">{{$products['product']['descuento']}}</x-slot>
                    <x-slot name="precio">{{$products['product']['precio']}}</x-slot>
                    {{$products['product']['description']}}
                </x-card-product>
                <x-card-product :img="$products['product']['img']">
                    <x-slot name="producto">{{$products['product']['name']}}</x-slot>
                    <x-slot name="tag">{{$products['product']['tag']}}</x-slot>
                    <x-slot name="descuento">{{$products['product']['descuento']}}</x-slot>
                    <x-slot name="precio">{{$products['product']['precio']}}</x-slot>
                    {{$products['product']['description']}}
                </x-card-product>
                <x-card-product :img="$products['product']['img']">
                    <x-slot name="producto">{{$products['product']['name']}}</x-slot>
                    <x-slot name="tag">{{$products['product']['tag']}}</x-slot>
                    <x-slot name="descuento">{{$products['product']['descuento']}}</x-slot>
                    <x-slot name="precio">{{$products['product']['precio']}}</x-slot>
                    {{$products['product']['description']}}
                </x-card-product>
            </section>
        </main>
    </div>
@endsection

@section('jsPage')

@endsection