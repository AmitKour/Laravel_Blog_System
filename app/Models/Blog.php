<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'title',
        'date',
        'ispublish',
        'picture_url',
        'category_id',


    ];

    use HasRichText;

    protected $guarded = [];

    protected $richTextAttributes = [
        'content',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

   
}

