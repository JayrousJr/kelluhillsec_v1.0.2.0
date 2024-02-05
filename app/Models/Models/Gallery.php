<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];
    protected $fillable = [
        'image'
    ];

    public function fill(array $attributes)
    {
        if (!isset($attributes['token'])) {
            $attributes['token'] = Str::uuid();
        }

        return parent::fill($attributes);
    }
}
