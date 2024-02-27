@extends('sesion.layouts.mainSesion')

@section('cssPage')
    <link rel="stylesheet" href="/css/sesionStyles/mainCuenta.css">
@endsection

@section('main')
    <div class="container-center">
        <h1>Recuperación de cuenta</h1>
        <p>Te enviaremos un codigo de recuperación para tú contraseña</p>
        <form action="">
            <fieldset>
                <label for="">Correo</label>
                <input type="email" name="email">
            </fieldset>
            <button class="submit" type="submit">Enviar código</button>
        </form>
    </div>
@endsection