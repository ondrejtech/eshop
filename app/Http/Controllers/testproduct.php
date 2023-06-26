<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testproduct extends Controller
{
    public function index(){
        $xmlFile = file_get_contents("xml/pc_notebooky.xml");
        $xmlData = simplexml_load_string($xmlFile);

        $json  = json_encode($xmlData);
        $xml = json_decode($json, true);
        $i = 0;
        foreach($xml['ProductComplete']as $index => $data){
            $i++;
            if($i == 2) break;
            
            if(is_array($data['ProductImage'])){
                continue;
            }else{
                $dataArray = $data;
            }
            print_r($dataArray);
        }
    }
}
