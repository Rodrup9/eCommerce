{{-- Sub menu --}}

<nav class="menuSecundario">
    <div class="menuHamburger">
        <i class='bx bx-menu iconMenu'></i>
    </div>
    <div class="listaOption">
{{-- Agreguen un elseif y condicionen el nombre de su modulo con la variable, utilicen las misma estructura de las 'a' para poner sus opciones--}}
        @if ($nameView == "Home" || $nameView == "Catalogo")
            <a href="catalogo/recientes" class="opcionSecundaria">Tecnologia</a>
            <a href="#" class="opcionSecundaria">Hogar</a>
            <a href="#" class="opcionSecundaria">Electrodomesticos</a>
            <a href="#" class="opcionSecundaria">Video Juegos</a>
            <a href="#" class="opcionSecundaria">Ropa</a>
            @if ($nameView == "Directorio")
                <div class="filtros"></div>
            @endif
        {{-- ejemplo
        @elseif ($nameView == "Prueba")
            <a href="#" class="opcionSecundaria">Ropa</a>
        --}}
        @else
            <p>Parece haber un problema: sin opciones</p>
        @endif
    </div>
</nav>