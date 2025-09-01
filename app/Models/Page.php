<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'template', 'content', 'featured_image',
        'extra_content', 'meta_title', 'meta_description'
    ];

    protected $casts = [
        'extra_content' => 'array',
    ];

    protected static function booted(): void
    {
        static::saving(function (Page $page) {
            $page->slug = Str::slug($page->title);
        });
    }
}
