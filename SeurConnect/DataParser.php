<?php

namespace SeurConnect;
use SeurConnect\SendSoap as SendData;

class DataParser extends SendData
{


    function changeTemplate($data,$dataPackage){
        $dataxml = array(
            "{USER}" => $data->user ,
            "{PASSWORD}" => $data->password ,
            "{BRAND}" => $data->brandPrinter ,
            "{MODEL}" => $data->modelPrinter ,
            "{FORMATLABEL}" => $data->formatLabel ,
            "{INTEGRATIONCODE}" => $dataPackage->integrationcode ,
            "{NIF}" => $dataPackage->nif ,
            "{ACCOUNTINGCODE}" => $dataPackage->accountingcode ,
            "{SERVICE}" => $dataPackage->service ,
            "{PRODUCTS}" =>$dataPackage->products ,
            "{TOTALPACKAGES}" =>$dataPackage->totalpackages ,
            "{KILOS}" =>$dataPackage->kilos ,
            "{WEIGHT}" => $dataPackage->weight ,
            "{OBSERVATIONS}" => $dataPackage->observations ,
            "{EXPEDITIONREF}" => $dataPackage->expeditionref ,
            "{REFPACKAGES}" => $dataPackage->refpackages ,
            "{KEY}" => $dataPackage->key,
            "{KEYVALUE}" => $dataPackage->keyvalue,
            "{REFUNDKEY}" => $dataPackage->refundkey,
            "{REFUNDVALUE}" => $dataPackage->refundvalue,
            "{FULLNAME}" =>$dataPackage->fullname,
            "{STREET}" => $dataPackage->street,
            "{TYPESTREET}" =>$dataPackage->typestreet ,
            "{STREETNUMBER}" =>$dataPackage->streetnumber ,
            "{STREETNUMBER1}" =>$dataPackage->streetnumber1 ,
            "{STAIRS}" => $dataPackage->stairs ,
            "{FLOOR}" => $dataPackage->floor ,
            "{DOOR}" => $dataPackage->door ,
            "{TOWN}" => $dataPackage->town ,
            "{POSTALCODE}" => $dataPackage->postalcode ,
            "{CODECOUNTRY}" => $dataPackage->codecountry ,
            "{EMAIL}" => $dataPackage->email ,
            "{PHONE}" => $dataPackage->phone ,
            "{NIF}" => $dataPackage->nif ,
            "{FRANCHISECODE}" =>$dataPackage->franchisecode ,
            "{WEBSERVICE}" => $dataPackage->webservice
        );

        return $dataxml;
    }




}