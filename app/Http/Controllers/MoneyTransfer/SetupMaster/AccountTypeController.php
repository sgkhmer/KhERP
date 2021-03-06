<?php

namespace App\Http\Controllers\MoneyTransfer\SetupMaster;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\MoneyTransfer\SetupMaster\AccountType;
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
class AccountTypeController extends Controller
{
    public function index()
    {
        $AccountType = AccountType::all();        
        return response()->json($AccountType);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $data=$request['data'];
        $data["name"]=$input['name'];

        $condition=[
            //'key'=>$data['key']
        ];

        return (new DataAction)->StoreData(AccountType::class,$condition,'',$data);
    }
    public function show($id)
    {

    }
    public function edit($id)
    {
        return (new DataAction)->EditData(AccountType::class,$id);
    }
    public function update(Request $request,$id)
    {
        $data=(new AccountType)->getFillable();
        $data=$request->only($data);
        if(@$data['image']){
            $data['image']=(new ImageMaker)->base64ToImage('images\\icon',$data['image']);    
        }
        return (new DataAction)->UpdateData(AccountType::class,$data,'account_type_id',$id);
    }
    public function destroy($id)
    {
    	return (new DataAction)->DeleteData(AccountType::class,'account_type_id',$id);
    }
}
