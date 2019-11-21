<?php

namespace App\Http\Controllers;

use App\ProductBrand;
use Illuminate\Http\Request;

class ProductBrandController extends Controller
{
    public function index() {
        return view('admin.product-brand.add-product-brand');
    }

    public function saveBrand(Request $request) {

        $this->validate($request, [
            'product_brand_name'            =>  'required|regex:/^[\pL\s-]+$/u|max:20|min:2',
            'product_brand_description'     =>  'required',
            'publication_status'            =>  'required'
        ]);

        $productBrand = new ProductBrand();
        $productBrand->product_brand_name           =  $request->product_brand_name;
        $productBrand->product_brand_description    =  $request->product_brand_description;
        $productBrand->publication_status           =  $request->publication_status;
        $productBrand->save();


        return redirect('/productBrand/add')->with('message', 'Product Brand info save successfully');
    }



}








