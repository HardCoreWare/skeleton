<?php

namespace App\Composites;

class Loader{

    //esquema para 
    private $files;
    private $schema;
    private $location=['dataset'=>'MULTIVA','table'=>'BSEGAIO'];
    private $disposition=['create'=>'CREATE_NEVER','write'=>'WRITE_APPEND'];
    private $settings=['delimiter'=>'|','quote'=>'"','ignoreUnknowValues'=>true,'allowQuotedNewLines'=>false,'allowJaggedRows'=>false,'nullMarker'=>'\N'];
    private $file=['format'=>'CSV'];

    private $societies=['5200','5300','5500'];

    //dependencias modulares
    private $bigLoader;
    private $fileManager;
    private $history;

    //inyectamos dependencia de BigQuery Loader
    public function __construct( $bigLoader, $fileManager,$history){

        $this->bigLoader=$bigLoader;
        $this->fileManager=$fileManager;
        $this->history=$history;

    }

    //creamos nueva tabla
    public function load($type,$date){

        if($this->history->exists($type,$society,$date)){

            return false;

        }
        else{

            $this->schema=$this->fileManager->getSchema($type);
            if($this->fileManager->checkFile()){


            }

        }




    }

}


?>