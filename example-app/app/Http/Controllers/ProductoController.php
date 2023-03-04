<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Aquí puedes obtener la lista de productos y pasarla a la vista
        return view('productos.index');
    }
    
    public function create()
    {
        return view('productos.create');
    }
    
    public function store(Request $request)
    {
        // Aquí puedes validar y guardar los datos del nuevo producto
        return redirect()->route('productos.index');
    }
    
    public function show(Producto $producto)
    {
        // Aquí puedes pasar los datos del producto a la vista
        return view('productos.show', compact('producto'));
    }
    
    public function edit(Producto $producto)
    {
        // Aquí puedes pasar los datos del producto a la vista
        return view('productos.edit', compact('producto'));
    }
    
    public function update(Request $request, Producto $producto)
    {
        // Aquí puedes validar y actualizar los datos del producto
        return redirect()->route('productos.index');
    }
    
    public function destroy(Producto $producto)
    {
        // Aquí puedes eliminar el producto de la base de datos
        return redirect()->route('productos.index');
    }
}    