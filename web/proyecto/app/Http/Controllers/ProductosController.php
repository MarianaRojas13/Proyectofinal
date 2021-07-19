<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function getProductos(){/*retorna los productos */
        $productos=array(); 
        $productos[]="Agenda";
        $productos[]="Album";
        $productos[]="Planner";
        $productos[]="Croquera";
        return $productos;
    }
    public function getDatosProductos(){/*llama a toda la informacion que se manda y se usa el model */
        $prod=Producto::all();
        return $prod;
    }
    public function crearProductos(){
        $producto=new Producto();
        $producto->nombre="Agenda Profe";
        $producto->precio=2000;
        $producto->stock=5;
        $producto->tipo="Agenda";
        $producto->save();
    }
}
