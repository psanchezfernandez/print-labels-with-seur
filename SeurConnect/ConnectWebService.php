<?php

namespace SeurConnect;


class ConnectWebService
{
    public $url = "http://cit.seur.com/CIT-war/services/ImprimirECBWebService?wsdl.com";
    public $user = "WSTESTSEUR";
    public $password = "TESTSEURWS";
    public $brandPrinter = "ZEBRA";
    public $modelPrinter = "LP2844";
    public $formatLabel = "2C";

    public function __construct(){
        $this->checkUrl($this->url);
        if (!$this->checkUrl($this->url)) {
            throw new Exception('Not a valid URL');
        }
     }

    public function checkUrl($url){
      return filter_var($url, FILTER_VALIDATE_URL);

    }

}



