<?php

namespace App\Modules;

use App\Interfaces\SchemaInterface;

class Schema{

    //obtenemos esquema
    public function getSchema($schema){

        $jsonFile=file_get_contents('../files/schemas/'.$schema.".json");
        $schema=json_decode($jsonFile,true);
        return $schema;

    }
    
}

?>