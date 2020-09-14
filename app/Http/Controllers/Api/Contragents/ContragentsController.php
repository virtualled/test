<?php

namespace App\Http\Controllers\Api\Contragents;

use App\Contragents;
use App\ContragentsContacts;
use App\ContragentsRequisites;
use App\Http\Controllers\Controller;
use App\Http\Resources\Contragents\ContragetnsIndexResourse;

use App\Http\Resources\Contragents\ContragetnsShowResource;
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

        $data_contacts = [
            'phone'   => $request->phone,
            'mail   ' => $request->mail,
            'web'     => $request->web,
            'address' => $request->address,
        ];

        $data_quisite = [
            'company_address' => $request->company_address  ,
            'post_address'    => $request->post_address,
            'inn'             => $request->inn,
            'kpp'             => $request->kpp,
            'account'         => $request->account,
            'corr_acc'        => $request->corr_acc,
            'bank_name'       => $request->bank_name
        ];

        $contact_id   = ContragentsContacts::create($data_contacts)->id;
        $requisite_id = ContragentsRequisites::create($data_quisite)->id;


        $data_contargent = [
            'contragent_name' => $request->contragent_name,
            'contragent_contacts_id' => $contact_id,
            'contragent_requisite_id' => $requisite_id,
            'contragent_type_id' => $request->type
        ];


        Contragents::create($data_contargent);
    }


    public function show($id)
    {
        return new ContragetnsShowResource(Contragents::findOrFail($id));
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
        Contragents::findOrFail($id)->delete();
    }
}
