<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Stripe\Stripe;

class CartController extends Controller {

    public function __construct() {
        Stripe::setApiKey( env( 'STRIPE_SECRET_KEY' ) );
    }

    /**
     * show the cart page
     *
     * @return View
     */
    public function index(): View {
        $total = 0;
        foreach ( session()->get( 'cart' ) as $cart ) {
            $total += $cart['quantity'] * 50;
        }
        return view( 'cart', compact( 'total' ) );
    }

    /**
     * remove item from the sesison array
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function removeItem( $id ): RedirectResponse {
        $cart = session()->get( 'cart' );
        if ( !empty( $cart[$id] ) ) {
            unset( $cart[$id] );
            session()->put( 'cart', $cart );
            return redirect()->back();
        }
        return abort( 404 );
    }

    /**
     * add item to the cart sesison
     *
     * @param Company $company
     * @return RedirectResponse
     */
    public function addToCart( Company $company ): RedirectResponse {
        $cart = session()->get( 'cart' );
        if ( !$cart ) {
            $cart = [
                $company->id => [
                    'name'     => $company->root_domain,
                    'logo'     => $company->logo,
                    'quantity' => 1,
                ],
            ];
            session()->put( 'cart', $cart );
        }
        // if cart not empty then check if this product exist then increment quantity
        if ( isset( $cart[$company->id] ) ) {
            $cart[$company->id]['quantity']++;
            session()->put( 'cart', $cart );
            return redirect()->back();
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$company->id] = [
            'name'     => $company->root_domain,
            'logo'     => $company->logo,
            'quantity' => 1,
        ];
        session()->put( 'cart', $cart );
        return redirect()->back();
    }

    /**
     * checkout process to charge ammount from the user
     *
     * @return RedirectResponse
     */
    public function checkout(): RedirectResponse {
        $cart = session()->get( 'cart' );
        if ( !empty( $cart ) ) {
            $payment_array = [];

            foreach ( session()->get( 'cart' ) as $cart ) {
                array_push( $payment_array, [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            'name' => $cart['name'],
                        ],
                        'unit_amount'  => 50 * 100,
                    ],
                    'quantity'   => $cart['quantity'],
                ] );
            }

            $session = \Stripe\Checkout\Session::create( [
                'payment_method_types' => ['card'],
                'line_items'           => [$payment_array],
                'mode'                 => 'payment',
                'success_url'          => route( 'checkout.success' ),
                'cancel_url'           => route( 'checkout.cancel' ),
            ] );
            return redirect( $session->url );
        }

        return abort( 404 );
    }

    /**
     * callback url on stripe cancel
     *
     * @return View
     */
    public function checkoutCancel(): View {
        return view( 'cancel' );
    }

    /**
     * callback url on stripe success
     *
     * @return View
     */
    public function checkoutSuccess(): View {
        session()->forget( 'cart' );
        return view( 'success' );
    }

}