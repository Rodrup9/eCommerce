@extends('sesion.layouts.mainSesion')

@section('cssPage')
    <link rel="stylesheet" href="/css/sesionStyles/registerStyle.css">
@endsection

@section('main')
    <div class="container-left">
        <div class="container-center">
            <h1>Registrate</h1>
            <form action="{{route('confirmar')}}" method="POST">
                <fieldset>
                    <label for="">Nombre de usuario</label>
                    <input type="text" name="username">
                    @error('username')
                        <span class="alert">*{{$message}}</span>
                    @enderror
                </fieldset>
    
                <fieldset>
                    <label for="">Nombre</label>
                    <input type="text" name="name">
                    @error('username')
                        <span class="alert">*{{$message}}</span>
                    @enderror
                </fieldset>
    
                <fieldset>
                    <label for="">Apellidos</label>
                    <input type="text" name="lastName">
                    @error('username')
                        <span class="alert">*{{$message}}</span>
                    @enderror
                </fieldset>
                
                <fieldset>
                    <label for="">Correo</label>
                    <input type="email" name="email">
                    @error('username')
                        <span class="alert">*{{$message}}</span>
                    @enderror
                </fieldset>
    
                <fieldset>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password">
                    @error('username')
                        <span class="alert">*{{$message}}</span>
                    @enderror
                </fieldset>
                
                <fieldset>
                    <label for="password">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation">
                    @error('username')
                        <span class="alert">*{{$message}}</span>
                    @enderror
                </fieldset>
                <button class="submit" type="submit">Registrarse</button>
            </form>
        </div>
        

        <div class="container-right">
            <h1 class="title-right">Ingresar con</h1>
            <div class="elements">
                <div class="round"></div>
                <div class="round"></div>
                <div class="round"></div>
            </div>
            
        </div>


        <p class="changePage"><a href="{{route('login')}}">Iniciar sesión</a></p>
    </div>
@endsection