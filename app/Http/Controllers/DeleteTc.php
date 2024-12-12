<?php

namespace App\Http\Controllers;

use App\Models\Adds;
use Soyer\Http\Request;

class DeleteTc {

    public static function deletetc($id){

        $add = new Adds();

        return $add -> Delete() -> where("id = ?", [$id]) -> execute();
    }
    
}