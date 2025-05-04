<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    protected $guarded=[];


    public function galcat(){
        return $this->hasOne(GalleryCategory::class,'id','cat_id');
    }
}
