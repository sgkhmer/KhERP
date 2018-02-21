<?php

namespace App\Http\Models\MoneyTransfer\SetupMaster;

use Illuminate\Database\Eloquent\Model;

class AmountTopUp extends Model
{
    protected $table='amount_top_up';
    protected $primaryKey='amount_top_up_id';
    protected $fillable=[
        'name'
    ];
    public $timestamps=false;
}
