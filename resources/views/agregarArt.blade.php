@extends('template')

@section('titulo')
     Agregar Artículo 
@endsection

@section('contenido')

<!-- INICIA FORMULARIO -->

        <div class="container text-center fw-bold mt-5 mb-5">
            <h1>
                <font face="Comic Sans MS,arial,verdana" class="text-light"> 
                    Agregar nuevo artículo
                </font>
            </h1>
        </div>

        @if($errors->any())

        @foreach($errors->all() as $error)
    
    
        @endforeach
        
        @endif

    <div class="container text-center border-blue-200 bg-blue-500 
    hover:bg-blue-700 px-4 py-2 rounded-md" 
    style="background-color: rgba(130, 112, 153, 0.616)" >

        <font face="Comic Sans MS,arial,verdana" class="text-light"> 
        <div class="container mb-3 text-center">
            <div class="mt-4 mb-3"> 
                <h4> ______________________________________________________________________</h4>
            </div>

<!-- INICIA FORMULARIO -->

         <form action="" method="post">
            
                <!-- PRIMER Y SEGUNDO LABEL E INPUT -->
                    <div class="mt-3">
                        <label class="form-label mt-2">   </label>
                        <!-- GRUPO DE INPUTS -->
                        <div class="input-group">
                            <span class="input-group-text">CANTIDAD</span>
                              <!-- INPUT Cantidad -->
                            <input type="number" 
                            class="form-control" 
                            placeholder="Cantidad de piezas"
                            name="cantAdd"
                            value="{{old('cantAdd')}}">
                            <p class="text-light fst-italic fw-bold"> 
                                {{ $errors->first('cantAdd') }} </p>

                            <span class="input-group-text">TIPO</span>
                            <!-- INPUT Tipo -->
                            <input type="text" 
                            class="form-control" 
                            placeholder="Tipo de producto" 
                            name="tipoAdd"
                            value="{{old('tipoAdd')}}">
                            <p class="text-light fst-italic fw-bold"> 
                                {{ $errors->first('tipoAdd') }} </p>

                        </div>
                    </div>

                <!-- TERCER Y CUARTO LABEL E INPUT -->

                    <label class="form-label mt-3">   </label>
                    <!-- GRUPO DE INPUTS -->
                    <div class="input-group mb-4">
                        <span class="input-group-text">DESCRIPCIÓN</span>
                        <!-- INPUT Descripción -->
                        <input type="text" 
                        class="form-control" 
                        placeholder="Acerca del producto"
                        name="descAdd"
                        value="{{old('descAdd')}}">
                        <p class="text-light fst-italic fw-bold"> 
                            {{ $errors->first('descAdd') }} </p>

                        <span class="input-group-text">MARCA</span>
                        <!-- INPUT Marca -->
                        <input type="text" 
                        class="form-control" 
                        placeholder="Marca del producto"
                        name="marcaAdd"
                        value="{{old('marcaAdd')}}">
                        <p class="text-light fst-italic fw-bold"> 
                            {{ $errors->first('marcaAdd') }} </p>

                    </div>

                <!-- QUINTO LABEL E INPUT -->
                
                    <div class="input-group mb-3 ">
                        <span class="input-group-text">PRECIO DE COMPRA  : </span>
                        <!-- INPUT Precio Compra -->
                        <input type="text" 
                        class="form-control" 
                        placeholder="$ de compra"
                        name="precioCadd"
                        value="{{old('precioCadd')}}">
                        <p class="text-light fst-italic fw-bold"> 
                            {{ $errors->first('precioCadd') }} </p>
                 </div>
                      

                <!-- BOTON -->
                <div class="d-grid gap-2 col-3 mx-auto mt-4">
             <div class="container text-center">
                <div class="btn-toolbar" role="toolbar">
                <div class="col">
                    <div class="btn-group me-2" role="group">
                        <button type="button" class="btn btn-danger mb-1">Cancelar</button>
                    </div>

                </div>
                <div class="col">
                    <div class="btn-group me-2" role="group">
                        <button type="submit" class="btn btn-light mb-1">Enviar</button>
                    </div>
                </div>
               </div>
              </div>
             </div> 
         </form>
       
        </div>
        </font>
    </div>    

    
<!-- TERMINA FORMULARIO -->



@endsection
