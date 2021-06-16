<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{  use HasFactory;

    protected $fillable = [
        'title',
        'detail',
        'icon',

    ];

    public static function allCategories(){
        return BlogCategory::all();
    }
    public function Blogs(){
        return $this->hasMany(Blog::class);
    }
}
