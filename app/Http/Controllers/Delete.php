<?php

namespace App\Http\Controllers;
use App\Models\Bookings as bookie;
use Soyer\Http\Request;

class Delete {

    public static function delete($id){

        $booking = new bookie();

        return $booking -> Delete() -> where("id = ?", [$id]) -> execute();
    }
    
}