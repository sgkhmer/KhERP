<?php

namespace App\Http\Controllers\MoneyTransfer\SetupMaster;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\MoneyTransfer\SetupMaster\DeliveryMethod;
/*
    DataAction class use for any action the data from any table
    For more detail i have comment in DataAction class in commons folder
*/
use App\Http\Controllers\MoneyTransfer\commons\DataAction;
class DeliveryMethodController extends Controller
{
    public function index()
    {
        $Currencies=DeliveryMethod::all();
        return response()->json($Currencies);
    }
    public function store(Request $request)
    {
        $data=(new DeliveryMethod)->getFillable();
        $data=$request->only($data);
        
        $condition=[
                
        ];

        return (new DataAction)->StoreData(DeliveryMethod::class,$condition,"",$data);
        //return response()->json($data);
    }
    public function show($id)
    {

    }
    public function edit($id)
    {
        return (new DataAction)->EditData(DeliveryMethod::class,$id);
    }
    public function update(Request $request,$id)
    {
         $data=(new DeliveryMethod)->getFillable();
        $data=$request->only($data);
         return (new DataAction)->UpdateData(DeliveryMethod::class,$data,'delivery_method_id',$id);
    }
    public function destroy($id)
    {
        return (new DataAction)->DeleteData(DeliveryMethod::class,'delivery_method_id',$id);
    }
}
