<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];
    protected $fillable = ['news_title', 'news_body', 'publisher', 'news_image'];
}
