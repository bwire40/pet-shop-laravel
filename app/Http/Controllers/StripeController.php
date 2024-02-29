<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;

class StripeController extends Controller
{
    //
    public function session()
    {


        $user = auth()->user();
        $accessoryItems = [];
        Stripe::setApiKey(config('stripe.sk'));


        foreach (session('cart') as $id => $details) {
            $accessory_name = $details['name'];
            $total = $details['price'];
            $quantity = $details['quantity'];

            $two0 = "00";
            $unit_amount = "$total$two0";

            $accessoryItems[] = [
                'price_data' => [
                    'product_data' => [
                        'name' => $accessory_name,
                    ],
                    'currency' => 'KES',
                    'unit_amount' => $unit_amount
                ],
                'quantity' => $quantity
            ];
        }


        // checkout
        $checkoutsession = \Stripe\Checkout\Session::create([
            'line_items' => [$accessoryItems],
            'mode' => 'payment',
            'allow_promotion_codes' => true,
            'metadata' => [
                'user_id' => $user->id
            ],
            'customer_email' => $user->email,
            'customer_phone' => $user->number,
            'success_url' => route('success'),
            'cancel_url' => route('cancel')

        ]);
        return redirect()->away($checkoutsession->url);
    }


    public function success()
    {
        return view('success.success');
    }
    public function cancel()
    {
        return view('cancel.index');
    }
}
