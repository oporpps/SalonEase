<?php

namespace App\Http\Controllers;
use Soyer\Http\Request;
use App\Models\Bookings;

class Update {

    public static function update(){

        $booking = new Bookings();

        return $booking -> Update(['name','phone', 'date','start_time','finish_time','service','status','price',],[Request::$jsonr["name"],Request::$jsonr["phone"], Request::$jsonr["date"],Request::$jsonr["start_time"],Request::$jsonr["finish_time"],Request::$jsonr["service"],Request::$jsonr["status"],Request::$jsonr["price"]]) -> where('id = ?',[Request::$jsonr["id"]]) -> execute();
    }
    
}