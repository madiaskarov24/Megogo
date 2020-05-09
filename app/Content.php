<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'title',
        'img_src',
        'img_alt',
        'video_src',
        'duration',
        'description',
        'country',
        'rating',
        'year',
        'type',
        'category'
    ];
    //

    public function getImageAttribute()
    {
        return $this->profile_image;
    }
}
