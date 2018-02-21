<?php

namespace App\Http\Models\MoneyTransfer\SetupMaster;

use Illuminate\Database\Eloquent\Model;

class AccountRule extends Model
{
    protected $table='account_rule';
    protected $primaryKey='account_rule_id';
    protected $fillable=[
        'name'
    ];
    public $timestamps=false;
}
