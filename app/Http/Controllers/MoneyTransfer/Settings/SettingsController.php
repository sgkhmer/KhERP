<?php

namespace App\Http\Controllers\MoneyTransfer\Settings;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\BackEnd\Setting\Setting;
/*
    DataAction class use for any action the data from any table
    For more detail i have comment in DataAction class in commons folder
*/
use App\Http\Controllers\Backend\commons\DataAction;
class SettingsController extends Controller
{

    public function index()
    {

        $settings=Setting::AllSetting();

        return response()->json($settings);
    }

    public function show($id){
        return response()->json(Setting::find($id));
    }

    public function store(Request $request)
    {

        

    }

    public function edit($id)
    {
        
    }

    public function update(Request $request,$id)
    {
        
        

    }

    public function destroy($id)
    {

        
        
    }
    

}
