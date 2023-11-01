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


    public function submitCheckout(Request $request)
    {
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
                        "value" => Cart::subtotal()
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    session([
                        'paymentDetail' => [
                            'phone' => $request->input('phone'),
                            'country' => $request->input('country'),
                            'city' => $request->input('city'),
                            'street_address' => $request->input('street_address'),
                            'post_code' => $request->input('post_code'),
                            'discount_id' => $request->input('discount_id') ? $request->input('discount_id') : null,
                            'payment_method' => $request->input('payment_method'),
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
        dd($request);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
        $payment = session('paymentDetail');

        // dd($response);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // Data Validate
            // $request->validate([
            //     'mobile' => 'required|numeric',
            //     'address' => 'required|string',
            // ]);

            $data = $request->except(['_method']);

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
        } else {
            return redirect()->route('paypal_cancel');
        }
    }


    public function cancel()
    {
        return redirect()->route('about');
    }
}
