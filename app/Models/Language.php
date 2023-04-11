<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['title', 'meta_description','meta_keywords','iso_code','is_active','local_code','www_link_title','language_name','og_title','og_type','og_image','og_description','tw_title','tw_description','tw_type','tw_image'];
}
