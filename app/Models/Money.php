<?php

    namespace App\Models;

    use App\Models\BaseModel;

    class Money extends BaseModel {

        public $__table__ = "money";

        function __construct() {
            parent::__construct($this -> __table__);
        }

    }