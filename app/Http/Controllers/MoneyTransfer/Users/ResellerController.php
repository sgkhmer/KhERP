<?php

namespace App\Http\Controllers\MoneyTransfer\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Models\BackEnd\User\User;
use App\Http\Models\BackEnd\UserGroup\UserGroup;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Backend\commons\ImageMaker;
/*
    this controller use for create any validation function
    currently it have one function to validate data if exist or not yet exist
    then return the json to pass to axios.get() in veujs
    this function there are 3 parameter(tablename,fieldname,value)
        - tablename: table that we want to check
        - fieldname: field of that table we want to filter
        - value: value of field we want to check
*/
use App\Http\Controllers\Backend\commons\ValidateDataController;
/*
    DataAction class use for any action the data from any table
    For more detail i have comment in DataAction class in commons folder
*/
use App\Http\Controllers\Backend\commons\DataAction;

class ResellerController extends Controller
{
    public function index()
    {
        $Users = User::getUserReseller($user_group_reseller=5);
        return response()->json($Users);
    }

    public function store(Request $request)
    {

        $data=(new User)->getFillable();
        $data=$request->only($data);
        
        $condition=[
            'username'=>$data['username'],
            'email'=>$data['email']
        ];
        $data['image']=(new ImageMaker)->base64ToImage('images\\icon',$data['image']);
        return (new DataAction)->StoreData(User::class,$condition,"or",$data);
        //return response()->json($data);

    }
    public function show($id)
    {

        return (new DataAction)->EditData(User::class,$id);

    }

    public function edit($id)
    {

        $resellerData = DB::table('users')
                ->join('store','store.owner_id','=','users.id')
                ->where('id',$id)
                ->first();
        $StoreData = DB::table('setting')->Where('store_id',$resellerData->store_id)->get();
            $data = [];
            $str = '';
            foreach ($StoreData as $key => $value) {
                define('store_'.$value->key, $value->value);
            }
            $store = array(
                'config_image'=>store_config_image,
                'config_email'=>store_config_email,
                'config_url'=>store_config_url,
                'config_name'=>store_config_name,
                'config_address'=>store_config_address,
                'config_currency'=>store_config_currency
            );
        return response()->json(['store'=>$store,'resellerData'=>$resellerData]);

    }
    
    public function update(Request $request,$id)
    {
        $data=(new User)->getFillable();
        $data=$request->only($data);
        if(@$data['image']){
            $data['image']=(new ImageMaker)->base64ToImage('images\\icon',$data['image']);    
        }
        return (new DataAction)->UpdateData(User::class,$data,'user_id',$id);
        // return response()->json($data);
    }
    public function destroy($id)
    {
        return (new DataAction)->DeleteData(User::class,'user_id',$id);
    }
    public function UserGroup()
    {
        return response()->json(UserGroup::Groups());
    }
    public function ValidateData($field,$value){
        
        $existed=false;

        //instant the object
        $validate=new ValidateDataController;
        if($field=="username"){
            //return data json to vuejs when axios request
            return $validate->CheckDataExist('user','username',$value);    
        }elseif($field=="email"){
            //return data json to vuejs when axios request
            return $validate->CheckDataExist('user','email',$value);
        }
        
    }
}
