<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Brand extends Model
{
    protected $fillable = ['brand_name', 'brand_products_number', 'publication_status'];

    public static function saveBrandInfo($request) {
//        Brand::create($request->all);

        $brand = new Brand();
        $brand->brand_name              =   $request->brand_name;
        $brand->brand_products_number   =   $request->brand_products_number;
        $brand->publication_status      =   $request->publication_status;
        $brand->save();
    }

    public static function updateBrandInfo($request) {
        $brand = Brand::find($request->brand_id);
        $brand->brand_name              =   $request->brand_name;
        $brand->brand_products_number   =   $request->brand_products_number;
        $brand->publication_status      =   $request->publication_status;
        $brand->save();
    }

    public static function deleteBrandInfo($request) {
        $brand = Brand::find($request->brand_id);
        $brand->delete();
    }

    public static function unpublishBrandInfo($request) {
        $brand = Brand::find($request->brand_id);

        $brand->publication_status = 0;
        $brand->save();
    }

    public static function publishBrandInfo($request) {
            $brand = Brand::find($request->brand_id);

            $brand->publication_status = 1;
            $brand->save();
        }



}






