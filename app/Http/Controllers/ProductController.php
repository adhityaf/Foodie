<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->Product = new Product();
    }

    public function productList(Product $product){
        
        $product = $this->Product->getAllData();

        // dd($product);
        return view('product.v_list', compact('product'));
    }

    public function productDetail(Product $product, $id){
        if (! $product = $this->Product->getData($id)) {
            abort(404);
        }
        
        $product = $this->Product->getData($id);
        // dd($product);
        return view('product.v_detail', compact('product'));
    }
}
