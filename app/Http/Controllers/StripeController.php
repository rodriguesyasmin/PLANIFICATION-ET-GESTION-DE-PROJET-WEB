<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

class StripeController extends Controller
{
    public function create()
    {
        return view('stripe.create');
    }


    public function store(Request $request)
    {
        echo "<pre>";
    print_r($request->all());
    echo "</pre>";
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        try {
            $token = \Stripe\Token::create([
                'card' => [
                    'number' => $request->get('card_number'),
                    'exp_month' => $request->get('exp_month'),
                    'exp_year' => $request->get('exp_year'),
                    'cvc' => $request->get('cvv'),
                ],
            ]);

            $charge = \Stripe\Charge::create([
                'amount' => 1000,
                'currency' => 'usd',
                'description' => 'achat',
                'source' => $token->id,
            ]);


            return redirect()->route('/')->with('success', 'pay ok!');

        } catch (\Stripe\Exception\CardException $e) {
            return back()->withErrors(['stripe_error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return back()->withErrors(['stripe_error' => $e->getMessage()]);
        }
    }
}
