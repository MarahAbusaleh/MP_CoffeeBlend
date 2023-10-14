<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use RealRashid\SweetAlert\Facades\Alert;


class CheckoutController extends Controller
{
    public function index()
    {
        return view('Pages.checkout');
    }


    public function submitCheckout(Request $request)
    {
        // Data Validate
        $request->validate([
            'mobile' => 'required|numeric',
            'address' => 'required|string',
        ]);

        $data = $request->except(['_token', '_method']);

        User::where('id', Auth::user()->id)->update($data);

        $cartTotal = Cart::subtotal();
        // dd($cartTotal);
        $order = Order::create([
            'address' => $request->address,
            'date' => Date::now(),
            'user_id' => Auth::user()->id,
            'status' => 'In Shipping',
            'total' => $cartTotal,
        ]);


        foreach (Cart::content() as $cartItem) {

            if ($cartItem->options->type == null) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'quantity' => $cartItem->qty,
                    'price' => $cartItem->price,
                    'product_id' => $cartItem->id,
                ]);
            } else {
                OrderItem::create([
                    'order_id' => $order->id,
                    'quantity' => $cartItem->qty,
                    'price' => $cartItem->price,
                    'menu_id' => $cartItem->id,
                ]);
            }
        }

        Cart::destroy();
        Alert::success('Your Order Submitted Successfully', 'Check Your Profile To Track It');

        return redirect()->route('index');
    }
}
