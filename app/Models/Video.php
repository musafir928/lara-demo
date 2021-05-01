<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'category_id',
        'title',
        'language',
        'sub_category',
        'date_release',
        'artists',
        'description',
        'duration',
        'video_image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault(['name'=>'Default']);
    }
}
