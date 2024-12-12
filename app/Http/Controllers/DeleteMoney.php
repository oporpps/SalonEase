<?php

namespace App\Http\Controllers;

use App\Models\Money;
use Soyer\Http\Request;

class DeleteMoney {

    public static function deletemoney($id){

        $money = new Money();

        return  $money -> Delete() -> executeWith() -> findAll();
    }
    
}