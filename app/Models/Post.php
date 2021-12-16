<?php

namespace App\Models;
use TCG\Voyager\Traits\Resizable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    use Resizable;
    public function category()
    {
        return $this->belongsToMany('App\Models\DanhMuc','category_post','post_id','danh_muc_id')->withPivot('post_id','danh_muc_id');
    }
}
