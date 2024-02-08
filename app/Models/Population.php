<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Population extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['students', 'teachers', 'nonTeachers', 'levels'];
}
