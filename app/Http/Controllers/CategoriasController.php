<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Precios;
use App\Models\Subcategoria;
use App\Models\Producto;
use App\Models\Supermercado;
use App\Models\Supermercadoproducto;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class CategoriasController extends Controller
{
    //
    public function index()
    {
        $Categorias = Categoria::all();
        return view("categorias.index")->with("categorias", $Categorias);
    }
  

    public function show($id)
    {
        $subcategorias = Subcategoria::where('categoria_id', $id)->get();
        return view ('categorias.show')->with('subcategorias', $subcategorias);
        
    }

    public function sub($id)
    {
        $productos = Producto::where('subcategoria_id', $id)->get();
        return view('productos.index')->with('productos', $productos);
    }

    public function listar($id)
    {
        $supermercados = Supermercado::get();
        $supermercadoproductos = Supermercadoproducto::with(["precios", "supermercado", "producto"])->where('producto_id', $id)->get();

        // $clavePrecios = Precios::whereIn('supermercadoproductos_id', $supermercadoproductos->pluck('id'))->get();
        return view('productos.show')->with('supermercadoproductos', $supermercadoproductos)->with('supermercados', $supermercados);
        // ->with('clavePrecios', $clavePrecios);
    }


}
