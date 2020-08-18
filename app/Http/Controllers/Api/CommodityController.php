<?php

namespace App\Http\Controllers\Api;

use App\Commodity;
use App\Http\Controllers\Controller;
use App\Http\Resources\CommodityIndexResource;
use App\Http\Resources\CommodityShowResource;
use App\Warehouses;
use Illuminate\Http\Request;

class CommodityController extends Controller
{
    public function index ()
    {
        return CommodityIndexResource::collection(
                Commodity::all()
            );
    }

    public function show($id)
    {
        return new CommodityShowResource(Commodity::findOrFail($id));
    }

    public function store(Request $request)
    {
        Commodity::create($request->all());

    }
}
