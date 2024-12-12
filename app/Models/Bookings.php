<?php

    namespace App\Models;

    use App\Models\BaseModel;

    class Bookings extends BaseModel {

        public $__table__ = "bookings";

        function __construct() {
            parent::__construct($this -> __table__);
        }

    }