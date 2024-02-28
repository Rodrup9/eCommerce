{{-- Sub menu --}}

<nav class="menuSecundario">
    <div id="menuHamburger" class="menuHamburger">
        <i class='bx bx-menu iconMenu'></i>
        <input id="inHamburger" type="hidden" value="open">
    </div>
    <div class="listaOption">
{{-- Agreguen un elseif y condicionen el nombre de su modulo con la variable, utilicen las misma estructura de las 'a' para poner sus opciones--}}
        @if ($nameView == "Home" || $nameView == "Catalogo")
            <a href="#" class="opcionSecundaria">Tecnologia</a>
            <a href="#" class="opcionSecundaria">Hogar</a>
            <a href="#" class="opcionSecundaria">Electrodomesticos</a>
            <a href="#" class="opcionSecundaria">Video Juegos</a>
            <a href="#" class="opcionSecundaria">Ropa</a>
        {{-- ejemplo
        @elseif ($nameView == "Prueba")
            <a href="#" class="opcionSecundaria">Ropa</a>
        --}}
        @else
            <p>Parece haber un problema: sin opciones</p>
        @endif
    </div>
    @if ($nameView == "Catalogo" || $nameView == 'Historial')
        <div class="filtros">
            <i class='bx bx-filter bxMy' ></i>
            
        </div>
    @endif
</nav>