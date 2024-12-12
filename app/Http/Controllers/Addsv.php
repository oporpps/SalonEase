<?php

namespace App\Http\Controllers;

use App\Models\AddService;
use Soyer\Http\Request;

class Addsv {

    public static function handle() {

        $add = new AddService();

        if (
            $add->Create(

                ["service"],

                [Request::$jsonr["service"]]

            )->execute()
        ) {
            return jsonify(["msg"=> "เพิ่มข้อมูลแล้ว"]);
        }

    }

    public static function get(){

        $add = new AddService();

        return  $add -> Select()-> executeWith() -> findAll();
    }
    
}