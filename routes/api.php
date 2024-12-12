<?php

use App\Http\Controllers\Add;
use App\Http\Controllers\AddService;
use App\Http\Controllers\Addsv;
use App\Http\Controllers\Booking;
    use App\Http\Controllers\Bookinglist;
    use App\Http\Controllers\Delete;
use App\Http\Controllers\DeleteMoney;
use App\Http\Controllers\Deletesv;
use App\Http\Controllers\DeleteTc;
use Soyer\PMSoyer;
    use App\Http\Middleware\Authentication;
    use App\Http\Middleware\NotAuthentication;

    use App\Http\Controllers\Login;
    use App\Http\Controllers\Logout;
use App\Http\Controllers\Math;
use App\Http\Controllers\Update;
use Soyer\Http\Request;

    PMSoyer::route("/api/booking", ["POST"], function() {
        return Booking::handle();
    });

    PMSoyer::route("/api/bookinglist", ["POST"], function() {
        return Bookinglist::get();
    });

    PMSoyer::route("/api/add", ["POST"], function() {
        return Add::handle();
    });

    PMSoyer::route("/api/addservice", ["POST"], function() {
        return Addsv::handle();
    });

    PMSoyer::route("/api/delete", ["DELETE"], function(){
        return Delete::delete(Request::$jsonr["id"]);
    });

    PMSoyer::route("/api/login", ["POST"], function(){
        return Login::handle();
    }, [NotAuthentication::class]);

    PMSoyer::route("/api/logout", ["POST"], function(){
        return Logout::handle();
    },[Authentication::class]);

    PMSoyer::route("/api/update", ["PUT"], function(){
        return Update::update();
    });

    PMSoyer::route("/api/send", ["POST"], function(){
        return Math::handle();
    });

    PMSoyer::route("/api/deletetc", ["DELETE"], function(){
        return DeleteTc::deletetc(Request::$jsonr["id"]);
    });

    PMSoyer::route("/api/deletesv", ["DELETE"], function(){
        return Deletesv::deletesv(Request::$jsonr["id"]);
    });

    PMSoyer::route("/api/deletemoney", ["DELETE"], function(){
        return DeleteMoney::deletemoney(Request::$jsonr["id"]);
    });