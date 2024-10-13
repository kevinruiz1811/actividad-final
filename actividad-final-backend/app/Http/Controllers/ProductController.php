<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all(); // Retorna todos los productos
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer'
        ]);

        return Product::create($validated); // Guarda nuevo producto
    }

    public function show($id)
    {
        return Product::findOrFail($id); // Muestra producto por ID
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update($request->all()); // Actualiza producto
        return $product;
    }

    public function destroy($id)
    {
        Product::destroy($id); // Elimina producto
        return response()->json(['message' => 'Producto eliminado']);
    }
}
