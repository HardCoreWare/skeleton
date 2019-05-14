<?php

namespace App\Controllers;

class TestController extends Controller{

    public function wellcome($request,$response,$args){

        $response = "WELLCOME";
        return $response;

    }

    public function hello($request,$response,$args){

        $name = $args['name'];
        $response->getBody()->write("Hello, ".$name);
        return $response;
    }

    public function config($request,$response,$args){

        $config=$this->container['config'];

        print_r($config->index());

    }

    public function database($request,$response,$args){

        $config=$this->container['config'];
        $database=$this->container['database']($config->database());

    }

    public function google($request,$response,$args){

        

    }

}

?>