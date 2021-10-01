<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * home or index page of the site
     *
     * @param Request $request
     * @return View
     */
    public function index( Request $request ): View {
        return view( 'home' );
    }

}