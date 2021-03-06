<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;

    use Sluggable;
    protected $fillable = [
        'title',
        'detail',
        'videoId',
        'url',
        'thumb_big',
        'thumb_small',
        'iframe',
        'slug',
        'tags',
        'user_id',
        'blog_category_id',
    ];


    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>['source'=>'title']
        ];
    }
    public function getlink(){
        return url('/video/'.$this->slug);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }


    public function category(){
        return $this->belongsTo(BlogCategory::class,'blog_category_id','id');
    }

    public static function lastN($n){
        return Videos::orderBy('id', 'desc')->take($n)->get();
    }


}
