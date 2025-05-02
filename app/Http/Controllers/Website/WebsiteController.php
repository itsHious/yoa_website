<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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


    public function contact(){
        return view('website.contact');
    }
 
    public function sendcontact(Request $r){
        if($r->honeypot ==null){
            $validator = Validator::make($r->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
            ]);

            if ($validator->fails()) {
                alert()->error('Action Aborted', 'Please check your input');
                return back();
            }

        
            // send mail
            $data = [
                'name' => $r->name,
                'email' => $r->email,
                'message' => $r->message,
                'phone' => $r->phone,
            ];


            // Mail::to('info@fosda.org')->send(new SendContactMail($data));
            alert()->success('Eureka!', 'Your message has been sent successfully');
            return back();
        }else{
            alert()->error('Action Aborted', 'Please check your input');
            return back();
        }
    }
}
