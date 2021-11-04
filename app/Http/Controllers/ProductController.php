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
        // if (! $produk = Product::where('id', $id)->where('tipeProduk', '=', 1)->first()) {
        //     abort(404);
        // }
        
        $product = $this->Product->getData($id);
        return view('product.v_detail', compact('product'));
    }
}
