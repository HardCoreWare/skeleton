<?php

namespace App\Modules;

class History {

    private static $INSTANCE;
    private $database;

    public function __construct($database){

        $this->database;

    }

    public function index(){

        return [];

    }

    public function exists($line){

        return false;

    }
    
}


?>