<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function website_creation(){
        return view('frontend.our_services.new_website_creation');
    }
    public function join_now()
    {
        return view('frontend.joinnow');

    }
}
