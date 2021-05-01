<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'language',
        'sub_category',
        'content',
        'description',
        'is_popular',
        'post_image',
    ];

    public function category()
    {
        // to avoid solid delete
        return $this->belongsTo(Category::class)->withDefault(['name' => 'Default']);
    }
}
