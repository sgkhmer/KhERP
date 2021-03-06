<?php

namespace App\Http\Controllers\MoneyTransfer\SetupMaster;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\MoneyTransfer\SetupMaster\Voucher;
/*
    this controller use for create any validation function
    currently it have one function to validate data if exist or not yet exist
    then return the json to pass to axios.get() in veujs
    this function there are 3 parameter(tablename,fieldname,value)
        - tablename: table that we want to check
        - fieldname: field of that table we want to filter
        - value: value of field we want to check
*/
use App\Http\Controllers\MoneyTransfer\commons\ValidateDataController;
/*
    DataAction class use for any action the data from any table
    For more detail i have comment in DataAction class in commons folder
*/
use App\Http\Controllers\MoneyTransfer\commons\DataAction;
class VoucherController extends Controller
{
    public function index()
    {
        $Voucher = Voucher::all();        
        return response()->json($Voucher);
    }
    public function store(Request $request)
    {
        $data=(new Voucher)->getFillable();
        $data=$request->only($data);
        $condition=[
            //'key'=>$data['key']
        ];

        return (new DataAction)->StoreData(Voucher::class,$condition,'',$data);
    }
    public function show($id)
    {

    }
    public function edit($id)
    {
        return (new DataAction)->EditData(Voucher::class,$id);
    }
    public function update(Request $request,$id)
    {
        
        $data=(new Voucher)->getFillable();
        $data=$request->only($data);
        return (new DataAction)->UpdateData(Voucher::class,$data,'voucher_id',$id);
    }
    public function destroy($id)
    {
    	return (new DataAction)->DeleteData(Voucher::class,'voucher_id',$id);
    }
}
