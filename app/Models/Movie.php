<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Movie extends Model
{
    use HasFactory,softDeletes;
    protected $table ='movies';
    protected $fillable =[
    'title',
    'trailer',
    'movie',
    'casts',
    'categories',
    'small_thumbnail',
    'large_thumbnail',
    'release_date',
    'about',
    'short_about',
    'duration',
    'featured'
    ];
}
