<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'header',
        'image',
        'content'
    ];
    public function images(): HasMany {
        return $this->hasMany(BlogImage::class);
    }
}
