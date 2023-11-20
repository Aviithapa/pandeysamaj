<?php

namespace App\Models;

use App\Infrastructure\Traits\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, HasFilter, SoftDeletes;

    protected $table = 'posts';
    protected $fillable = [
        'title',
        'content',
        'excerpt',
        'image',
        'logo_image',
        'type',
        'meta_link',
        'meta_description',
        'slug',
        'facebook',
        'twitter',
        'LinkedIn',
        'instagram',
        'portfolio_type'
    ];
}
