<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogToCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'category_id'
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
