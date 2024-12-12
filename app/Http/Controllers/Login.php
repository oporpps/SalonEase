<?php

    namespace App\Http\Controllers;

    use Soyer\Http\Request;
    use App\Http\Controllers\UserState;
    use App\Models\Admin;

    class Login {

        public static function handle() {

            $username = Request::$jsonr["username"];
            $password = Request::$jsonr["password"];

            if (empty($username) || empty($password)) {
                return jsonify(["message" => "username and password are required"], 400);
            }

            $acc = new Admin();

            $result = $acc->Select()
                ->where('username = ? AND password = ?', [$username, $password])
                ->executeWith()
                ->findOne();

            if (!$result) {
                return jsonify(["message" => "ไม่พบผู้ใช้นี้"], 404);
            }

            UserState::setUserID($result["admin_id"]);
            UserState::setUserName($result["username"]);

            return jsonify(["message" => "สำเร็จ"]);
        }
    }