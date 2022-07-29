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
Route::post('/products/create', [Products::class, 'store']);
/**
 * Get me only one Product -> show
 */
//Route::get('/products/{Product}', [Products::class, 'show']);
