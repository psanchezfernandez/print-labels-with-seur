<?php

require_once __DIR__ . '/vendor/autoload.php';
use SeurConnect\ConnectWebService;
use SeurConnect\SendSoap;
use SeurConnect\DataParser;
class Main
{

    function __construct()
    {
        $dataPackage = (object) array(
            "integrationcode" => "7000",
            "nif" => "A61587358",
            "accountingcode" => "40611",
            "service" => "1",
            "products" => "2",
            "totalpackages" => "2",
            "kilos" => "14",
            "weight" => "14.0000",
            "observations" => "observaciones",
            "expeditionref" => "PRUEBAS SEUR PEDRO",
            "refpackages" => "Test_repaimnet",
            "key" => "f",
            "keyvalue" => "",
            "refundkey" => "F",
            "refundvalue" => "100.50",
            "fullname" => "Pedro Mora",
            "street" => "Cal Nyepa, 23",
            "typestreet" => "CL",
            "streetnumber" => "N",
            "streetnumber1" => ".",
            "stairs" => ".",
            "floor" => ".",
            "door" => ".",
            "town" => "Barcelona",
            "postalcode" => "08001",
            "codecountry" => "es",
            "email" => "pedro.mora@seur.net",
            "phone" => "670231944",
            "nif" => "A61587358",
            "franchisecode" => "8",
            "webservice" => "WebService"
        );



        $cmd = new SendSoap();
        echo $cmd->getResponse($dataPackage);

    }

}
new Main();