<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorWeirdo;
use App\Http\Requests\validadorWeirdoActualizarComic;
use App\Http\Requests\validadorWeirdoActualizarArticulo;
use App\Http\Requests\validadorWeirdoAgregarArticulo;
use App\Http\Requests\validadorWeirdoAgregarComic;

class controladorWeirdo extends Controller
{
    public function confirmarFormulario(validadorWeirdo $req)
    {
        return redirect('index')->with('confirmacion', 'Información Recibida');
    }

    public function confirmarComic(validadorWeirdoAgregarComic $req)
    {
        return redirect('comics')->with('comicAgregado', 'comic Recibida');
    }

    public function confirmarActualizacionComic(validadorWeirdoActualizarComic $req)
    {
        return redirect('comics')->with('actualizacion', 'comic Recibido');
    }
    public function confirmarActualizacionArticulo(validadorWeirdoActualizarArticulo $req)
    {
        return redirect('articulos')->with('actualizacion', 'articulo Recibido');
    }

    public function confirmarArticulo(validadorWeirdoAgregarArticulo $req)
    {
        return redirect('articulos')->with('articuloAgregado', 'Articulo Recibida');
    }



    public function showLogin()
    {
        return view('login');
    }

    public function showIndex()
    {
        return view('menu');
    }

    public function showComics()
    {
        return view('comics');
    }

    public function showAgregarComic()
    {
        return view('agregarComic');
    }

    public function showEditarComic()
    {
        return view('editarComic');
    }
    public function showEditarArticulo()
    {
        return view('editarArticulo');
    }

    public function showArticulos()
    {
        return view('articulos');
    }

    public function showAgregarArticulo()
    {
        return view('agregarArticulo');
    }

}
