<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public static function addToCart(Request $request) {
//        return $request->all();

        $product = Product::find($request->id);

        Cart::add([
            'id'            =>  $request->id,
            'name'          =>  $product->product_name,
            'price'         =>  $product->product_price,
            'quantity'      =>  $request->qty,
            'attributes'    => [
                'image'     =>  $product->product_image
            ]
        ]);

        return redirect('/cart/show');
    }

    public function showCart() {
        $cartProducts = Cart::getContent();
//        return $cartProducts;
        return view('front-end.cart.show-cart', [
            'cartProducts'      =>  $cartProducts
        ]);
    }

    public function deleteCart($id) {
        Cart::remove($id);
        return redirect('/cart/show');
    }

    public function updateCart(Request $request) {
        Cart::update($request->id, [
            'quantity'      =>  [
                'relative'  =>  false,
                'value'     =>  $request->qty
            ]

        ]);
        return redirect('/cart/show');
    }




}









