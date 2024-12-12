<?php

    namespace App\TwigCustom;

    use Soyer\View\Custom\UserCustomView;

    use App\TwigCustom\Example;

    use App\Http\Controllers\UserState;

    class TwigCustom {

        public static function init() {

            UserCustomView::defineGlobalVariable("isLoggin", UserState::isUserID());
            UserCustomView::defineGlobalVariable("username", UserState::getUserName());
            // HTML: {{ you_key }}

            UserCustomView::defineFunction("you_function_name", [Example::class, "plusInt"]);
            // HTML: {{ you_function_name(100) }}

        }

    }