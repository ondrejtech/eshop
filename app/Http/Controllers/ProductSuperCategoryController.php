<?php

namespace App\Http\Controllers;

use App\Models\ProductSuperCategory;
use Illuminate\Http\Request;

class ProductSuperCategoryController extends Controller
{
    public function index(){
        $xmlFile = file_get_contents('ProductSuperCategoryList.xml');
        $xmlData = simplexml_load_string($xmlFile);

        $json = json_encode($xmlData);
        $xml = json_decode($json,true);

        if(count($xml['ProductSuperCategory']) > 0){
            foreach($xml['ProductSuperCategory'] as $index =>$data){
                $dataArray[] = [
                    "SuperCategoryCode" => $data['SuperCategoryCode'],
                    "SuperCategoryName" => $data["SuperCategoryName"],
                    "ParentSuperCategoryCode" => $data['ParentSuperCategoryCode']
                ];
            }
            ProductSuperCategory::insert($dataArray);
        }else{
            die("Something went wrong");
        }
    }
}
