<?php

namespace App\Http\Models\MoneyTransfer\SetupMaster;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table='voucher';
    protected $primaryKey='voucher_id';
    protected $fillable=[
        'name',
        'order_level'
    ];
    public $timestamps=false;
}
