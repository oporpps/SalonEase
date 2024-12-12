<?php

use App\Http\Controllers\Add;
use App\Http\Controllers\AddService;
use App\Http\Controllers\Addsv;
use App\Http\Controllers\Booking;
    use App\Http\Controllers\Bookinglist;
use App\Http\Controllers\Math;
use Soyer\PMSoyer;
    use Soyer\Http\Request;
    use App\Http\Middleware\Authentication;
    use App\Http\Middleware\NotAuthentication;
    use App\Models\Money;
use Twig\Node\Expression\Binary\AddBinary;
use App\Http\Controllers\UserState;

    PMSoyer::route('/', ["GET", "POST"], function() {
        return render_template('home.html', ['title' => 'หน้าหลัก']);
    }, );

    PMSoyer::route('/booking', ["GET", "POST"], function() {
        return render_template('booking.html', ['title' => 'จองคิว','add' => Add::get(),'test'=>Addsv::get()]);
    }, );

    PMSoyer::route('/login', ["GET", "POST"], function() {
        return render_template('login.html', ['title' => 'เข้าสู่ระบบ']);
    }, [NotAuthentication::class] );
    
    PMSoyer::route('/register', ["GET", "POST"], function() {
        return render_template('register.html', ['title' => 'สมัครสมาชิก']);
    }, );
    
    PMSoyer::route('/bookinglist', ["GET", "POST"], function() {
        return render_template('bookinglist.html', ['title' => 'ข้อมูลคิว','booboo' => Bookinglist::get()],[Add::get()]);
    }, [Authentication::class]);

    PMSoyer::route('/add', ["GET", "POST"], function() {
        return render_template('add.html', ['title' => 'เพิ่มช่าง','add' => Add::get(),'service'=>Addsv::get()]);
    }, [Authentication::class] );

    PMSoyer::route('/math', ["GET", "POST"], function() {
        return render_template('math.html', ['title' => 'คำนวณค่าตอบแทน','math' => Math::get()]);
    }, [Authentication::class] );

    PMSoyer::route('/edit/<id>', ["GET", "POST"], function($id) {
        return render_template('edit.html', ['title' => 'แก้ไข','booboo'=> Bookinglist::getbyId($id)]);
    }, [Authentication::class] );
    
