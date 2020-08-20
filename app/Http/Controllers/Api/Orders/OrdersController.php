<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use App\Http\Resources\Orders\OrdersShowResource;
use App\Http\Resources\OrdersResources;
use App\Orders;
use App\OrdersProducts;
use Illuminate\Http\Request;

class OrdersController extends Controller
{

    public function index()
    {
        return OrdersResources::collection(
            Orders::all()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = $request->all();

        $order = [
            'order_name' => $request->order_name,
            'order_date' => $request->order_date,
            'order_status_id' => $request->order_status_id,
            'order_payment_id' => $request->order_payment_id,
            'order_sum' => $request->order_sum,
            'order_shipment_date' => $request->order_shipment_date,
            'order_client_id' => $request->order_client_id,
            'order_manager_id' => $request->order_manager_id,
            ];

        $orderId = Orders::create($order)->id;

        if (count($request->products) > 0){
            foreach ($request->products as $product => $k){

                $data2 = [

                    'product_name' => $k['product_name'],
                    'product_quantity' => $k['product_quantity'],
                    'product_unit_id' => $k['product_unit_id'],
                    'product_price' => $k['product_price'],
                    'product_sum' => $k['product_sum'],
                    'product_order_id' => $orderId,
                ];


                OrdersProducts::create($data2);


//                dd($data2);
            }
        }
    }


    public function show($id)
    {
        return new OrdersShowResource(Orders::findOrFail($id));
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

        Orders::findOrFail($id)->delete();
    }
}
