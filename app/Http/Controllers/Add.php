<?php

namespace App\Http\Controllers;

use App\Models\Adds;
use Soyer\Http\Request;

class Add {

    public static function handle() {

        $add = new Adds();

        if (
            $add->Create(

                ["nametc"],

                [Request::$jsonr["nametc"]]

            )->execute()
        ) {
            return jsonify(["msg"=> "เพิ่มข้อมูลแล้ว"]);
        }

    }

    public static function get(){

        $add = new Adds();

        return  $add -> Select()-> executeWith() -> findAll();
    }

    public static function getbyId($id){

        $add = new Adds();

        return  $add -> Select() -> where("id=?", [$id]) -> executeWith() -> findAll();
    }
    
}