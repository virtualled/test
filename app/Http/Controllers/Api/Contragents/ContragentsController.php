<?php

namespace App\Http\Controllers\Api\Contragents;

use App\Contragents;
use App\ContragentsContacts;
use App\ContragentsRequisites;
use App\ContragentsTypes;
use App\Http\Controllers\Controller;
use App\Http\Resources\Contragents\ContragentsEditResource;
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
    public function edit($id)
    {
        return new ContragentsEditResource(Contragents::findOrFail($id));
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
        //Getting ID`s for finging related contacts, types, requisite

        $get_contragent_contact_id = Contragents::findOrFail($id)->contragent_contacts_id;
        $get_contragent_requisite_id = Contragents::findOrFail($id)->contragent_requisite_id;
        $get_contragent_type_id = Contragents::findOrFail($id)->contragent_type_id;

        //Creates

        $data_contargent = [
            'contragent_name' =>$request->contragent_name,
            'contragent_type_id' => $request->type];

        $data_contacts = [
            'phone'   => $request->phone,
            'mail   ' => $request->mail,
            'web'     => $request->web,
            'address' => $request->address,
        ];

        $data_requisite = [
            'company_address' => $request->company_address  ,
            'post_address'    => $request->post_address,
            'inn'             => $request->inn,
            'kpp'             => $request->kpp,
            'account'         => $request->account,
            'corr_acc'        => $request->corr_acc,
            'bank_name'       => $request->bank_name
        ];



        Contragents::findOrFail($id)->update($data_contargent);
        ContragentsContacts::findOrFail( $get_contragent_contact_id)->update($data_contacts);
        ContragentsRequisites::findOrFail($get_contragent_requisite_id)->update($data_requisite);


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
