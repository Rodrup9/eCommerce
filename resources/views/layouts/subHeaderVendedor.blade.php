<nav class="menu_opciones">
    <div class="icon_back">
        @if ($nameView == "Home")
            <a href="{{route("vendedor.pedidos")}}"><span class="material-symbols-outlined tmicon">home</span></a>
            
        @else
            <a href="{{route("vendedor.pedidos")}}"><span class="material-symbols-outlined tmicon">arrow_back</span></a>
        @endif
        <a href="">Opcion</a>
        <a href="">Opcion</a>
        <a href="">Opcion</a>
        <a href="">Opcion</a>
        <a href="">Opcion</a>
    </div>
    
</nav>