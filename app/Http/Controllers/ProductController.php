<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductBrand;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $categories     = Category::where('publication_status', 1)
//                                  ->where('df', 'gg')
                                    ->get();
        $productBrands  = ProductBrand::where('publication_status', 1)->get();

        return view('admin.product.add-product', [
            'categories'    =>  $categories,
            'productBrands' =>  $productBrands,
        ]);
    }

    protected function productInfoValidate($request) {
        $this->validate($request, [
            'product_name'      =>  'required'
        ]);
    }

    protected function productImageUpload($request) {

        $productImage   = $request->file('product_image');
//        $imageName      = $productImage->getClientOriginalName();
        $fileType       = $productImage->getClientOriginalExtension();
        $imageName      = $request->product_name.'.'.$fileType;
//        return $imageName;
        $directory      = 'product-images/';
        $imageUrl       = $directory.$imageName;
//        $productImage->move($directory, $imageName);
        Image::make($productImage)->save($imageUrl);
        return $imageUrl;
    }

    protected function saveProductBasicInfo($request, $imageUrl) {
        $product = new Product();
        $product->category_id           =   $request->category_id;
        $product->product_brand_id      =   $request->product_brand_id;
        $product->product_name          =   $request->product_name;
        $product->product_price         =   $request->product_price;
        $product->product_quantity      =   $request->product_quantity;
        $product->short_description     =   $request->short_description;
        $product->long_description      =   $request->long_description;
        $product->product_image         =   $imageUrl;
        $product->publication_status    =   $request->publication_status;
        $product->save();
    }

    public function saveProduct(Request $request) {
        $this->productInfoValidate($request);
        $imageUrl = $this->productImageUpload($request);
        $this->saveProductBasicInfo($request, $imageUrl);

        return redirect('/product/add')->with('message', 'Product info save successfully');

    }

    public function manageProduct() {
//        $products = Product::all();
        $products = DB::table('products')
                        ->join('categories', 'products.category_id', '=', 'categories.id')
                        ->join('product_brands', 'products.product_brand_id', '=', 'product_brands.id')
                        ->select('products.*', 'categories.category_name', 'product_brands.product_brand_name')
                        ->get();
//        return $products;


        return view('admin.product.manage-product', [
            'products'      =>  $products
        ]);
    }

    public function editProduct($id) {
        $product        = Product::find($id);
        $categories     = Category::where('publication_status', 1)->get();
        $productBrands  = ProductBrand::where('publication_status', 1)->get();

        return view('admin.product.edit-product', [
            'product'       =>  $product,
            'categories'    =>  $categories,
            'productBrands' =>  $productBrands,
        ]);
    }

    public function productBasicInfoUpdate($product, $request, $imageUrl=null) {
        $product->category_id           =   $request->category_id;
        $product->product_brand_id      =   $request->product_brand_id;
        $product->product_name          =   $request->product_name;
        $product->product_price         =   $request->product_price;
        $product->product_quantity      =   $request->product_quantity;
        $product->short_description     =   $request->short_description;
        $product->long_description      =   $request->long_description;
        if ($imageUrl) {
            $product->product_image     =   $imageUrl;
        }
        $product->publication_status    =   $request->publication_status;
        $product->save();

    }

    public function updateProduct(Request $request) {
//        return $request->all();

//        $productImage = $_FILES['product_image'];
//        echo '<pre>';
//        print_r($productImage);


        $product = Product::find($request->product_id);
        $productImage = $request->file('product_image');
//        echo $productImage->getClientOriginalName();


        if ($productImage) {
            unlink($product->product_image);
            $imageUrl = $this->productImageUpload($request);
            $this->productBasicInfoUpdate($product, $request, $imageUrl);

        } else {
            $this->productBasicInfoUpdate($product, $request);
        }

        return redirect('/product/manage')->with('message', 'Product info update successfully');

    }



}










