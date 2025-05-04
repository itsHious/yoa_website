<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\GalleryCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class GalleryCategoryController extends Controller
{
    public function index(GalleryCategoryDataTable $dt){
        return $dt->render('admin.gallery.category.index');
    }

    public function store(Request $r){
        $img = $this->uploadImage($r->cover_img,'GalleryCategory/');

        GalleryCategory::create([
            'name'=>$r->name,
            'cover_img'=>$img
        ]);

        alert()->success('Eureka','Gallery Category Added!');
        return back();
    }

    public function categoryView($id){
        $cat = GalleryCategory::find($id);

        if($cat !==null){
            $img = Gallery::where('cat_id',$id)->latest()->get();
            return view('admin.gallery.index',compact('img','cat'));
        }else{
            alert()->error('Action Aborted!','Gallery Category Not Found');
            return back();
        }
    }

    public function storeimg(Request $r,$id){
        $validator = Validator::make($r->all(),[
            'img' => 'required|max:5120', // 5MB max for videos
          ]);
   

     

        if ($validator->fails()) {
            $errors = $validator->errors()->first();
            alert()->error('Action Aborted',$errors);
            return back();
                }

                if ($r->hasFile('img')) {
                    $imgg = $r->file('img');
                    foreach ($imgg as $img ) {
                        $imgname = $this->uploadFile($img,'Gallery/');
Gallery::create([
                'cat_id'=>$id,
                'img'=>$imgname
            ]);
                    }
                }

        alert()->success('Success', 'Files uploaded successfully!');
        return back();
    }


    public function deleteimg($id){
        $img = Gallery::find($id);

        if($img !==null){
            $img->delete();
            alert()->success('Success', 'File Deleted Successfully!');
            return back();
        }else{
            alert()->error('Action Aborted!','Gallery image Not Found');
            return back();
        }
    }

    public function editcat($id){
        $img = GalleryCategory::find($id);

        if($img !==null){
           return view('admin.gallery.category.edit',compact('img'));
        }else{
            alert()->error('Action Aborted!','Gallery Category Not Found');
            return back();
        }
    }

    public function updatecat(Request $r,$id){
        $img = GalleryCategory::find($id);

        if($img !==null){
         
     
                if($r->hasFile('cover_img')){
                    $this->deleteImage($img->image);
            $imagename = $this->uploadImage($r->cover_img,'GalleryCategory/');
    
            $img->update([
                'name'=>$r->name,
                'cover_img'=>$imagename
             ]);
                }else{
                    $img->update([
                        'name'=>$r->name,
                     ]);
                }
            
                alert()->success('Eureka','Category Updated!');
                return redirect()->route('gallery.category.index');
         


        }else{
            alert()->error('Action Aborted!','Gallery Category Not Found');
            return back();
        }
    }

    public function deletecat($id){
        $img = GalleryCategory::find($id);

        if($img !==null){
            $gal = Gallery::where('cat_id',$id)->get();

            foreach ($gal as $key) {
                $this->deleteImage($key->img);
                $key->delete();
               
            }
           
            $img->delete();

            alert()->success('Eureka','Category Deleted!');
            return back();
        }
    else{
        alert()->error('Action Aborted!','Gallery Category Not Found');
        return back();
    }
}

}
