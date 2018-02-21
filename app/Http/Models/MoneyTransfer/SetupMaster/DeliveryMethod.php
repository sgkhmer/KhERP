<?php

namespace App\Http\Models\MoneyTransfer\SetupMaster;

use Illuminate\Database\Eloquent\Model;

class DeliveryMethod extends Model
{
    protected $table='delivery_method';
    protected $primaryKey='delivery_method_id';
    protected $fillable=[
    	'name',
    	'created_by',
    	'modified_by',
    	'created_at',
    	'updated_at'
    ];
    public $timestamps=false;
}
