@extends('layouts.headerVendedor')

@section("css")
    <link rel="stylesheet" href="/css/ProductoVendedor.css">
@endsection

@section('content')
    <section class="contenido_producto">
        {{-- <form action="" method="post" class="formP"> --}}
            <div class="datos_producto">
                <h1 class="subtitle">Nuevo Producto</h1>
                <div class="info_principal">
                    <label class="labFomr" for="">Nombre del producto</label>
                    <input class="inlargo" type="text">
                    <label class="labFomr" for="">Descripción del producto</label>
                    <textarea class="inlargo" name="" id="" cols="30" rows="10"></textarea>
                    <label class="labFomr" for="">Precio</label>
                    <input class="incorto" type="number" name="" id="">
                    <label class="labFomr" for="">Cantidad</label>
                    <input class="incorto" type="number" name="" id="">
                </div>
                <div class="info_entrega">
                    <h2 class="subtitle">Tipo de entrega</h2>
                    <div class="info_tipos_entrega">
                        <input  type="radio" name="" id="">
                        <label class="labFomr" for="">Recoger</label>
                        
                        <input type="radio" name="" id="">
                        <label class="labFomr" for="">Envio</label>
                        
                        <input type="radio" name="" id="">
                        <label class="labFomr" for="">Ambos</label>
                    </div>
                    <div class="vinculo_direccion">
                        <input type="checkbox" name="" id="">
                        <p>Vincular dirección: </p>
                    </div>
                    <div class="agregar_direccion">
                        <label  class="labFomr" for="">Agregar una nueva dirección</label>
                        <input class="inlargo" type="text" name="" id="">
                    </div>
                </div>
                <div class="btns_acciones">
                    <a class="btnregresar" href="#">Regresar</a>
                    <button class="aggProduc" type="submit">Agregar Producto</button>
                </div>
            </div>
            <div class="opc_avanzada">
                    <h3 class="subtitle">Configuración avanzada</h3>
                    <img src="" alt="">
                    <input type="image" src="" alt="">
                    <p>Imagenes añadidas</p>
                    <div class="imgs-agg">
                        <img class="img-mas" src="https://www.innovasport.com/medias/gorra-new-era-59fifty-chicago-white-sox-authentic-2018-is-70358700-1.jpg?context=bWFzdGVyfGltYWdlc3wyMTc5OTh8aW1hZ2UvanBlZ3xpbWFnZXMvaGE1L2gzYy85NzkzNjU5NDA0MzE4LmpwZ3xiMjhkNjc1ZGE5YWQ0YzQxMTg2MmU3ZjY2ZWZlYjkzYzNmY2E2YWU2ZGQyYmFhZjFjMjE5ZjNlYTMzNjAwYzRi" alt="">
                        <img class="img-mas" src="https://www.innovasport.com/medias/gorra-new-era-59fifty-chicago-white-sox-authentic-2018-is-70358700-1.jpg?context=bWFzdGVyfGltYWdlc3wyMTc5OTh8aW1hZ2UvanBlZ3xpbWFnZXMvaGE1L2gzYy85NzkzNjU5NDA0MzE4LmpwZ3xiMjhkNjc1ZGE5YWQ0YzQxMTg2MmU3ZjY2ZWZlYjkzYzNmY2E2YWU2ZGQyYmFhZjFjMjE5ZjNlYTMzNjAwYzRi" alt="">
                        <img class="img-mas" src="https://www.innovasport.com/medias/gorra-new-era-59fifty-chicago-white-sox-authentic-2018-is-70358700-1.jpg?context=bWFzdGVyfGltYWdlc3wyMTc5OTh8aW1hZ2UvanBlZ3xpbWFnZXMvaGE1L2gzYy85NzkzNjU5NDA0MzE4LmpwZ3xiMjhkNjc1ZGE5YWQ0YzQxMTg2MmU3ZjY2ZWZlYjkzYzNmY2E2YWU2ZGQyYmFhZjFjMjE5ZjNlYTMzNjAwYzRi" alt="">
                    </div>
                    <label class="labFomr" for="">Agregar descuento inicial</label>
                    <input type="number" name="" id="">
                    <label class="labFomr" for="">Fecha limite de descuento</label>
                    <input type="date" name="" id="">
            </div>
            <div class="img_producto">
                <img class="img-principal" src="https://www.innovasport.com/medias/gorra-new-era-59fifty-chicago-white-sox-authentic-2018-is-70358700-1.jpg?context=bWFzdGVyfGltYWdlc3wyMTc5OTh8aW1hZ2UvanBlZ3xpbWFnZXMvaGE1L2gzYy85NzkzNjU5NDA0MzE4LmpwZ3xiMjhkNjc1ZGE5YWQ0YzQxMTg2MmU3ZjY2ZWZlYjkzYzNmY2E2YWU2ZGQyYmFhZjFjMjE5ZjNlYTMzNjAwYzRi" alt="">
                <input type="image" src="" alt="">
            </div>
        {{-- </form> --}}
    </section>
    
@endsection