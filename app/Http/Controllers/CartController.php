<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class CartController extends Controller {

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
        return new RouteNotFoundException();
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

}