<aside class="asideDesplegable">
    <nav class="navAsideDes">
        <ul class="ulNavAsideDes">
            @if ($nameView == 'Home' || $nameView == 'Catalogo')
                <li>
                    <h2>Inicio</h2>
                    <ul>
                        <li><a href="#">Ofertas del dias</a></li>
                        <li><a href="#">Lo más vendido</a></li>
                        <li><a href="#">Descuentos</a></li>
                    </ul>
                </li>
                <li>
                    <h2>Categorias</h2>
                    <ul>
                        <li><a href="#">Tecnologia</a></li>
                        <li><a href="#">Hogar</a></li>
                        <li><a href="#">Accesorios PC</a></li>
                        <li><a href="#">gamming</a></li>
                        <li><a href="#">Electrodomesticos</a></li>
                        <li><a href="#">Sala de estar</a></li>
                        <li><a href="#">Arte</a></li>
                        <li><a href="#">Ropa</a></li>
                    </ul>
                </li>
                <li>
                    <h2>Perfil</h2>
                    <ul>
                        <li><a href="#">Iniciar sesión</a></li>
                        <li><a href="#">Registrarse</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </nav>
</aside>