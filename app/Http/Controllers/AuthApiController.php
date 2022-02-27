<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthApiController extends Controller

{
    private $api_auth = "https://api.brand.uat.thehuub.io/authenticate";

    private $inputPost = [
        'email' => '',
        'password' => ''
    ];

    public function login(Request $request){

        $this->inputPost['email'] = $request->input('email');

        $this->inputPost['password'] = $request->input('password');

        try{
            $response = Http::post($this->api_auth, $this->inputPost);
            $responseBody = json_decode($response->getBody());
            $token = $responseBody->data->jwt;
            session(['token' => $token]);

            return redirect('/all-products');

        }catch (\Exception $e){

            return redirect('/login')->withErrors(["errors" => ["api_error" => "Bad Credentials. Please, try again."]]);
        }

    }

    public function logout(Request $request) {

        $request->session()->flush();

        return redirect('/login');
    }
}
