@extends('template')
@section('titulo')
Punto de Venta 
@endsection

@section('contenido')
 {{-- Nav --}}
 <nav class="navbar navbar-expand-lg bg-light mb-3">
      
    <div class="container-fluid ">
      <a class="navbar-brand " href="index"><img id="icono" src="{{asset('imgs/comic.png')}}"></a>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index">Menú Principal</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>


  <div class="container mt-5">
    <div class="card card-body mt-3" id="cardMenú" >
        <div class="display-3 mt-3 mb-5 text-center" style="color: black;"><font face="Comic Sans MS,arial,verdana">
            Punto de Venta </font> </div>
        <form action="">
            <div class="d-grid gap-2">
                
                
            </div>
        </form>



<div class="container text-center">



</div>

  @endsection