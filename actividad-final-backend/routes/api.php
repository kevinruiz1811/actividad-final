<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::middleware('auth:api')->group(function () {
    Route::post('/products', [ProductController::class, 'store']); // Registrar producto
    Route::get('/products', [ProductController::class, 'index']); // Listar productos
    Route::get('/products/{id}', [ProductController::class, 'show']); // Ver un producto
    Route::put('/products/{id}', [ProductController::class, 'update']); // Actualizar producto
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Eliminar producto
});
