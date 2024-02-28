@extends('sesion.layouts.mainSesion')

@section('cssPage')
    <link rel="stylesheet" href="/css/sesionStyles/registerStyle.css">
@endsection

@section('main')
    <div class="container-left">
        <div class="container-center">
            <h1>Registrate</h1>
            <form action="{{route('confirmar')}}" method="POST">
                @csrf
                
                <fieldset>
                    <label for="">Nombre de usuario</label>
                    <input type="text" name="username" value="{{old('username')}}">
                    @error('username')
                        <span class="alert">*{{$message}}</span>
                    @enderror
                </fieldset>
    
                <fieldset>
                    <label for="">Nombre</label>
                    <input type="text" name="name">
                    @error('name')
                        <span class="alert">*{{$message}}</span>
                    @enderror
                </fieldset>
    
                <fieldset>
                    <label for="">Apellido paterno</label>
                    <input type="text" name="apellido_pa">
                    @error('apellido_pa')
                        <span class="alert">*{{$message}}</span>
                    @enderror
                </fieldset>

                <fieldset>
                    <label for="">Apellido materno</label>
                    <input type="text" name="apellido_ma">
                        @foreach ($errors->get('apellido_ma') as $item)
                            <span class="alert">{{$item}}</span>
                        @endforeach
                        {{-- <span class="alert">*{{$message}}</span> --}}
                </fieldset>
                
                <fieldset>
                    <label for="">Correo</label>
                    <input type="email" name="email">
                    @error('email')
                        <span class="alert">*{{$message}}</span>
                    @enderror
                </fieldset>
    
                <fieldset>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password">
                    @error('password')
                        <span class="alert">*{{$message}}</span>
                    @enderror
                </fieldset>
                
                <fieldset>
                    <label for="password">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation">
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