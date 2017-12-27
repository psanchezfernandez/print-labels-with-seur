<?php

namespace SeurConnect;
use SeurConnect\ConnectWebService as Connections;
use SeurConnect\DataParser as Data;

class SendSoap extends Connections
{
    public $connections;
    public $getxml;

    function __construct()
    {
        $this->connections= new Connections();
        $this->getxml = file_get_contents(dirname(__FILE__)."/.."."\\template\\template_soap.xml");
        $this->partialxml = file_get_contents(dirname(__FILE__)."/.."."\\template\\partial.xml");
    }

    function getResponse($dataPackage){
        $dataxml = new Data();
        $xmltext=$this->partialxml;

        for ($i = 1; $i <= $dataPackage->totalpackages-1; $i++) {
            $this->partialxml.=$xmltext;
        }

        $dataPackage->bultos=$this->partialxml;

        $this->getxml =str_replace('{BULTOS}', $this->partialxml, $this->getxml );
        $message=$this->renderTemplate($dataxml->changeTemplate($this->connections,$dataPackage));
        var_dump($message);
        $headers = array(
            "POST /package/package_1.3/packageservices.asmx HTTP/1.1",
            "Host: privpakservices.schenker.nu",
            "Content-Type: application/soap+xml; charset=utf-8",
            "Content-Length: ".strlen($message)
        );
        $soapUrl = $this->connections->url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$soapUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    function renderTemplate($parserXML)
    {
        return strtr($this->getxml, $parserXML);
    }


}



