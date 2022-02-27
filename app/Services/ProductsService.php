<?php

namespace App\Services;

use \App\Models\Product;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ProductsService {

    private $api_products = "https://api.brand.uat.thehuub.io/products";

    public function callApi(Request $request, $page = 1){

        $headers = [
            'jwt' => $request->session()->get('token')
        ];

        $products = [];

        try{
            $call = Http::withHeaders($headers)->get('https://api.brand.uat.thehuub.io/products?page='.$page.'&page_size=10');
            $response = json_decode($call->getBody()->getContents(), true);
            $responseAll = json_decode($call, true);
            $response_array = $responseAll['data'];

            foreach($response_array as $array_product){
                array_push($products, new Product($array_product));
            }

            return [$products, $response, $headers];

        }catch (\Exception $e){

            return redirect('/logout-api')->withErrors(["errors" => ["api_error" => "Token Expired. Please, try again."]]);
        }

    }

    public function getById(Request $request, $id){

        $headers = [
            'jwt' => $request->session()->get('token')
        ];

        try{
            $response = Http::withHeaders($headers)->get($this->api_products. '/'.$id);
            $responseById = json_decode($response->getBody());
            $response_array = $responseById->data;
            $response_object = ($response_array[0]);

            function objectToArray(&$response_object){
                return @json_decode(json_encode($response_object), true);
            }

            $final_array = objectToArray($response_object);

            return new Product($final_array);

        }catch (\Exception $e){

            return response()->json([$e->getMessage() => 'something went wrong']);
        }
    }

}



