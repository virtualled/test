<?php

use App\Commodity;
use App\Warehouses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('commodities', 'Api\CommodityController@index');
//
Route::get('commodity/{id}', 'Api\CommodityController@show');

Route::apiResource('commodities', 'Api\CommodityController')->only(['index', 'show', 'store']);

Route::get('commodities/{commodity}/search', 'Api\CommoditySearchController')
    ->name('commodities.search.show');



//Route::get('warehouses/{id}/{commodity}', function (Request $request, $warehouseId, $commodityId) {
//    dd($warehouseId, $commodityId);
//    return Warehouses::findOrFail($warehouseId);
//});

Route::apiResource('warehouses', 'Api\WarehousesController');

Route::apiResource('characteristics', 'Api\CharacteristicsController');

Route::apiResource('contragents', 'Api\Contragents\ContragentsController');

Route::apiResource('orders', 'Api\Orders\OrdersController');
