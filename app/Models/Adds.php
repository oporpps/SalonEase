<?php

    namespace App\Models;

    use App\Models\BaseModel;

    class Adds extends BaseModel {

        public $__table__ = "tc";

        function __construct() {
            parent::__construct($this -> __table__);
        }

    }