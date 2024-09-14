<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
            protected $fillable = [
                'title',
                'keyword',
                'content',
                'image1',
                'subtitle',
                'subcontent',
                'image2',
                'slug',
            ];
}
