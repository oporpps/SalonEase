<?php

    namespace App\Models;

    use App\Models\BaseModel;

    class Admin extends BaseModel {

        public $__table__ = "admin";

        function __construct() {
            parent::__construct($this -> __table__);
        }

    }