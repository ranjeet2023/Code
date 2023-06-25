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

    public function frontend()
    {
        return view('frontend.ourCourses.frontend');
    }

    public function backend()
    {
        return view('frontend.ourCourses.backend');
    }

    public function fullstack()
    {
        return view('frontend.ourCourses.fullstack');
    }

    public function laravel()
    {
        return view('frontend.ourCourses.laravel');
    }

    public function NewWebsite(){
        return view('frontend.ourServices.newWebsite');
    }
    public function Ecommerce(){
        return view('frontend.ourServices.e-commerse');
    }
    public function School(){
        return view('frontend.ourServices.school');
    }
}
