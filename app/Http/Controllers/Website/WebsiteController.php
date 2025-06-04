<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\SendContactMail;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\News;
use App\Models\Team;
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


            Mail::to('info@yoagep.org')->send(new SendContactMail($data));
            alert()->success('Eureka!', 'Your message has been sent successfully');
            return back();
        }else{
            alert()->error('Action Aborted', 'Please check your input');
            return back();
        }
    }

    public function team(){
        $team = Team::get();
        return view('website.team',compact('team'));
    }


    public function gallery(){
        $cat = GalleryCategory::withCount('gallery')->latest()->get();

        return view('website.gallerycat',compact('cat'));
    }

    public function galleryview($id){
        $img = Gallery::where('cat_id',$id)->latest()->get();
        $cat = GalleryCategory::where('id',$id)->first();

        return view('website.galleryview',compact('img','cat'));

    }


    public function newslist(){
        $news = News::where('content_type','News')->latest()->paginate(9);
        return view('website.newslist',compact('news'));
    }

    public function newsread($id){
        $news = News::find($id);

        $related = News::where('id','<>',$id)->where('content_type','News')->latest()->take(3)->get();

        if($news !== null){
            return view('website.newsview',compact('news','related'));
        }else{
            alert()->error('Action Aborted!','News Article not Found');
            return back();
        }
    }




    public function publicationslist(){
        $news = News::where('content_type','Publications')->latest()->paginate(9);
        return view('website.pubslist',compact('news'));
    }

    public function pubsread($id){
        $news = News::find($id);

        $related = News::where('id','<>',$id)->where('content_type','Publications')->latest()->take(3)->get();

        if($news !== null){
            return view('website.pubsview',compact('news','related'));
        }else{
            alert()->error('Action Aborted!','Publication Article not Found');
            return back();
        }
    }
}
