<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function index()
    {
        // dd(Cart::content());
        return view('Pages.cart');
    }


    public function addItemToCart($id)
    {
        $Item = Menu::findOrFail($id);
        Cart::add([
            'id' => $Item->id,
            'name' => $Item->name,
            'qty' => 1,
            'price' => $Item->price,
            'weight' => 0,
            'options' => [
                'image' => $Item->image,
                'type' => $Item->type
            ]
        ]);

        return redirect()->back();
    }


    public function addProductToCart($id)
    {
        $Product = Product::findOrFail($id);
        Cart::add([
            'id' => $Product->id,
            'name' => $Product->name,
            'qty' => 1,
            'price' => $Product->price,
            'weight' => 0,
            'options' => [
                'image' => $Product->image,
            ]
        ]);

        return redirect()->back();
    }


    public function qtyInc($id)
    {
        $CartElement = Cart::get($id);
        Cart::update($id, $CartElement->qty + 1);
        return redirect()->back();
    }


    public function qtyDec($id)
    {
        $CartElement = Cart::get($id);
        if (($CartElement->qty - 1) > 0)
            Cart::update($id, $CartElement->qty - 1);
        return redirect()->back();
    }


    public function removeFromCart($id)
    {
        $CartElement = Cart::get($id);
        Cart::remove($id);
        Alert::success('Item Removed Successfully');

        return redirect()->back();
    }
}
