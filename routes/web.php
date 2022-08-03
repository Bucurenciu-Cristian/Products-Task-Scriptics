<?php

use App\Http\Controllers\Products;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function ()
{
    return redirect('products');
});

/**
 * Get me all the Products -> index
 */
Route::get('/products', [Products::class, 'index']);

/**
 * Visualize the creation of the new product -> create
 */
Route::get('/products/create', [Products::class, 'create']);
/**
 * Store in DB the result from create -> store
 */
Route::post('/products', [Products::class, 'store']);
/**
 * Edit the selected product -> edit
 */
Route::get('/products/{product}/edit', [Products::class, 'edit']);

/**
 * Delete an entry
 */
Route::delete('/products/{product}', [Products::class, 'destroy']);

/**
 * Update an entry -> update
 */
Route::put('/products/{product}', [Products::class, 'update']);



/**
 * Get me only one Product -> show
 */
Route::post('/products/{product}/delete', [Products::class, 'destroy']);
Route::get('/products/{product}', [Products::class, 'show']);
