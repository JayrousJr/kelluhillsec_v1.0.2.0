<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectClass extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    protected $fillable = ['service_code', 'service_class', 'service_name', 'is_active'];

    public function orders()
    {
        return $this->hasMany(ServiceOrder::class, 'project_class', 'service_class',);
    }
}
