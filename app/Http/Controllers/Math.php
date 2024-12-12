<?php

namespace App\Http\Controllers;

use App\Models\Money;
use Soyer\Http\Request;

class Math {

    public static function handle() {

        $money = new Money();

        if (
            $money->Create(

                ["nametc","price","service","start_time","date"],

                [Request::$jsonr["nametc"],Request::$jsonr["price"],Request::$jsonr["service"],Request::$jsonr["start_time"],Request::$jsonr["date"]]

            )->execute()
        ) {
            return jsonify(["msg"=> "เพิ่มข้อมูลแล้ว"]);
        }

    }

    public static function get(){

        $money = new Money();

        $data = $money -> Select() -> executeWith() -> findAll();

        $result = [];

        // Aggregate salaries by nametc
        foreach ($data as $entry) {
            $found = false;

            foreach ($result as &$item) {
                if ($item['name'] === $entry['nametc']) {
                    $item['salary'] += $entry['price'];
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                $result[] = ['name' => $entry['nametc'], 'salary' => $entry['price']];
            }
        }

        return  [ "data" => $data, "summery" => $result];
    }
    
}