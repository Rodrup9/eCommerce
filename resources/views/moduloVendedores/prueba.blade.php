@extends('layouts.header')
@section('main')
    <form action="{{route("vendedor.agg.producto")}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="imagen" id="imagen">
        <input type="submit" value="">
    </form>
@endsection