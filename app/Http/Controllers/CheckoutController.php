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
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class CheckoutController extends Controller
{
    public function index($discount)
    {
        return view('Pages.checkout', compact('discount'));
    }


    public function submitCash(Request $request, $discount)
    {
        // Data Validate
        $request->validate([
            'mobile' => 'required|numeric',
            'address' => 'required|string',
        ]);

        // dd($discount);
        $total = Cart::subtotal() - $discount + 1;
        $order = Order::create([
            'address' => $request->input('address'),
            'date' => Date::now(),
            'user_id' => Auth::user()->id,
            'status' => 'In Shipping',
            'total' => $total,

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

    public function submitCheckout(Request $request, $discount)
    {
        // Data Validate
        $request->validate([
            'mobile' => 'required|numeric',
            'address' => 'required|string',
        ]);

        $total = Cart::subtotal() - $discount + 1;
        //PayPal
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $total
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {

                    session([
                        'paymentDetail' => [
                            'address' => $request->address,
                            'date' => Date::now(),
                            'user_id' => Auth::user()->id,
                            'status' => 'In Shipping',
                            'total' => $total,
                        ]
                    ]);

                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function success(Request $request)
    {
        // dd($request);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
        $payment = session('paymentDetail');

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {

            // $data = $request->except(['_method']);

            // User::where('id', Auth::user()->id)->update($data);
            $payment = session('paymentDetail');

            $order = Order::create([
                'address' => $payment['address'],
                'date' => Date::now(),
                'user_id' => Auth::user()->id,
                'status' => $payment['status'],
                'total' => $payment['total'],

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

            session()->forget('paymentDetail');

            Cart::destroy();
            Alert::success('Your Order Submitted Successfully', 'Check Your Profile To Track It');

            return redirect()->route('index');
        } else {
            return redirect()->route('paypal_cancel');
        }
    }


    public function cancel()
    {
        return redirect()->route('about');
    }
}
