<?php

    namespace App\Models;

    use App\Models\BaseModel;

    class AddService extends BaseModel {

        public $__table__ = "service";

        function __construct() {
            parent::__construct($this -> __table__);
        }

    }