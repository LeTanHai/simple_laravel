<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SSOSAMLController extends Controller
{
    public function login() {
        return \Auth::guest() ? redirect('saml2/keycloak/login') : Redirect::intended('/');
    }
}
