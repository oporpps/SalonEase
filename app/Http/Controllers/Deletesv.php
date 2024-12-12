<?php

namespace App\Http\Controllers;

use App\Models\Adds;
use App\Models\AddService;
use Soyer\Http\Request;

class Deletesv {

    public static function deletesv($id){

        $add = new AddService();

        return $add -> Delete() -> where("id = ?", [$id]) -> execute();
    }
    
}