<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home');
    }

    public function about(){
        return view('website.about');
    }

    public function services(){
        return view('website.services');
    }

    public function PolicyAdvisory($id){
       return view('website.service_detail',compact('id'));
    }
}
