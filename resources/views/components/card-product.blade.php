<a href="/detalles" class="card producto">
    <div class="imgProducto">
        <img src="{{$img}}" alt="{{$producto}}">
    </div>
    <div class="detalles">
        <div class="moreDetalles">
            <div class="tag">
                <p>{{$tag}}</p>
            </div>
            <div class="iconOption">
                <i class='bx bx-heart iconoCard'></i>
            </div>
        </div>
        <div class="priceDes">
            @if (empty($descuento))
                <p class="precio">{{$precio}}</p>
            @else
                <p class="precio">De <span class="precioActivo">${{$precio}}</span></p>
                <p>a <span class="descuento">${{$descuento}}</span></p>
            @endif
            
        </div>
        <p class="descripcion">{{$slot}}</p>
    </div>
</a>