<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['year', 'divOne', 'divTwo', 'divThree', 'divFour', 'divZero', 'link', 'formId', 'pdf', 'examName', 'pdf'];
}
