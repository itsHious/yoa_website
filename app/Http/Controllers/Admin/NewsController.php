<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\NewsDataTable;
use App\Http\Controllers\Controller;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(NewsDataTable $dt){
        return $dt->render('admin.news.index');
    }

    public function create(Request $r){
        $validator = Validator::make($r->all(), [
            'title' => 'required|max:255',
            'cover_img' => 'required',
            'content' => 'required',
        ]);


        if($validator->fails()){
            alert()->error('Action Aborted!',$validator->errors()->first());
            return back();
          }

        try {
            DB::beginTransaction();
            $imgname = $this->uploadImage($r->cover_img,'News/');

            $content = $r->content;
            $dom = new \DomDocument();
            $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $imageFile = $dom->getElementsByTagName('img');
  
            $path = "News/";
          
                      $abs_path = storage_path("app/public/$path");
            foreach($imageFile as $item => $image){
                $data = $image->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $imgeData = base64_decode($data);
                $image_name= Str::random(4).'_'.'.png';
                $path = $abs_path. $image_name;
                file_put_contents($path, $imgeData);
  
                $image->removeAttribute('src');
                $image->setAttribute('src', env('APP_URL').'/storage/News/'.$image_name);
             }
  
            $content = $dom->saveHTML();
  
            News::create([
              'title'=>$r->title,
              'cover_img'=>$imgname,
              'content'=>$dom->saveHTML(),
                      ]);
                      DB::commit();
                      alert()->success('Eureka','Blog posted successfully');
                      return back();
        } catch (Exception $e) {
           Log::info('Something went wrong posting news:::'.$e->getMessage());
           DB::rollBack();

           alert()->error('Action Aborted','Something Went Wrong Posting News');
           return back();
        }
    }

    public function view($id){
        $news = News::find($id);

        if($news !==null){
            return view('admin.news.view',compact('news'));
        }else{
            alert()->error('Action Aborted!','News Data Not Found');
            return back();
        }
    }

    public function edit($id){
        $news = News::find($id);

        if($news !==null){
            return view('admin.news.edit',compact('news'));
        }else{
            alert()->error('Action Aborted!','News Data Not Found');
            return back();
        }
    }

    public function update(Request $r,$id){
        $validator = Validator::make($r->all(), [
            'title' => 'required|max:255',
            'content' => 'required',
        ]);


        if($validator->fails()){
            alert()->error('Action Aborted!',$validator->errors()->first());
            return back();
          }


        $news = News::find($id);

        if($news !==null){
            $content = $r->content;
            $dom = new \DomDocument();
            $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $imageFile = $dom->getElementsByTagName('img');
        
            $path = "News/";
          
                      $abs_path = storage_path("app/public/$path");
            foreach($imageFile as $item => $image){
                $data = $image->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $imgeData = base64_decode($data);
                $image_name= Str::random(4).'_'.'.png';
                $path = $abs_path. $image_name;
                file_put_contents($path, $imgeData);
        
                $image->removeAttribute('src');
                $image->setAttribute('src', env('APP_URL').'/storage/News/'.$image_name);
             }
        
            $content = $dom->saveHTML();
if ($r->has('cover_img')) {
    $imgname = $this->uploadImage($r->cover_img,'News/');

  
     $news->update([
        'title'=>$r->title,
        'cover_img'=>$imgname,
        'content'=>$dom->saveHTML(),
     ]);

}else{
   
    $news->update([
        'title'=>$r->title,
        'content'=>$dom->saveHTML(),
     ]);
}

alert()->success('Eureka','News Article Updated!');
return redirect()->route('news.index');



        }else{
            alert()->error('Action Aborted!','News Data Not Found');
            return back();
        }
    }


    public function delete($id){
        $news = News::find($id);

        if($news !==null){
           $news->delete();
           alert()->success('Eureka!','News Article Deleted');
           return redirect()->route('news.index');
        }else{
            alert()->error('Action Aborted!','News Data Not Found');
            return back();
        }
    }
}
