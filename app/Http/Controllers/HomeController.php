<?php

namespace App\Http\Controllers;

use App\Models\Company;
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
        $companies = Company::searchCompanies( $request->all() );
        $companies = $companies->paginate( 10 )->appends( request()->query() );
        return view( 'home', compact( 'companies' ) );
    }

}