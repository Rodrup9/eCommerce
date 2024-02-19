@extends('layouts.header')

@section('cssPage')
    <link rel="stylesheet" href="/css/moduloShoppingCart.css">
@endsection

@section('main')
    <main class="mainShoppingCart">
        @if ($user != null and $cart != null)
            <form class="sectionShoppingCart">
                <div class="headerMain">
                    <h1>Tú carrito de compras</h1>
                </div>
                <section class="productsCart"> 
                    <div class="productCart">
                        <input type="checkbox" name="" id="">
                        <img src="https://picsum.photos/200/300" alt="">
                        <p>Producto</p>
                        <input type="number" name="" id="">
                        <span>$2000</span>
                        <i class='bx bx-trash bxMy'></i>
                    </div>  
                    <div class="productCart">
                        <input type="checkbox" name="" id="">
                        <img src="https://picsum.photos/200/300" alt="">
                        <p>Producto</p>
                        <input type="number" name="" id="">
                        <span>$2000</span>
                        <i class='bx bx-trash bxMy'></i>
                    </div>  
                    <div class="productCart">
                        <input type="checkbox" name="" id="">
                        <img src="https://picsum.photos/200/300" alt="">
                        <p>Producto</p>
                        <input type="number" name="" id="">
                        <span>$2000</span>
                        <i class='bx bx-trash bxMy'></i>
                    </div>  
                    <div class="productCart">
                        <input type="checkbox" name="" id="">
                        <img src="https://picsum.photos/200/300" alt="">
                        <p>Producto</p>
                        <input type="number" name="" id="">
                        <span>$2000</span>
                        <i class='bx bx-trash bxMy'></i>
                    </div>  
                    <div class="productCart">
                        <input type="checkbox" name="" id="">
                        <img src="https://picsum.photos/200/300" alt="">
                        <p>Producto</p>
                        <input type="number" name="" id="">
                        <span>$2000</span>
                        <i class='bx bx-trash bxMy'></i>
                    </div>  
                    <div class="productCart">
                        <input type="checkbox" name="" id="">
                        <img src="https://picsum.photos/200/300" alt="">
                        <p>Producto</p>
                        <input type="number" name="" id="">
                        <span>$2000</span>
                        <i class='bx bx-trash bxMy'></i>
                    </div>  
                    <div class="productCart">
                        <input type="checkbox" name="" id="">
                        <img src="https://picsum.photos/200/300" alt="">
                        <p>Producto</p>
                        <input type="number" name="" id="">
                        <span>$2000</span>
                        <i class='bx bx-trash bxMy'></i>
                    </div>  
                    <div class="productCart">
                        <input type="checkbox" name="" id="">
                        <img src="https://picsum.photos/200/300" alt="">
                        <p>Producto</p>
                        <input type="number" name="" id="">
                        <span>$2000</span>
                        <i class='bx bx-trash bxMy'></i>
                    </div>  
                </section>
                <p class="fraseFooter">Selecciona los productos que desees comprar</p>
                <div class="buttonCart">
                    <button class="btnText btnCancel">Cancelar</button>
                    <button class="btnText btnConfirm">Pagar</button>
                </div>
                <a href="{{$urlPage}}" class="buttonRegresar">{{$urlPage}}</a>
            </form>
            
        @elseif ($user != null)
            <div class="sinProductos sin">
                <h2>Añade productos a tu carrito de compras</h2>
                <img src="/svg/empty.svg" alt="">
                <a class="btnText btnNeutro" href="/catalogo/explorar">Explorar</a>
            </div>
        @else
            <div class="sinSesion sin">
                <h2>Inicia sesión para ver tus productos</h2>
                <img src="/svg/shopping-cart.svg" alt="">
                <div class="buttonCart">
                    <a class="btnText btnNeutro" href="#">Iniciar sesión</a>
                    <a class="btnText btnNeutro" href="#">Crear cuenta</a>
                </div>
            </div>
        @endif
        <div></div>
    </main>

@endsection

@section('jsPage')
    <script src="/js/moduloShoppingCart.js"></script>
@endsection