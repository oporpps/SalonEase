<?php

    namespace App\Http\Middleware;
    use Closure;

    use App\Http\Controllers\UserState;


    class NotAuthentication {

        public static function handle(Closure $next){
            if (!UserState::isUserID()) {
                return $next();
            }
            return redirect("/");
        }

    }