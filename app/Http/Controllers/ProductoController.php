<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function lista()
    {
        $productos = Productos::orderBy("id", "desc")->paginate();
        return view('productos.lista', compact("productos"));

        //   return "Pagina cursos desde controller";
    }
    public function productoFormulario()
    {
        return view('productos.productoFormulario');
    }
    public function nuevoProducto(Request $request)
    {
        $producto = new Productos();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->save();

        return redirect()->route("productos.show", $producto);
    }

    public function producto(Productos $producto)
    {
        return view('productos.producto', compact('producto'));

        // return "Pagina cursos: $curso  desde controller";
    }

    public function edit(Productos $producto)
    {
        return view('productos.edit', compact('producto'));
    }
    public function update(Request $request, Productos $producto)
    {
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->save();
        return redirect()->route("productos.show", $producto);
        // return view('productos.edit', compact('producto'));
    }
}
