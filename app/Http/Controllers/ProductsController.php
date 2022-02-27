<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductsService;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->service = new ProductsService();
    }

    public function index(Request $request, $page = 1) {

        if(!$request->session()->has('token')) {
            return redirect('/login');
        }

        $data = $this->service->callApi($request, $page);

        $products = $data[0];

        $pagination = $data[1]['paginator'];

        $numOfpages = $pagination['total_pages'];

        $current_page = $pagination['page_number'];

        return view('products.index', ['numOfpages'=>$numOfpages,'current_page'=>$current_page, "products" => $products]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if(!$request->session()->has('token')) {
            return redirect('/login');
        }

        return view('products.view', ["product" => $this->service->getById($request, $id)]);
    }

}
