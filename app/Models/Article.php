<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    public $fillable = ['title', 'content', 'published', 'notifications'];

    public function casts(): array
    {
        return [
            'published' => 'boolean',
            'notifications' => 'array'
        ];
    }
}
