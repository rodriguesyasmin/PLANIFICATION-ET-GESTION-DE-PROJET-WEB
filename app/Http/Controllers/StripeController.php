<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

use Illuminate\Http\RedirectResponse;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;

class StripeController extends Controller
{
    /**
     * @return View|Factory|Application
     */
    public function checkout(): View|Factory|Application
    {
        return view('stripe/checkout');
    }

    /**
     * @return RedirectResponse
     * @throws ApiErrorException
     */
   public function test(): RedirectResponse
    {
        Stripe::setApiKey(config('stripe.test.sk'));

        return redirect()->away('https://checkout.stripe.com/pay' .
            '?key=' . config('stripe.test.pk') . // Publishable key
            '&locale=en' . // Language locale
            '&currency=gbp' . // Currency
            '&name=T-shirt' . // Product name
            '&amount=500' . // Amount (in cents)
            '&cancel_url=' . route('checkout') . // Cancel URL
            '&success_url=' . route('success')); // Success URL
    }


    /**
     * @return RedirectResponse
     * @throws ApiErrorException
     */
    public function live(): RedirectResponse
    {
        Stripe::setApiKey(config('stripe.live.sk'));

        $session = Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'gbp',
                        'product_data' => [
                            'name' => 'T-shirt',
                        ],
                        'unit_amount'  => 500,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    /**
     * @return View|Factory|Application
     */
    public function success(): View|Factory|Application
    {
        return view('success');
    }
}
