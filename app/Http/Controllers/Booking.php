<?php

namespace App\Http\Controllers;
use App\Models\Bookings as bookie;
use Soyer\Http\Request;

class Booking {

    public static function handle() {

        $booking = new bookie();

        $existingBooking = $booking->Select()
        ->where("date = ? AND nametc = ? AND ((start_time < ? AND finish_time > ?))", 
                [Request::$jsonr["date"], Request::$jsonr["nametc"], Request::$jsonr["finishtime"], Request::$jsonr["starttime"]])
        ->executeWith()
        ->findOne();
    
    if ($existingBooking) {
        return jsonify(["msg" => "ไม่สามารถเพิ่มข้อมูลได้ เนื่องจากมีการจองในช่วงเวลาดังกล่าวแล้ว"], 400);
    }
    

        if (
            $booking->Create(
                ["name", "phone", "date", "start_time", "finish_time", "service", "nametc"],
                [Request::$jsonr["name"], Request::$jsonr["phone"], Request::$jsonr["date"], Request::$jsonr["starttime"], Request::$jsonr["finishtime"], Request::$jsonr["service"], Request::$jsonr["nametc"]]
            )->execute()
        ) {
            return jsonify(["msg" => "เพิ่มข้อมูลแล้ว"]);
        }
    }

    
}