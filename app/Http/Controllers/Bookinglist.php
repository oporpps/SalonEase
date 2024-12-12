<?php

namespace App\Http\Controllers;
use App\Models\Bookings as bookie;
use Soyer\Http\Request;

class Bookinglist {

    public static function get(){
 
        $booking = new bookie();

        return  $booking -> Select() ->  Where("? ORDER BY date ASC ",[1]) -> executeWith() -> findAll();
    }
    
    public static function getbyId($id){

        $booking = new bookie();
        return  $booking -> Select() -> where("id=?", [$id]) -> executeWith() -> findOne();
    }
}