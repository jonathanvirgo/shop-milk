<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    //
    public function post()
    {
        return $this->belongsToMany('App\Models\Post','category_post','danh_muc_id','post_id')->withPivot('post_id','danh_muc_id');;
    }
}
