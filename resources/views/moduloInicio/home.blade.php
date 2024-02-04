@extends('layouts.header')

{{-- Agreguen solo el archivo css del modulo en el que están --}}
{{-- El resto de estilos se encuentran en el archivo globales --}}
@section('cssPage')
    <link rel="stylesheet" href="/css/moduloInicio.css">
@endsection

{{-- Agregar esta parte si necesitan el submenu --}}
@section('subMenu')
    @include('layouts.subHeader')
@endsection
{{--  --}}

{{-- Contenido de la pagina --}}
@section('main')
    <main class="boxOfertas">
        <div class="tittle"><p>Ofertas especiales</p> <a class="verMas" href="catalogo/ofertas">Ver más</a></div>
        <div class="boxSliderOfertas">
            <div class="boxBoxOfertas">
                <div class="boxOfertaMain">
                    <div class="oferta1">Oferta</div>
                    <div class="oferta2">Oferta</div>
                    <div class="oferta3">Oferta</div>
                    <div class="oferta4">Oferta</div>
                    <div class="oferta5">Oferta</div>
                </div>
            </div>
        </div>
    </main>

    <section class="section sugerencias">
        <div class="tittle"><p>Busqiedas recientes</p> <a class="verMas" href="catalogo/recientes">Ver más</a></div>
        <div class="boxProductos">
            <div class="arrow">
                    <i class='bx bxs-chevron-left arrowIcon'></i>
            </div>
            <div class="sliderProductos">
                <div class="sliderBoxProductos">
                    <x-card-product :img="$img">
                        <x-slot name="producto">{{$nombre}}</x-slot>
                        <x-slot name="tag">{{$tag}}</x-slot>
                        <x-slot name="descuento">{{$descuento}}</x-slot>
                        <x-slot name="precio">{{$precio}}</x-slot>
                        {{$description}}
                    </x-card-product>
                    <x-card-product :img="$img">
                        <x-slot name="producto">{{$nombre}}</x-slot>
                        <x-slot name="tag">{{$tag}}</x-slot>
                        <x-slot name="descuento">{{$descuento}}</x-slot>
                        <x-slot name="precio">{{$precio}}</x-slot>
                        {{$description}}
                    </x-card-product>
                    <x-card-product :img="$img">
                        <x-slot name="producto">{{$nombre}}</x-slot>
                        <x-slot name="tag">{{$tag}}</x-slot>
                        <x-slot name="descuento">{{$descuento}}</x-slot>
                        <x-slot name="precio">{{$precio}}</x-slot>
                        {{$description}}
                    </x-card-product>
                    <x-card-product :img="$img">
                        <x-slot name="producto">{{$nombre}}</x-slot>
                        <x-slot name="tag">{{$tag}}</x-slot>
                        <x-slot name="descuento">{{$descuento}}</x-slot>
                        <x-slot name="precio">{{$precio}}</x-slot>
                        {{$description}}
                    </x-card-product>
                    <x-card-product :img="$img">
                        <x-slot name="producto">{{$nombre}}</x-slot>
                        <x-slot name="tag">{{$tag}}</x-slot>
                        <x-slot name="descuento">{{$descuento}}</x-slot>
                        <x-slot name="precio">{{$precio}}</x-slot>
                        {{$description}}
                    </x-card-product>
                </div>
            </div>
            <div class="arrow">
                    <i class='bx bxs-chevron-right arrowIcon'></i>
            </div>
        </div>
    </section>

    <section class="section ">
        <div class="tittle"><p>Sugerencias</p> <a class="verMas" href="catalogo/sugerencias">Ver más</a></div>
        <div class="boxProductos">
            <div class="arrow">
                    <i class='bx bxs-chevron-left arrowIcon'></i>
            </div>
            <div class="sliderProductos">
                <div class="sliderBoxProductos">
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem debitis quo harum dignissimos explicabo doloribus ut dolorem illo quas dolores.</p>
                        </div>
                    </div>
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">Descripcion breve</p>
                        </div>
                    </div>
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">Descripcion breve</p>
                        </div>
                    </div>
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">Descripcion breve</p>
                        </div>
                    </div>
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">Descripcion breve</p>
                        </div>
                    </div>
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">OUBNM</p>
                        </div>
                    </div>
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">Descripcion breve</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrow">
                    <i class='bx bxs-chevron-right arrowIcon'></i>
            </div>
        </div>
    </section>

    <section class="section ">
        <div class="tittle"><p>Tendencias</p> <a class="verMas" href="catalogo/tendencias">Ver más</a></div>
        <div class="boxProductos">
            <div class="arrow">
                    <i class='bx bxs-chevron-left arrowIcon'></i>
            </div>
            <div class="sliderProductos">
                <div class="sliderBoxProductos">
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem debitis quo harum dignissimos explicabo doloribus ut dolorem illo quas dolores.</p>
                        </div>
                    </div>
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">Descripcion breve</p>
                        </div>
                    </div>
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">Descripcion breve</p>
                        </div>
                    </div>
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">Descripcion breve</p>
                        </div>
                    </div>
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">Descripcion breve</p>
                        </div>
                    </div>
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">OUBNM</p>
                        </div>
                    </div>
                    <div class="card producto">
                        <div class="imgProducto">
                            <img src="/img/logo.jpeg" alt="">
                        </div>
                        <div class="detalles">
                            <p class="precio">$350</p>
                            <p class="descripcion">Descripcion breve</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrow">
                    <i class='bx bxs-chevron-right arrowIcon'></i>
            </div>
        </div>
    </section>

    <section class="section ">
        <div class="tittle"><p>No se</p> <a class="verMas" href="#">Ver más</a></div>
        <div class="boxProductos">
            <div class="arrow">
                    <i class='bx bxs-chevron-left arrowIcon'></i>
            </div>
            <div class="sliderProductos">
                <div class="sliderBoxProductos">
                    <x-card-product :img="$img">
                        <x-slot name="producto">{{$nombre}}</x-slot>
                        <x-slot name="tag">{{$tag}}</x-slot>
                        <x-slot name="descuento">{{$descuento}}</x-slot>
                        <x-slot name="precio">{{$precio}}</x-slot>
                        {{$description}}
                    </x-card-product>
                </div>
            </div>
            <div class="arrow">
                    <i class='bx bxs-chevron-right arrowIcon'></i>
            </div>
        </div>
    </section>

    <footer>
        
    </footer>
@endsection

{{-- Agregar los js de su modulo --}}
@section('jsPage')
    <script src=""></script>
@endsection