<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function pc_notebooky(){
        $inc = 0;
        $xmlFile = file_get_contents("xml/pc_notebooky.xml");
        $xmlData = simplexml_load_string($xmlFile);

        $json = json_encode($xmlData);
        $xml = json_decode($json,true);

        if(count($xml['ProductComplete']) > 0){
            foreach($xml["ProductComplete"] as $index => $data){
                $dataArray[] = [
                    'ProId' => $data['ProId'],
                    'Code' => $data['Code'],
                    'Name' => $data['Name'],
                    'YourPrice' => $data['YourPrice'],
                    'YourPriceWithFees' => $data['YourPriceWithFees'],
                    'CommodityCode' => $data['CommodityCode'],
                    'GarbageFee' => $data['GarbageFee'],
                    'AuthorFee' => $data['AuthorFee'],
                    'ValuePack' => $data['ValuePack'],
                    'ValuePackQty' => $data['ValuePackQty'],
                    'Warranty' => $data['Warranty'],
                    'CommodityName' => $data['CommodityName'],
                    'DealerPrice' => $data['DealerPrice'],
                    'EndUserPrice' => $data['EndUserPrice'],
                    'Vat' => $data['Vat'],
                    //'PartNumber' => $data['PartNumber'],
                    'OnStockCount' => $data['OnStockCount'],
                    'CategoryCode' => $data['CategoryCode'],
                    'ProducerName' => $data['ProducerName'],
                    'RateOfDutyCode' => $data['RateOfDutyCode'],
                    'MultipleQuantity' => $data['MultipleQuantity'],
                    'Description' => $data['Description'],
                    'IsTop' => $data['IsTop'],
                    'InfoCode' => $data['InfoCode'],
                    'ProducerCode' => $data['ProducerCode']
                ];
            }
            echo "<pre>";
            print_r($dataArray);
            $chunk = array_chunk($dataArray,500);
            
            foreach ($chunk as $result) {
                product::insert($result);
            }
        }else{
            die("Somenthig went wrong");
        }
    }

    public function tiskarny_3D(){
        $inc = 0;
        $xmlFile = file_get_contents("xml/pc_notebooky.xml");
        $xmlData = simplexml_load_string($xmlFile);

        $json = json_encode($xmlData);
        $xml = json_decode($json,true);

        if(count($xml['ProductComplete']) > 0){
            foreach($xml["ProductComplete"] as $index => $data){
                $dataArray[] = [
                    'ProId' => $data['ProId'],
                    'Code' => $data['Code'],
                    'Name' => $data['Name'],
                    'YourPrice' => $data['YourPrice'],
                    'YourPriceWithFees' => $data['YourPriceWithFees'],
                    'CommodityCode' => $data['CommodityCode'],
                    'GarbageFee' => $data['GarbageFee'],
                    'AuthorFee' => $data['AuthorFee'],
                    'ValuePack' => $data['ValuePack'],
                    'ValuePackQty' => $data['ValuePackQty'],
                    'Warranty' => $data['Warranty'],
                    'CommodityName' => $data['CommodityName'],
                    'DealerPrice' => $data['DealerPrice'],
                    'EndUserPrice' => $data['EndUserPrice'],
                    'Vat' => $data['Vat'],
                    //'PartNumber' => $data['PartNumber'],
                    'CategoryCode' => $data['CategoryCode'],
                    'ProducerName' => $data['ProducerName'],
                    'RateOfDutyCode' => $data['RateOfDutyCode'],
                    'EANCode' => $data['EANCode'],
                    'NameB2C' => $data['NameB2C'],
                    'DescriptionShort' => $data['DescriptionShort'],
                    'MultipleQuantity' => $data['MultipleQuantity'],
                    'Description' => $data['Description'],
                    'IsTop' => $data['IsTop'],
                    'InfoCode' => $data['InfoCode'],
                    'ProducerCode' => $data['ProducerCode'],
                ];
            }
            $chunk = array_chunk($dataArray,500);
            
            foreach ($chunk as $result) {
                product::insert($result);
            }
        }else{
            die("Somenthig went wrong");
        }
    }
}
