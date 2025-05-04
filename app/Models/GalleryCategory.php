<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    protected $table = 'gallery_category';

    protected $guarded=[];


    public function gallery(){
        return $this->hasMany(Gallery::class,'cat_id','id');
    }
}
