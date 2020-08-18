<?php

namespace App\Http\Controllers\Api\Contragents;

use App\Contragents;
use App\Http\Controllers\Controller;
use App\Http\Resources\Contragents\ContragetnsIndexResourse;
use Illuminate\Http\Request;

class ContragentsController extends Controller
{
    public function index()
    {
        return ContragetnsIndexResourse::collection(
            Contragents::all()
        );
//        return Contragents::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
