<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index() {
        return view('admin.brand.add-brand');
    }

    public function newBrand(Request $request) {
        Brand::saveBrandInfo($request);

        return redirect('/brand/add')->with('message', 'Brand Info Save Successfully');
    }

    public function manageBrand() {
        $brands = Brand::all();
        return view('admin.brand.manage-brand', [
            'brands'    =>  $brands
        ]);
    }

    public function editBrand($id) {
        $brand = Brand::find($id);
        return view('admin.brand.edit-brand', [
            'brand'     =>  $brand
        ]);
    }

    public function updateBrand(Request $request) {
        Brand::updateBrandInfo($request);

        return redirect('/brand/manage')->with('message', 'Brand info update successfully');
    }

    public function deleteBrand(Request $request) {
        Brand::deleteBrandInfo($request);

        return redirect('/brand/manage')->with('message', 'Brand info delete successfully');
    }

    public function unpublishBrand(Request $request) {
        Brand::unpublishBrandInfo($request);

        return redirect('/brand/manage')->with('message', 'Brand info unpublished successfully');
    }

    public function publishBrand(Request $request) {
            Brand::publishBrandInfo($request);

            return redirect('/brand/manage')->with('message', 'Brand info published successfully');
        }


}












