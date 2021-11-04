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

    public function productDetail(Product $produk, $id){
        // if (! $produk = Product::where('id', $id)->where('tipeProduk', '=', 1)->first()) {
        //     abort(404);
        // }
        
        $produk = $this->Product->getAllData();
        return view('product.v_detail', compact('produk'));
    }
}
